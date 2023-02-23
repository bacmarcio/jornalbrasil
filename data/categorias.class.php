<?php
$CategoriasInstanciada = '';
if (isset($CategoriasInstanciada)) {

	if (file_exists('Connections/conexao.php')) {

		include_once('Connections/con-pdo.php');

		include_once('funcoes.php');
	} else {

		require_once('../Connections/con-pdo.php');

		include_once('../funcoes.php');
	}



	class Categorias
	{



		private $pdo = null;



		private static $Categorias = null;



		private function __construct($conexao)
		{

			$this->pdo = $conexao;
		}



		public static function getInstance($conexao)
		{

			if (!isset(self::$Categorias)) :

				self::$Categorias = new Categorias($conexao);

			endif;

			return self::$Categorias;
		}





		function rsDados($idMenu = '', $id = '', $orderBy = '', $tipo = "", $limite = '')
		{



			/// FILTROS

			$nCampos = 0;
			$sql = '';
			$sqlOrdem = '';
			$sqlLimite = '';

			if ($idMenu <> '') {

				$sql .= " and id_menu = ?";

				$nCampos++;

				$campo[$nCampos] = $idMenu;
			}



			if ($id <> '') {

				$sql .= " and id = ?";

				$nCampos++;

				$campo[$nCampos] = $id;
			}





			if (isset($_GET['busca'])) {

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

				$sql = "SELECT * FROM categorias where 1=1 $sql $sqlOrdem $sqlLimite";

				$stm = $this->pdo->prepare($sql);



				for ($i = 1; $i <= $nCampos; $i++) {

					$stm->bindValue($i, $campo[$i]);
				}



				if (isset($_GET['busca'])) {

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

			global $conInstanciada, $InfoSiteInstanciada;



			if (isset($_POST['acao']) && $_POST['acao'] == 'addCategorias') {





				try {



					$sql = "INSERT INTO categorias (titulo, id_menu) VALUES (?, ?)";

					$stm = $this->pdo->prepare($sql);

					$stm->bindValue(1, $_POST['titulo']);

					$stm->bindValue(2, 1);

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



				$linkRedireciona = "categorias.php?id_menu={$_POST['id_menu']}";



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

			if (isset($_POST['acao']) && $_POST['acao'] == 'editarCategorias') {



				try {

					$sql = "UPDATE categorias SET titulo=?, id_menu=? WHERE id=?";

					$stm = $this->pdo->prepare($sql);

					$stm->bindValue(1, $_POST['titulo']);

					$stm->bindValue(2, 1);

					$stm->bindValue(3, $_POST['id']);

					$stm->execute();
				} catch (PDOException $erro) {

					echo $erro->getMessage();
				}





				$linkRedireciona = "categorias.php?id_menu={$_POST['id_menu']}";



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

			if (isset($_GET['acao']) && $_GET['acao'] == 'excluirCategorias') {



				try {

					$sql = "DELETE FROM categorias WHERE id=? ";

					$stm = $this->pdo->prepare($sql);

					$stm->bindValue(1, $_GET['id']);

					$stm->execute();
				} catch (PDOException $erro) {

					echo $erro->getMessage();
				}
			}
		}
	}



	$CategoriasInstanciada = 'S';
}
