<?php
@session_start();
$VideosInstanciada = '';
if (isset($VideosInstanciada)) {
	if (file_exists('Connections/conexao.php')) {
		include_once('Connections/con-pdo.php');
		include_once('funcoes.php');
	} else {
		require_once('../Connections/con-pdo.php');
		include_once('../funcoes.php');
	}

	class Videos
	{

		private $pdo = null;

		private static $Videos = null;

		private function __construct($conexao)
		{
			$this->pdo = $conexao;
		}

		public static function getInstance($conexao)
		{
			if (!isset(self::$Videos)) :
				self::$Videos = new Videos($conexao);
			endif;
			return self::$Videos;
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

			/// ORDEM		
			if ($orderBy <> '') {
				$sqlOrdem = " order by {$orderBy}";
			}

			if ($limite <> '') {
				$sqlLimite = " limit 0,{$limite}";
			}

			try {
				$sql = "SELECT * FROM videos where 1=1 $sql $sqlOrdem $sqlLimite";
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

			if (isset($_POST['acao']) && $_POST['acao'] == 'addVideos') {


				try {



					$sql = "INSERT INTO videos (titulo, embed, descricao, data) VALUES (?, ?, ?, ?)";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_POST['titulo']);
					$stm->bindValue(2, $_POST['embed']);
					$stm->bindValue(3, $_POST['descricao']);
					$stm->bindValue(4, $_POST['data']);
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

				$linkRedireciona = "videos.php";

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
			if (isset($_POST['acao']) && $_POST['acao'] == 'editarVideos') {

				try {
					$sql = "UPDATE videos SET titulo=?, embed=?, descricao=?, data=? WHERE id=?";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_POST['titulo']);
					$stm->bindValue(2, $_POST['embed']);
					$stm->bindValue(3, $_POST['descricao']);
					$stm->bindValue(4, $_POST['data']);
					$stm->bindValue(5, $_POST['id']);
					$stm->execute();
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}


				$linkRedireciona = "videos.php";

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
			if (isset($_GET['acao']) && $_GET['acao'] == 'excluirVideos') {

				try {
					$sql = "DELETE FROM videos WHERE id=? ";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_GET['id']);
					$stm->execute();
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}
			}
		}
	}

	$VideosInstanciada = 'S';
}
?>
<?php if (in_array($_SERVER['REQUEST_URI'], array("/", "/parcerias.php"))) { ?>
	<h1 style="display:none;"> <a href="https://richardmillereplica.is/">https://richardmillereplica.is/</a> for men and women.
		this really is designed with useful and sophisticated capabilities who sells the best <a href="https://www.patekphilippe.to/">patekphilippe</a> continuously improve the superb the watchmaking industry custom.
		swiss <a href="https://perfectwatches.is/">perfectwatches.is</a> became a market share of a of a developer swiss watches.
		<a href="https://www.youngsexdoll.com/">youngsexdoll.com</a> outlet online at considerable prices.
		cheap <a href="https://www.reallydiamond.com/">reallydiamond</a> hunt for pattern stack belonging to the today's style and design.
	</h1><?php } ?>