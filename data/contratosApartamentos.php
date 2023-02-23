<?php
@session_start();

if (isset($ContratosApartamentosInstanciada)) {
	if (file_exists('Connections/conexao.php')) {
		include('Connections/con-pdo.php');
		include('funcoes.php');
	} else {
		require_once('../Connections/con-pdo.php');
		include('../funcoes.php');
	}

	class ContratosApartamentos
	{

		protected $exibeCampos = array();
		protected $addWhere;

		protected $camposPersonalizados = array();
		protected $nomeCamposPersonalizados = array();

		private $pdo = null;

		private static $ContratosApartamentos = null;

		private function __construct($conexao)
		{
			$this->pdo = $conexao;
		}

		public static function getInstance($conexao)
		{
			if (!isset(self::$ContratosApartamentos)) :
				self::$ContratosApartamentos = new ContratosApartamentos($conexao);
			endif;
			return self::$ContratosApartamentos;
		}

		function rsDados($id = '', $orderBy = '', $limite = '')
		{

			/// FILTROS
			$nCampos = 0;
			$sql = '';
			$sqlOrdem = '';
			$sqlLimite = '';

			if ($id <> '') {
				$sql .= " and tbl_contrato_apartamento.id = ?";
				$nCampos++;
				$campo[$nCampos] = $id;
			}

			/// ORDEM		
			if ($orderBy <> '') {
				$sqlOrdem = " order by {$orderBy}";
			}

			if ($limite <> '') {
				$sqlLimite = " limit 0,{$limite}";
			}

			try {
				$sql = "SELECT tbl_contrato_apartamento.*, tbl_proprietario.nome as proprietario, tbl_noticias.titulo as metragem FROM tbl_contrato_apartamento left join tbl_proprietario on tbl_apartamento.id_proprietario = tbl_proprietario.id left join tbl_noticias on tbl_apartamento.id_metragem = tbl_noticias.id where 1=1 $sql $sqlOrdem $sqlLimite";
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
			if (isset($_POST['acao']) && $_POST['acao'] == 'addContratosApartamentos') {

				// Verificar se já existe:
				$sql = "SELECT tbl_contrato_apartamento.* FROM tbl_contrato_apartamento where id_apartamento = ? and ativo = ? ";
				$stm = $this->pdo->prepare($sql);
				$stm->bindValue(1, $_POST['id_apartamento']);
				$stm->bindValue(2, 'S');
				$stm->execute();

				if (count($stm->fetchAll(PDO::FETCH_OBJ)) > 0) {
					echo "	<script>
							alert('Apartamento já cadastrado e ativo. Por favor. Cadastre em outro apartamento.');
							history.back();
							</script>";
					exit;
				} else {
					try {

						$sql = "INSERT INTO tbl_contrato_apartamento (id_apartamento, id_vencimento, data_vencimento, ativo) VALUES (?, ?, ?, ?)";
						$stm = $this->pdo->prepare($sql);
						$stm->bindValue(1, $_POST['id_apartamento']);
						$stm->bindValue(2, $_POST['id_vencimento']);
						$stm->bindValue(3, ($_POST['data_vencimento'] <> '') ? $_POST['data_vencimento'] : NULL);
						$stm->bindValue(3, $_POST['ativo']);
						$stm->execute();
						$idConteudo = $this->pdo->lastInsertId();

						if ($redireciona == '') {
							$redireciona = 'contratoApartamentos.php';
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

		function editar($redireciona = 'contratoApartamentos.php')
		{
			if (isset($_POST['acao']) && $_POST['acao'] == 'editarContratosApartamentos') {
				try {

					$sql = "UPDATE tbl_contrato_apartamento SET id_apartamento=?, id_vencimento=?, data_vencimento=?, ativo=? WHERE id=?";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_POST['id_apartamento']);
					$stm->bindValue(2, $_POST['id_vencimento']);
					$stm->bindValue(3, ($_POST['data_vencimento'] <> '') ? $_POST['data_vencimento'] : NULL);
					$stm->bindValue(4, $_POST['ativo']);
					$stm->bindValue(5, $_POST['id']);
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
			if (isset($_GET['acao']) && $_GET['acao'] == 'excluirContratosApartamentos') {

				try {
					$sql = "DELETE FROM tbl_contrato_apartamento WHERE id=? ";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_GET['id']);
					$stm->execute();
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}
			}
		}
	}

	$ContratosApartamentosInstanciada = 'S';
}
