<?php
@session_start();

if (isset($ColunistasInstanciada));
if (file_exists('Connections/conexao.php')) {
	include_once('Connections/con-pdo.php');
	include_once('funcoes.php');
} else {
	require_once('../Connections/con-pdo.php');
	include_once('../funcoes.php');
}

class Colunistas
{

	private $pdo = null;

	private static $Colunistas = null;

	private function __construct($conexao)
	{
		$this->pdo = $conexao;
	}

	public static function getInstance($conexao)
	{
		if (!isset(self::$Colunistas)) :
			self::$Colunistas = new Colunistas($conexao);
		endif;
		return self::$Colunistas;
	}


	function login($login, $senha)
	{

		if (isset($login) && $login <> '' and isset($senha) && $senha <> '') {
			try {
				$sql = "SELECT * FROM colunistas where login = :login and senha = :senha";
				$stm = $this->pdo->prepare($sql);
				$stm->bindValue(':login', $login, PDO::PARAM_STR);
				$stm->bindValue(':senha', $senha, PDO::PARAM_STR);
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);

				if ($rsDados[0]->id <> '') {
					$_SESSION['colunistaLogado'] = 'S';
					$_SESSION['dadosLogadoColunista'] = $rsDados[0];
					$_SESSION['MM_Username'] = $login;

					echo "	<script>
								window.location='.';
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

	function restritoColunista($redireciona = 'login.php')
	{
		if ($_SESSION['colunistaLogado'] == '') {
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
			unset($_SESSION['colunistaLogado']);
			unset($_SESSION['dadosLogadoColunista']);
			unset($_SESSION['MM_Username']);

			echo "	<script>
						window.location='login.php';
						</script>";
			exit;
		}
	}


	function rsDados($id = '', $orderBy = '', $limite = '')
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

		if ($_GET['busca'] <> '') {
			$sql .= " and (tbl_noticias.titulo like ? or tbl_noticias.noticia like ? or tbl_noticias.breve like ?)";
		}

		/// ORDEM		
		if ($orderBy <> '') {
			$sqlOrdem = " order by {$orderBy}";
		}

		if ($limite <> '') {
			$sqlLimite = " limit 0,{$limite}";
		}

		try {
			$sql = "SELECT * FROM colunistas where 1=1 $sql $sqlOrdem $sqlLimite";
			$stm = $this->pdo->prepare($sql);

			for ($i = 1; $i <= $nCampos; $i++) {
				$stm->bindValue($i, $campo[$i]);
			}

			if ($_GET['busca'] <> '') {
				$stm->bindValue($i, "%{$_GET['busca']}%");
				$i++;
				$stm->bindValue($i, "%{$_GET['busca']}%");
				$i++;
				$stm->bindValue($i, "%{$_GET['busca']}%");
			}

			$stm->execute();
			$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
			//print_r($stm);
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

	function add($mensagemAlert = '', $redireciona = '')
	{

		if (isset($_POST['acao']) && $_POST['acao'] == 'addColunistas') {


			try {



				$sql = "INSERT INTO colunistas (nome, email, telefone, login, senha, foto, descricao, facebook,twitter, instagram, linkedin, youtube, google, assunto) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
				$stm = $this->pdo->prepare($sql);
				$stm->bindValue(1, $_POST['nome']);
				$stm->bindValue(2, $_POST['email']);
				$stm->bindValue(3, $_POST['telefone']);
				$stm->bindValue(4, $_POST['login']);
				$stm->bindValue(5, $_POST['senha']);
				$stm->bindValue(6, upload('foto', '../img_conteudos', 'N'));
				$stm->bindValue(7, $_POST['descricao']);
				$stm->bindValue(8, $_POST['facebook']);
				$stm->bindValue(9, $_POST['twitter']);
				$stm->bindValue(10, $_POST['instagram']);
				$stm->bindValue(11, $_POST['youtube']);
				$stm->bindValue(12, $_POST['linkedin']);
				$stm->bindValue(13, $_POST['google']);
				$stm->bindValue(14, $_POST['assunto']);
				$stm->execute();
				$idConteudo = $this->pdo->lastInsertId();

				/////////////
			} catch (PDOException $erro) {
				echo $erro->getMessage();
			}



			if ($mensagemAlert <> '') {
				echo "	<script>
							alert('{$mensagemAlert}');
							</script>";
			}

			$linkRedireciona = "colunistas.php";

			if ($redireciona <> '') {
				$linkRedireciona = $redireciona;
			}

			echo "	<script>
						window.location='{$linkRedireciona}';
						</script>";
			exit;
		}
	}

	function editar($redireciona = '')
	{
		if (isset($_POST['acao']) && $_POST['acao'] == 'editarColunistas') {

			try {
				$sql = "UPDATE colunistas SET nome=?, email=?, telefone=?, login=?, senha=?, foto=?, descricao=?, facebook=?, twitter=?, instagram=?, youtube=?, linkedin=?, google=?, assunto=? WHERE id=?";
				$stm = $this->pdo->prepare($sql);
				$stm->bindValue(1, $_POST['nome']);
				$stm->bindValue(2, $_POST['email']);
				$stm->bindValue(3, $_POST['telefone']);
				$stm->bindValue(4, $_POST['login']);
				$stm->bindValue(5, $_POST['senha']);
				$stm->bindValue(6, upload('foto', '../img_conteudos', 'N'));
				$stm->bindValue(7, $_POST['descricao']);
				$stm->bindValue(8, $_POST['facebook']);
				$stm->bindValue(9, $_POST['twitter']);
				$stm->bindValue(10, $_POST['instagram']);
				$stm->bindValue(11, $_POST['youtube']);
				$stm->bindValue(12, $_POST['linkedin']);
				$stm->bindValue(13, $_POST['google']);
				$stm->bindValue(14, $_POST['assunto']);
				$stm->bindValue(15, $_POST['id']);
				$stm->execute();
			} catch (PDOException $erro) {
				echo $erro->getMessage();
			}

			if (isset($_POST['volta']) == 'colunista') {
				$linkRedireciona = ".";
			} else {
				$linkRedireciona = "colunistas.php";
			}


			if ($redireciona <> '') {
				$linkRedireciona = $redireciona;
			}

			echo "	<script>
						window.location='{$linkRedireciona}';
						</script>";
			exit;
		}
	}

	function excluir()
	{
		if (isset($_GET['acao']) && $_GET['acao'] == 'excluirColunistas') {

			try {
				$sql = "DELETE FROM colunistas WHERE id=? ";
				$stm = $this->pdo->prepare($sql);
				$stm->bindValue(1, $_GET['id']);
				$stm->execute();
			} catch (PDOException $erro) {
				echo $erro->getMessage();
			}
		}
	}
}

$ColunistasInstanciada = 'S';
