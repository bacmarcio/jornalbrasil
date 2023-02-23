<?php
@session_start();
$ApoiadoresInstanciada = '';
if (isset($ApoiadoresInstanciada)) {
	if (file_exists('Connections/conexao.php')) {
		include_once('Connections/con-pdo.php');
		include_once('funcoes.php');
	} else {
		require_once('../Connections/con-pdo.php');
		include_once('../funcoes.php');
	}

	class Apoiadores
	{

		private $pdo = null;

		private static $Apoiadores = null;

		private function __construct($conexao)
		{
			$this->pdo = $conexao;
		}

		public static function getInstance($conexao)
		{
			if (!isset(self::$Apoiadores)) :
				self::$Apoiadores = new Apoiadores($conexao);
			endif;
			return self::$Apoiadores;
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
				$sql = "SELECT * FROM apoiadores where 1=1 $sql $sqlOrdem $sqlLimite";
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

			if (isset($_POST['acao']) && $_POST['acao'] == 'addApoiadores') {


				try {



					$sql = "INSERT INTO apoiadores (tipo_apoiador, titulo, foto, linkApoio) VALUES (?, ?, ?, ?)";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_POST['tipo_apoiador']);
					$stm->bindValue(2, $_POST['titulo']);
					$stm->bindValue(3, upload('foto', '../img_conteudos', 'N'));
					$stm->bindValue(4, $_POST['linkApoio']);
					$stm->execute();

					/////////////
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}



				if ($mensagemAlert <> '') {
					echo "	<script>
							alert('{$mensagemAlert}');
							</script>";
				}

				$linkRedireciona = "apoiadores.php";

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
			if (isset($_POST['acao']) && $_POST['acao'] == 'editarApoiadores') {

				try {
					$sql = "UPDATE apoiadores SET titulo=?, foto=?, linkApoio=?, tipo_apoiador=? WHERE id=?";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_POST['titulo']);
					$stm->bindValue(2, upload('foto', '../img_conteudos', 'N'));
					$stm->bindValue(3, $_POST['linkApoio']);
					$stm->bindValue(4, $_POST['tipo_apoiador']);
					$stm->bindValue(5, $_POST['id']);
					$stm->execute();
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}


				$linkRedireciona = "apoiadores.php";

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
			if (isset($_GET['acao']) && $_GET['acao'] == 'excluirApoiadores') {

				try {
					$sql = "DELETE FROM apoiadores WHERE id=? ";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_GET['id']);
					$stm->execute();
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}
			}
		}
	}

	$ApoiadoresInstanciada = 'S';
}
