<?php
@session_start();

if (isset($ClientesInstanciada)) {
	if (file_exists('Connections/conexao.php')) {
		include('Connections/con-pdo.php');
		include('funcoes.php');
	} else {
		require_once('../Connections/con-pdo.php');
		include('../funcoes.php');
	}

	class Clientes
	{

		protected $exibeCampos = array();
		protected $addWhere;

		protected $camposPersonalizados = array();
		protected $nomeCamposPersonalizados = array();

		private $pdo = null;

		private static $Clientes = null;

		private function __construct($conexao)
		{
			$this->pdo = $conexao;
		}

		public static function getInstance($conexao)
		{
			if (!isset(self::$Clientes)) :
				self::$Clientes = new Clientes($conexao);
			endif;
			return self::$Clientes;
		}

		/*public function add_exibeCampos($campo) {
			$this->exibeCampos[] = $campo;
		}*/


		public function ReiniciaAddCamposPersonalizados()
		{
			unset($this->camposPersonalizados);
			unset($this->nomeCamposPersonalizados);
		}

		public function add_campoPersonalizado($campo, $asCampoNome)
		{
			$this->camposPersonalizados[] = $campo;
			$this->nomeCamposPersonalizados[] = $asCampoNome;
		}

		function login($login, $senha, $redireciona = 'painel-cliente.php')
		{



			if (isset($login) && $login <> '' and isset($senha) && $senha <> '') {
				try {
					$sql = "SELECT * FROM tbl_users where email = :login and senha = :senha";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(':login', $login, PDO::PARAM_STR);
					$stm->bindValue(':senha', $senha, PDO::PARAM_STR);
					$stm->execute();
					$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);

					if ($rsDados[0]->id <> '') {
						$_SESSION['clienteLogado'] = 'S';
						$_SESSION['dadosLogadoCLiente'] = $rsDados[0];
						$_SESSION['MM_Username'] = $login;

						echo "	<script>
								window.location='{$redireciona}';
								</script>";
						exit;
					} else {
						echo "	<script>
								alert('Dados inválidos. Por favor, verifique os dados digitados.');
								window.location='login.php';
								</script>";
						exit;
					}
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}
			}
		}

		function restrito($redireciona = 'login.php')
		{
			if ($_SESSION['clienteLogado'] == '') {
				echo "	<script>
						alert('Por favor. Realize seu login.');
						window.location='login.php';
						</script>";
				exit;
			}
		}

		function logout()
		{
			if (isset($_GET['acao']) && $_GET['acao'] == 'sair') {
				unset($_SESSION['clienteLogado']);
				unset($_SESSION['dadosLogadoCLiente']);
				unset($_SESSION['MM_Username']);

				echo "	<script>
						window.location='.';
						</script>";
				exit;
			}
		}

		function rsDados($id = '', $orderBy = '', $limite = '', $ativo = '', $temFoto = '', $id_cidade = '', $id_estado = '', $email = '')
		{

			/// FILTROS
			$nCampos = 0;
			$sql = '';
			$sqlOrdem = '';
			$sqlLimite = '';

			if ($id <> '') {
				$sql .= " and id = ?";
				$nCampos++;
				$campo[$nCampos] = $id;
			}

			if ($email <> '') {
				$sql .= " and email = ?";
				$nCampos++;
				$campo[$nCampos] = $email;
			}

			if ($id_cidade <> '') {
				$sql .= " and id_cidade = ?";
				$nCampos++;
				$campo[$nCampos] = $id_cidade;
			}

			if ($id_estado <> '') {
				$sql .= " and id_estado = ?";
				$nCampos++;
				$campo[$nCampos] = $id_estado;
			}

			if ($ativo == 'S') {
				$sql .= " and ativo = 'S'";
			}

			if ($ativo == 'N') {
				$sql .= " and (ativo = 'N' or ativo is null)";
			}

			if ($temFoto == 'S') {
				$sql .= " and foto <> '' and foto is not null";
			}

			/// ORDEM		
			if ($orderBy <> '') {
				$sqlOrdem = " order by {$orderBy}";
			}

			if ($limite <> '') {
				$sqlLimite = " limit 0,{$limite}";
			}

			try {
				$sql = "SELECT * FROM clientes where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);

				for ($i = 1; $i <= $nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}

				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
				//print_r($rsDados);
				if ($id <> '' or $limite == 1) {
					return ($rsDados[0]);
				} else {
					return ($rsDados);
				}
			} catch (PDOException $erro) {
				echo $erro->getMessage();
			}
		}

		function add($redireciona = '')
		{
			if (isset($_POST['acao']) && $_POST['acao'] == 'addClientes') {

				// Verificar se já existe:
				$sql = "SELECT * FROM clientes where email = ? or cpf_cnpj = ? ";
				$stm = $this->pdo->prepare($sql);
				$stm->bindValue(1, $_POST['email']);
				$stm->bindValue(2, $_POST['cpf_cnpj']);
				$stm->execute();

				if (count($stm->fetchAll(PDO::FETCH_OBJ)) > 0) {
					echo "	<script>
							alert('E-mail ou CPF já cadastrado. Por favor. Tente realizar login com seu e-mail de acesso.');
							window.location='.';
							</script>";
					exit;
				} else {
					try {

						if (file_exists('Connections/conexao.php')) {
							$pastaArquivos = 'img_noticias';
						} else {
							$pastaArquivos = '../img_noticias';
						}

						$sql = "INSERT INTO clientes (nome, nascimento, email, bairro, cep, cidade, estado, telefone, cpf_cnpj, endereco, celular, modificado, criado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
						$stm = $this->pdo->prepare($sql);
						$stm->bindValue(1, $_POST['nome']);
						$stm->bindValue(2, ($_POST['nascimento'] <> '') ? $_POST['nascimento'] : NULL);
						$stm->bindValue(3, $_POST['email']);
						$stm->bindValue(4, $_POST['bairro']);
						$stm->bindValue(5, $_POST['cep']);
						$stm->bindValue(6, $_POST['cidade']);
						$stm->bindValue(7, $_POST['estado']);
						$stm->bindValue(8, $_POST['telefone']);
						$stm->bindValue(9, $_POST['cpf_cnpj']);
						$stm->bindValue(10, $_POST['endereco']);
						$stm->bindValue(11, $_POST['celular']);
						$stm->bindValue(12, date('Y-m-d H:i:s'));
						$stm->bindValue(13, date('Y-m-d H:i:s'));
						$stm->execute();
						$idConteudo = $this->pdo->lastInsertId();


						if ($redireciona == '') {
							$redireciona = 'clientes.php';
						}

						echo "	<script>
								window.location='{$redireciona}';
								</script>";
						exit;
					} catch (PDOException $erro) {
						echo $erro->getMessage();
					}
				}
			}
		}

		function editar($redireciona = 'clientes.php')
		{
			if (isset($_POST['acao']) && $_POST['acao'] == 'editarClientes') {
				try {

					if (file_exists('Connections/conexao.php')) {
						$pastaArquivos = 'img_noticias';
					} else {
						$pastaArquivos = '../img_noticias';
					}

					$sql = "UPDATE clientes SET nome=?, nascimento=?, email=?, bairro=?, cep=?, cidade=?, estado=?, telefone=?, cpf_cnpj=?, endereco=?, celular=?, criado=?, modificado=? WHERE id=?";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_POST['nome']);
					$stm->bindValue(2, ($_POST['nascimento'] <> '') ? $_POST['nascimento'] : NULL);  //echo $_POST['data']; exit; 
					$stm->bindValue(3, $_POST['email']);
					$stm->bindValue(4, $_POST['bairro']);
					$stm->bindValue(5, $_POST['cep']);
					$stm->bindValue(6, $_POST['cidade']);
					$stm->bindValue(7, $_POST['estado']);
					$stm->bindValue(8, $_POST['telefone']);
					$stm->bindValue(9, $_POST['cpf_cnpj']);
					$stm->bindValue(10, $_POST['endereco']);
					$stm->bindValue(11, $_POST['celular']);
					$stm->bindValue(12, $_POST['criado']);
					$stm->bindValue(13, date('Y-m-d H:i:s'));
					$stm->bindValue(14, $_POST['id']);
					$stm->execute();
					$id = $_POST['id'];


					echo "	<script>
							window.location='{$redireciona}';
							</script>";
					exit;
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}
			}
		}

		function excluir()
		{
			if (isset($_GET['acao']) && $_GET['acao'] == 'excluirClientes') {

				try {
					$sql = "DELETE FROM clientes WHERE id=? ";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_GET['id']);
					$stm->execute();
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}
			}
		}
	}

	$ClientesInstanciada = 'S';
}
