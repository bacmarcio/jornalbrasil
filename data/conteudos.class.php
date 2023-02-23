<?php
if (isset($conteudosInstanciada)) {
	if (file_exists('Connections/conexao.php')) {
		include('Connections/con-pdo.php');
		include('funcoes.php');
	} else {
		require_once('../Connections/con-pdo.php');
		include('../funcoes.php');
	}

	class Conteudos
	{

		private $pdo = null;

		private static $Conteudos = null;

		private function __construct($conexao)
		{
			$this->pdo = $conexao;
		}

		public static function getInstance($conexao)
		{
			if (!isset(self::$Conteudos)) :
				self::$Conteudos = new Conteudos($conexao);
			endif;
			return self::$Conteudos;
		}


		function rsDados($idMenu = '', $id = '', $orderBy = '', $tipo = "", $limite = '', $categoria = '')
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

			if ($categoria <> '') {
				$sql .= " and id_categoria = ?";
				$nCampos++;
				$campo[$nCampos] = $categoria;
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
				$sql = "SELECT * FROM conteudos where 1=1 $sql $sqlOrdem $sqlLimite";
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
			global $conInstanciada, $InfoSiteInstanciada;

			if (isset($_POST['acao']) && $_POST['acao'] == 'addConteudos') {


				try {



					$sql = "INSERT INTO conteudos (titulo, conteudo, foto, resumo, id_categoria, id_menu) VALUES (?, ?, ?, ?, ?, ?)";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_POST['titulo']);
					$stm->bindValue(2, $_POST['conteudo']);
					$stm->bindValue(3, upload('foto', '../img_conteudos', 'N'));
					$stm->bindValue(4, $_POST['resumo']);
					$stm->bindValue(5, $_POST['id_categoria']);
					$stm->bindValue(6, $_POST['id_menu']);
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

				$linkRedireciona = "conteudos.php?id_menu={$_POST['id_menu']}";

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
			if (isset($_POST['acao']) && $_POST['acao'] == 'editarConteudos') {

				try {
					$sql = "UPDATE conteudos SET titulo=?, conteudo=?, foto=?, resumo=?, id_categoria=?, id_menu=? WHERE id=?";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_POST['titulo']);
					$stm->bindValue(2, $_POST['conteudo']);
					$stm->bindValue(3, upload('foto', '../img_conteudos', 'N'));
					$stm->bindValue(4, $_POST['resumo']);
					$stm->bindValue(5, $_POST['id_categoria']);
					$stm->bindValue(6, $_POST['id_menu']);
					$stm->bindValue(7, $_POST['id']);
					$stm->execute();
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}


				$linkRedireciona = "conteudos.php?id_menu={$_POST['id_menu']}";

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
			if (isset($_GET['acao']) && $_GET['acao'] == 'excluirConteudo') {

				// deleta foto
				if ($_GET['foto'] <> '') {
					unlink("../img_conteudos/{$_GET['foto']}");
				}

				try {
					$sql = "DELETE FROM conteudos WHERE id=? ";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_GET['id']);
					$stm->execute();
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}
			}
		}
	}

	$conteudosInstanciada = 'S';
}
