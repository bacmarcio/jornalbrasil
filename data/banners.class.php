<?php
@session_start();
$BannersInstanciada = '';
if (isset($BannersInstanciada)) {
	if (file_exists('Connections/conexao.php')) {
		include_once('Connections/con-pdo.php');
		include_once('funcoes.php');
	} else {
		require_once('../Connections/con-pdo.php');
		include_once('../funcoes.php');
	}

	class Banners
	{

		private $pdo = null;

		private static $Banners = null;

		private function __construct($conexao)
		{
			$this->pdo = $conexao;
		}

		public static function getInstance($conexao)
		{
			if (!isset(self::$Banners)) :
				self::$Banners = new Banners($conexao);
			endif;
			return self::$Banners;
		}


		function rsDados($id = '', $orderBy = '', $limite = '', $posicao = '')
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
			if ($posicao <> '') {
				$sql .= " and posicao = ?";
				$nCampos++;
				$campo[$nCampos] = $posicao;
			}

			/// ORDEM		
			if ($orderBy <> '') {
				$sqlOrdem = " order by {$orderBy}";
			}

			if ($limite <> '') {
				$sqlLimite = " limit 0,{$limite}";
			}

			try {
				$sql = "SELECT * FROM banners where 1=1 $sql $sqlOrdem $sqlLimite";
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

			if (isset($_POST['acao']) && $_POST['acao'] == 'addBanners') {


				try {



					$sql = "INSERT INTO banners (titulo, foto, link) VALUES (?, ?, ?)";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_POST['titulo']);
					$stm->bindValue(2, upload('foto', '../img_conteudos', 'N'));
					$stm->bindValue(3, $_POST['link']);

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

				$linkRedireciona = "banners.php";

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
			if (isset($_POST['acao']) && $_POST['acao'] == 'editarBanners') {

				try {
					$sql = "UPDATE banners SET titulo=?, foto=?, link=? WHERE id=?";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_POST['titulo']);
					$stm->bindValue(2, upload('foto', '../img_conteudos', 'N'));
					$stm->bindValue(3, $_POST['link']);
					$stm->bindValue(4, $_POST['id']);
					$stm->execute();
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}


				$linkRedireciona = "banners.php";

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
			if (isset($_GET['acao']) && $_GET['acao'] == 'excluirBanners') {

				try {
					$sql = "DELETE FROM banners WHERE id=? ";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_GET['id']);
					$stm->execute();
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}
			}
		}
	}

	$BannersInstanciada = 'S';
}
