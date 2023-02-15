<?php
@session_start();

if (isset($AcessoInstanciada));

if (file_exists('Connections/conexao.php')) {
	include('Connections/con-pdo.php');
	include('funcoes.php');
} else {
	require_once('../Connections/con-pdo.php');
	include('../funcoes.php');
}

class Acesso
{

	private $pdo = null;

	private static $Acesso = null;

	private function __construct($conexao)
	{
		$this->pdo = $conexao;
	}

	public static function getInstance($conexao)
	{
		if (!isset(self::$Acesso)) :
			self::$Acesso = new Acesso($conexao);
		endif;
		return self::$Acesso;
	}

	function restritoGerenciador()
	{
		//print_r($_SESSION);
		if ($_SESSION['gerenciadorLogado'] == '') {
			echo "	<script>
						window.location='login.php'
						</script>";
			exit;
		}
	}

	function logout()
	{
		if ($_GET['acao'] == 'logout') {
			unset($_SESSION['gerenciadorLogado']);
			unset($_SESSION['dadosLogado']);
			echo "	<script>
						window.location='login.php'
						</script>";
			exit;
		}
	}

	function login($login, $senha)
	{

		if ($login <> '' and $senha <> '') {
			try {
				$sql = "SELECT * FROM admin where login = :login and senha = :senha";
				$stm = $this->pdo->prepare($sql);
				$stm->bindValue(':login', $login, PDO::PARAM_STR);
				$stm->bindValue(':senha', $senha, PDO::PARAM_STR);
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);

				if ($rsDados[0]->id <> '') {
					$_SESSION['gerenciadorLogado'] = 'S';
					$_SESSION['dadosLogado'] = $rsDados[0];

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



	function rsDados($login = '', $id = '')
	{

		$nCampos = 0;
		$sql = '';

		if ($login <> '') {
			$sql .= " and login = ?";
			$nCampos++;
			$campo[$nCampos] = $login;
		}

		if ($id <> '') {
			$sql .= " and id = ?";
			$nCampos++;
			$campo[$nCampos] = $id;
		}

		try {
			$sql = "SELECT * FROM admin where 1=1 $sql";
			$stm = $this->pdo->prepare($sql);

			for ($i = 1; $i <= $nCampos; $i++) {
				$stm->bindValue($i, $campo[$i]);
			}

			$stm->execute();
			$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
			return ($rsDados[0]);
		} catch (PDOException $erro) {
			echo $erro->getMessage();
		}
	}



	function editar()
	{
		if ($_POST['acao'] == 'editarUser') {
			try {
				$sql = "UPDATE admin SET login=?, senha=?, nome=?, email=? WHERE id=?";
				$stm = $this->pdo->prepare($sql);
				$stm->bindValue(1, $_POST['login']);
				$stm->bindValue(2, $_POST['senha']);
				$stm->bindValue(3, $_POST['nome']);
				$stm->bindValue(4, $_POST['email']);
				$stm->bindValue(5, $_POST['id']);
				$stm->execute();

				echo "	<script>
							window.location='.';
							</script>";
				exit;
			} catch (PDOException $erro) {
				echo $erro->getMessage();
			}
		}
	}
}

$AcessoInstanciada = 'S';
