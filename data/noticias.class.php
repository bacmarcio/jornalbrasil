<?php

$NoticiasInstanciada = '';

if (isset($NoticiasInstanciada)) {
	if (file_exists('Connections/conexao.php')) {
		include('Connections/con-pdo.php');
		include_once('funcoes.php');
	} else {

		require_once('../Connections/con-pdo.php');

		include_once('../funcoes.php');
	}

	class Noticias
	{

		private $pdo = null;

		private static $Noticias = null;

		private function __construct($conexao)
		{

			$this->pdo = $conexao;
		}

		public static function getInstance($conexao)
		{

			if (!isset(self::$Noticias)) :

				self::$Noticias = new Noticias($conexao);

			endif;

			return self::$Noticias;
		}



		function rsDados($id = '', $orderBy = '', $limite = '', $categoria = '', $destaque = '', $principal = '', $ativo = '', $sql_adicional = '')
		{

			/// FILTROS

			$nCampos = 0;
			$sql = '';
			$sqlOrdem = '';
			$sqlLimite = '';

			if ($id <> '') {

				$sql .= " and tbl_noticias.id = ?";

				$nCampos++;

				$campo[$nCampos] = $id;
			}

			if ($categoria <> '') {

				$sql .= " and tbl_noticias.categoria = ?";

				$nCampos++;

				$campo[$nCampos] = $categoria;
			}

			if ($destaque <> '') {

				$sql .= " and tbl_noticias.destaque = ?";

				$nCampos++;

				$campo[$nCampos] = $destaque;
			}

			if ($principal <> '') {

				$sql .= " and tbl_noticias.principal = ?";

				$nCampos++;

				$campo[$nCampos] = $principal;
			}

			if ($ativo <> '') {

				$sql .= " and tbl_noticias.ativo = ?";

				$nCampos++;

				$campo[$nCampos] = $ativo;
			}




			$sqlBusca = '';

			if (isset($_GET['buscar'])) {


				$sqlBusca .= " and (tbl_noticias.titulo like '%{$_GET['buscar']}%' or tbl_noticias.noticia like '%{$_GET['buscar']}%' or tbl_noticias.resumo like '%{$_GET['buscar']}%')";
			}

			/// ORDEM		

			if ($orderBy <> '') {

				$sqlOrdem = " order by {$orderBy}";
			}

			if ($limite <> '') {

				$sqlLimite = " limit 0,{$limite}";
			}

			try {

				$sql = "SELECT 

				tbl_noticias.*,

				tbl_categoria.titulo as nomeCategoria 

				FROM 

				tbl_noticias 

				LEFT JOIN categorias as tbl_categoria ON tbl_noticias.categoria = tbl_categoria.id 

				where 

				1=1 

				$sql 

				$sql_adicional

				$sqlBusca $sqlOrdem $sqlLimite";

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



		function arquivos($titulo = '', $orderBy = '', $limite = '')
		{

			/// FILTROS

			$nCampos = 0;
			$sql = '';

			if (isset($principal)) {

				$sql .= " and tbl_noticias.principal = ?";

				$nCampos++;

				$campo[$nCampos] = $principal;
			}



			if (isset($ativo)) {

				$sql .= " and tbl_noticias.ativo = ?";

				$nCampos++;

				$campo[$nCampos] = $ativo;
			}

			if ($titulo <> '') {

				$sql .= " and (tbl_noticias.titulo like '%{$titulo}%')";

				$nCampos++;

				$campo[$nCampos] = $titulo;
			}

			/// ORDEM		

			if ($orderBy <> '') {

				$sqlOrdem = " order by {$orderBy}";
			}

			if ($limite <> '') {

				$sqlLimite = " limit 0,{$limite}";
			}

			try {

				$sql = "SELECT 

				tbl_noticias.*,

				tbl_categoria.titulo as nomeCategoria 

				FROM 

				tbl_noticias 

				LEFT JOIN categorias as tbl_categoria ON tbl_noticias.categoria = tbl_categoria.id 

				where 

				1=1 $sql $sqlOrdem $sqlLimite";

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

				if (isset($id) or $limite == 1) {

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

			if (isset($_POST['acao']) && $_POST['acao'] == 'addNoticias') {

				try {

					$sql = "INSERT INTO tbl_noticias (titulo, data, noticia, categoria, foto, destaque, desc_foto, audio, autor_da_materia, hora_da_publicacao, ativo, arquivo_pdf, resumo, principal, fonte) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

					$stm = $this->pdo->prepare($sql);

					$stm->bindValue(1, $_POST['titulo']);

					$stm->bindValue(2, ($_POST['data'] <> '') ? $_POST['data'] : NULL);

					$stm->bindValue(3, $_POST['noticia']);

					$stm->bindValue(4, $_POST['categoria']);

					$stm->bindValue(5, upload('foto', '../img_conteudos', 'N'));

					$stm->bindValue(6, $_POST['destaque']);

					$stm->bindValue(7, $_POST['desc_foto']);

					$stm->bindValue(8, upload('audio', '../img_conteudos', 'N'));

					$stm->bindValue(9, $_POST['autor_da_materia']);

					$stm->bindValue(10, $_POST['hora_da_publicacao']);

					$stm->bindValue(11, $_POST['ativo']);

					$stm->bindValue(12, upload('arquivo_pdf', '../img_conteudos', 'N'));

					$stm->bindValue(13, $_POST['resumo']);

					$stm->bindValue(14, $_POST['principal']);

					$stm->bindValue(15, $_POST['fonte']);

					$stm->execute();

					$idConteudo = $this->pdo->lastInsertId();

					/////////////

				} catch (PDOException $erro) {

					echo $erro->getMessage();
				}


				if ($redireciona <> 'N') {
					if ($mensagemAlert <> '') {
						echo "	<script>
								alert('{$mensagemAlert}');
								</script>";
					}

					$linkRedireciona = "noticias.php";

					if ($redireciona <> '') {
						$linkRedireciona = $redireciona;
					}

					echo "	<script>
							window.location='{$linkRedireciona}';
							</script>";
					exit;
				} else {
					return ($idConteudo);
				}
			}
		}

		function editar($redireciona = '')
		{

			if (isset($_POST['acao']) && $_POST['acao'] == 'editarNoticias') {

				try {

					$sql = "UPDATE tbl_noticias SET titulo=?, data=?, noticia=?, categoria=?, foto=?, destaque=?, desc_foto=?, audio=?, autor_da_materia=?, hora_da_publicacao=?, ativo=?, arquivo_pdf=?, resumo=?, principal=?, fonte=? WHERE id=?";

					$stm = $this->pdo->prepare($sql);

					$stm->bindValue(1, $_POST['titulo']);

					$stm->bindValue(2, ($_POST['data'] <> '') ? $_POST['data'] : NULL);

					$stm->bindValue(3, $_POST['noticia']);

					$stm->bindValue(4, $_POST['categoria']);

					$stm->bindValue(5, upload('foto', '../img_conteudos', 'N'));

					$stm->bindValue(6, $_POST['destaque']);

					$stm->bindValue(7, $_POST['desc_foto']);

					$stm->bindValue(8, upload('audio', '../img_conteudos', 'N'));

					$stm->bindValue(9, $_POST['autor_da_materia']);

					$stm->bindValue(10, $_POST['hora_da_publicacao']);

					$stm->bindValue(11, $_POST['ativo']);

					$stm->bindValue(12, upload('arquivo_pdf', '../img_conteudos', 'N'));

					$stm->bindValue(13, $_POST['resumo']);

					$stm->bindValue(14, $_POST['principal']);

					$stm->bindValue(15, $_POST['fonte']);

					$stm->bindValue(16, $_POST['id']);

					$stm->execute();
				} catch (PDOException $erro) {

					echo $erro->getMessage();
				}

				$linkRedireciona = "noticias.php";

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

			if (isset($_GET['acao']) && $_GET['acao'] == 'excluirNoticias') {

				// deleta foto

				if ($_GET['foto'] <> '') {

					unlink("../img_conteudos/{$_GET['foto']}");
				}

				try {

					$sql = "DELETE FROM tbl_noticias WHERE id=? ";

					$stm = $this->pdo->prepare($sql);

					$stm->bindValue(1, $_GET['id']);

					$stm->execute();
				} catch (PDOException $erro) {

					echo $erro->getMessage();
				}
			}
		}
	}







	$NoticiasInstanciada = 'S';
}
