<?php
@session_start();
$BlogsInstanciada = '';
if (empty($BlogsInstanciada)) {
	if (file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../funcoes.php');
	}

	class Blogs
	{

		private $pdo = null;

		private static $Blogs = null;

		private function __construct($conexao)
		{
			$this->pdo = $conexao;
		}

		public static function getInstance($conexao)
		{
			if (!isset(self::$Blogs)) :
				self::$Blogs = new Blogs($conexao);
			endif;
			return self::$Blogs;
		}


		function rsDados($id = '', $orderBy = '', $limite = '', $principal = '', $destaque = '', $categoria = '', $url_amigavel = '')
		{

			/// FILTROS
			$nCampos = 0;
			$sql = '';
			$sqlOrdem = '';
			$sqlLimite = '';
			if (!empty($id)) {
				$sql .= " and tbl_blog.id = ?";
				$nCampos++;
				$campo[$nCampos] = $id;
			}
			if (!empty($principal)) {
				$sql .= " and principal = ?";
				$nCampos++;
				$campo[$nCampos] = $principal;
			}
			if (!empty($destaque)) {
				$sql .= " and destaque = ?";
				$nCampos++;
				$campo[$nCampos] = $destaque;
			}
			if (!empty($categoria)) {
				$sql .= " and id_categoria = ?";
				$nCampos++;
				$campo[$nCampos] = $categoria;
			}
			if (!empty($url_amigavel)) {
				$sql .= " and tbl_blog.url_amigavel = ?";
				$nCampos++;
				$campo[$nCampos] = $url_amigavel;
			}


			if (isset($_POST['buscaNome']) && !empty($_POST['buscaNome'])) {
				$sql .= " and nome like '%{$_POST['buscaNome']}%'";
			}
			if (isset($_POST['buscaStatus']) && !empty($_POST['buscaStatus'])) {
				$sql .= " and status = '{$_POST['buscaStatus']}'";
			}

			// if(isset($_POST['buscaCampanha']) && !empty($_POST['buscaCampanha'])) {
			// 	$sql .= " and id_campanha = '{$_POST['buscaCampanha']}'"; 
			// }

			/// ORDEM		
			if (!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}

			if (!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}

			try {
				$sql = "SELECT tbl_blog.*, tbl_categoria.nome as nomeCategoria FROM tbl_blog left join tbl_categoria on tbl_blog.id_categoria = tbl_categoria.id where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);

				for ($i = 1; $i <= $nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}

				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
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

		function noticiasPopulares($id = '', $orderBy = '', $limite = '')
		{

			/// FILTROS
			$nCampos = 0;
			$sql = '';
			$sqlOrdem = '';
			$sqlLimite = '';
			if (!empty($id)) {
				$sql .= " and id = ?";
				$nCampos++;
				$campo[$nCampos] = $id;
			}
			
			/// ORDEM		
			if (!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}

			if (!empty($limite)) {
				$sqlLimite = " limit {$limite}";
			}

			try {
				$sql = "SELECT tbl_blog.*, tbl_categoria.nome AS nomeCategoria FROM tbl_blog LEFT JOIN tbl_categoria ON tbl_categoria.id = tbl_blog.id_categoria WHERE 1=1 AND tbl_blog.principal = 'N' AND tbl_blog.destaque = 'N' $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);

				for ($i = 1; $i <= $nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}

				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
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

		
		
		function add($redireciona = '')
		{
			if (isset($_POST['acao']) && $_POST['acao'] == 'addBlog') {


				$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
				$postado_por = filter_input(INPUT_POST, 'postado_por', FILTER_SANITIZE_SPECIAL_CHARS);
				$conteudo = $_POST['conteudo'];
				$breve = filter_input(INPUT_POST, 'breve', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_title = filter_input(INPUT_POST, 'meta_title', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_description = filter_input(INPUT_POST, 'meta_description', FILTER_SANITIZE_SPECIAL_CHARS);
				$descricao_imagem = filter_input(INPUT_POST, 'descricao_imagem', FILTER_SANITIZE_SPECIAL_CHARS);
				$legenda_imagem = filter_input(INPUT_POST, 'legenda_imagem', FILTER_SANITIZE_SPECIAL_CHARS);
				$ativo = filter_input(INPUT_POST, 'ativo', FILTER_SANITIZE_SPECIAL_CHARS);
				$principal = filter_input(INPUT_POST, 'principal', FILTER_SANITIZE_SPECIAL_CHARS);
				$destaque = filter_input(INPUT_POST, 'destaque', FILTER_SANITIZE_SPECIAL_CHARS);
				$embed = filter_input(INPUT_POST, 'embed', FILTER_SANITIZE_SPECIAL_CHARS);
				$urlAmigavel = gerarTituloSEO($titulo);
				try {

					if (file_exists('Connection/conexao.php')) {
						$pastaArquivos = 'img';
					} else {
						$pastaArquivos = '../img';
					}

					$sql = "INSERT INTO tbl_blog (foto, titulo, postado_por, conteudo, breve, meta_title, meta_keywords, meta_description, foto1, url_amigavel, descricao_imagem, legenda_imagem, ativo, principal, destaque, audio, pdf, embed) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, upload('foto', $pastaArquivos, 'N'));
					$stm->bindValue(2, $titulo);
					$stm->bindValue(3, $postado_por);
					$stm->bindValue(4, $conteudo);
					$stm->bindValue(5, $breve);
					$stm->bindValue(6, $meta_title);
					$stm->bindValue(7, $meta_keywords);
					$stm->bindValue(8, $meta_description);
					$stm->bindValue(9, upload('foto1', $pastaArquivos, 'N'));
					$stm->bindValue(10, $urlAmigavel);
					$stm->bindValue(11, $descricao_imagem);
					$stm->bindValue(12, $legenda_imagem);
					$stm->bindValue(13, $ativo);
					$stm->bindValue(14, $principal);
					$stm->bindValue(15, $destaque);
					$stm->bindValue(16, upload('audio', $pastaArquivos, 'N'));
					$stm->bindValue(17, upload('pdf', $pastaArquivos, 'N'));
					$stm->bindValue(18, $embed);
					$stm->execute();
					$ultimoPost = $this->pdo->lastInsertId();

					if ($redireciona == '') {
						$redireciona = '.';
					}
					
				} catch (PDOException $erro) {
					
					echo $erro->getMessage();
				}

				try {
					$sql = "SELECT id FROM tbl_blog WHERE 1=1 and destaque = 'S';";
					$stm = $this->pdo->prepare($sql);
					$stm->execute();
					$rsDestaques = $stm->fetchAll(PDO::FETCH_OBJ);
					//print_r($rsDestaques);

					if(isset($rsDestaques) && $rsDestaques[0]->id != $ultimoPost){
						$sql = "UPDATE tbl_blog SET destaque = 'N', principal = 'S' WHERE id != {$ultimoPost}";
						$stm = $this->pdo->prepare($sql);
						$stm->execute();
						
					}
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}
				exit;
				echo "<script>window.location='noticias.php';</script>";
				exit;
			}
		}

		function editar($redireciona = 'noticias.php')
		{
			if (isset($_POST['acao']) && $_POST['acao'] == 'editaBlog') {

				$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
				$postado_por = filter_input(INPUT_POST, 'postado_por', FILTER_SANITIZE_SPECIAL_CHARS);
				$conteudo = $_POST['conteudo'];
				$breve = filter_input(INPUT_POST, 'breve', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_title = filter_input(INPUT_POST, 'meta_title', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_description = filter_input(INPUT_POST, 'meta_description', FILTER_SANITIZE_SPECIAL_CHARS);
				$descricao_imagem = filter_input(INPUT_POST, 'descricao_imagem', FILTER_SANITIZE_SPECIAL_CHARS);
				$legenda_imagem = filter_input(INPUT_POST, 'legenda_imagem', FILTER_SANITIZE_SPECIAL_CHARS);
				$ativo = filter_input(INPUT_POST, 'ativo', FILTER_SANITIZE_SPECIAL_CHARS);
				$principal = filter_input(INPUT_POST, 'principal', FILTER_SANITIZE_SPECIAL_CHARS);
				$destaque = filter_input(INPUT_POST, 'destaque', FILTER_SANITIZE_SPECIAL_CHARS);
				$urlAmigavel = gerarTituloSEO($titulo);
				$embed = filter_input(INPUT_POST, 'embed', FILTER_SANITIZE_SPECIAL_CHARS);
				$id = filter_input(INPUT_POST, 'destaque', FILTER_SANITIZE_SPECIAL_CHARS);

				try {

					if (file_exists('Connection/conexao.php')) {
						$pastaArquivos = 'img';
					} else {
						$pastaArquivos = '../img';
					}

					$sql = "UPDATE tbl_blog SET foto=?, titulo=?, postado_por=?, conteudo=?, breve=?, meta_title=?, meta_keywords=?, meta_description=?, foto1=?, url_amigavel=?, descricao_imagem=?, legenda_imagem=?, ativo=?, principal=?, destaque=?, audio=?, pdf=?, embed=? WHERE id=?";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, upload('foto', $pastaArquivos, 'N'));
					$stm->bindValue(2, $titulo);
					$stm->bindValue(3, $postado_por);
					$stm->bindValue(4, $conteudo);
					$stm->bindValue(5, $breve);
					$stm->bindValue(6, $meta_title);
					$stm->bindValue(7, $meta_keywords);
					$stm->bindValue(8, $meta_description);
					$stm->bindValue(9, upload('foto1', $pastaArquivos, 'N'));
					$stm->bindValue(10, $urlAmigavel);
					$stm->bindValue(11, $descricao_imagem);
					$stm->bindValue(12, $legenda_imagem);
					$stm->bindValue(13, $ativo);
					$stm->bindValue(14, $principal);
					$stm->bindValue(15, $destaque);
					$stm->bindValue(16, upload('audio', $pastaArquivos, 'N'));
					$stm->bindValue(17, upload('pdf', $pastaArquivos, 'N'));
					$stm->bindValue(18, $embed);
					$stm->bindValue(19, $id);
					$stm->execute();
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}
				echo "	<script>
							window.location='{$redireciona}';
							</script>";
				exit;
			}
		}

		function excluir()
		{
			if (isset($_GET['acao']) && $_GET['acao'] == 'excluirBlog') {

				try {
					$sql = "DELETE FROM tbl_blog WHERE id=? ";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $_GET['id']);
					$stm->execute();
				} catch (PDOException $erro) {
					echo $erro->getMessage();
				}
			}
		}
	}

	$BlogsInstanciada = 'S';
}
