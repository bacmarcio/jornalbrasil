<?php

@session_start();
$FeedInstanciada = '';


if (isset($FeedInstanciada)) {

	if (file_exists('Connections/conexao.php')) {

		include_once('Connections/con-pdo.php');

		include_once('funcoes.php');
	} else {

		require_once('../Connections/con-pdo.php');

		include_once('../funcoes.php');
	}



	class Feed
	{



		private $pdo = null;



		private static $Feed = null;



		private function __construct($conexao)
		{

			$this->pdo = $conexao;
		}



		public static function getInstance($conexao)
		{

			if (!isset(self::$Feed)) :

				self::$Feed = new Feed($conexao);

			endif;

			return self::$Feed;
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

				$sql = "SELECT * FROM feeds where 1=1 $sql $sqlOrdem $sqlLimite";

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







		function editar($redireciona = '')
		{

			if (isset($_POST['acao']) && $_POST['acao'] == 'editarFeeds') {



				try {

					$sql = "UPDATE feeds SET titulo=?, embed=?, descricao=?, data=?, fonte=? WHERE id=?";

					$stm = $this->pdo->prepare($sql);

					$stm->bindValue(1, $_POST['titulo']);

					$stm->bindValue(2, $_POST['embed']);

					$stm->bindValue(3, $_POST['descricao']);

					$stm->bindValue(4, $_POST['data']);
					$stm->bindValue(5, $_POST['fonte']);

					$stm->bindValue(6, $_POST['id']);

					$stm->execute();
				} catch (PDOException $erro) {

					echo $erro->getMessage();
				}





				$linkRedireciona = "feeds.php";



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

			if (isset($_GET['acao']) && $_GET['acao'] == 'excluir_feed') {
				// deleta foto

				try {
					$sql = "DELETE FROM feeds WHERE id=? ";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_GET['id']);
					$stm->execute();
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}
			}
		}

		function add($mensagemAlert = '', $redireciona = '')
		{
			if (isset($_POST['acao']) && $_POST['acao'] == 'add_feed') {
				try {
					$sql = "INSERT INTO feeds (titulo, embed, descricao, data) VALUES (?, ?, ?, ?)";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_POST['titulo']);
					$stm->bindValue(2, $_POST['embed']);
					$stm->bindValue(3, $_POST['descricao']);
					$stm->bindValue(4, $_POST['data']);
					$stm->execute();
					$idConteudo = $this->pdo->lastInsertId();
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}

				if ($mensagemAlert <> '') {
					echo "	<script>
							alert('{$mensagemAlert}');
							</script>";
				}

				$linkRedireciona = "feeds.php";

				if ($redireciona <> '') {
					$linkRedireciona = $redireciona;
				}

				echo "	<script>
						window.location='{$linkRedireciona}';
						</script>";
				exit;
			}
		}
	}



	$FeedInstanciada = 'S';
}
