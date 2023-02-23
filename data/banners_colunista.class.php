<?php
@session_start();

if (isset($BannersColunistasInstanciada)) {
	if (file_exists('Connections/conexao.php')) {
		include_once('Connections/con-pdo.php');
		include_once('funcoes.php');
	} else {
		require_once('../Connections/con-pdo.php');
		include_once('../funcoes.php');
	}

	class BannersColunistas
	{

		private $pdo = null;

		private static $BannersColunistas = null;

		private function __construct($conexao)
		{
			$this->pdo = $conexao;
		}

		public static function getInstance($conexao)
		{
			if (!isset(self::$BannersColunistas)) :
				self::$BannersColunistas = new BannersColunistas($conexao);
			endif;
			return self::$BannersColunistas;
		}


		function rsDados($id = '', $idColunista = '', $orderBy = '', $limite = '')
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
			if ($idColunista <> '') {
				$sql .= " and id_colunista = ?";
				$nCampos++;
				$campo[$nCampos] = $idColunista;
			}

			/// ORDEM		
			if ($orderBy <> '') {
				$sqlOrdem = " order by {$orderBy}";
			}

			if ($limite <> '') {
				$sqlLimite = " limit 0,{$limite}";
			}

			try {
				$sql = "SELECT * FROM banners_colunista where 1=1 $sql $sqlOrdem $sqlLimite";
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

			if (isset($_POST['acao']) && $_POST['acao'] == 'addBannersColunistas') {


				try {

					$sql = "INSERT INTO banners_colunista (titulo, foto, id_colunista, ordem) VALUES (?, ?, ?, ?)";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_POST['titulo']);
					$stm->bindValue(2, upload('foto', '../img_conteudos', 'N'));
					$stm->bindValue(3, $_POST['id_colunista']);
					$stm->bindValue(4, $_POST['ordem']);
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

				$linkRedireciona = "bannersColunista.php?id_colunista={$_POST['id_colunista']}";

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
			if (isset($_POST['acao']) && $_POST['acao'] == 'editarBannersColunistas') {

				try {
					$sql = "UPDATE banners_colunista SET titulo=?, foto=?, id_colunista=?, ordem=? WHERE id=?";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_POST['titulo']);
					$stm->bindValue(2, upload('foto', '../img_conteudos', 'N'));
					$stm->bindValue(3, $_POST['id_colunista']);
					$stm->bindValue(4, $_POST['ordem']);
					$stm->bindValue(5, $_POST['id']);
					$stm->execute();
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}


				$linkRedireciona = "bannersColunista.php?id_colunista={$_POST['id_colunista']}";

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
			if (isset($_POST['acao']) && $_POST['acao'] == 'excluirBannersColunistas') {

				try {
					$sql = "DELETE FROM banners_colunista WHERE id=? ";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_GET['id']);
					$stm->execute();
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}
			}
		}
	}

	$BannersColunistasInstanciada = 'S';
}
