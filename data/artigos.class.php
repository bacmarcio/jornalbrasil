<?php
if (isset($ArtigosInstanciada));
if (file_exists('Connections/conexao.php')) {
	include_once('Connections/con-pdo.php');
	include_once('funcoes.php');
} else {
	require_once('../Connections/con-pdo.php');
	include_once('../funcoes.php');
}

class Artigos
{

	private $pdo = null;

	private static $Artigos = null;

	private function __construct($conexao)
	{
		$this->pdo = $conexao;
	}

	public static function getInstance($conexao)
	{
		if (!isset(self::$Artigos)) :
			self::$Artigos = new Artigos($conexao);
		endif;
		return self::$Artigos;
	}


	function rsDados($id = '', $orderBy = '', $limite = '', $categoria = '', $idColunista = '')
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

		if ($categoria <> '') {
			$sql .= " and id_categoria = ?";
			$nCampos++;
			$campo[$nCampos] = $categoria;
		}
		if ($idColunista <> '') {
			$sql .= " and id_colunista = ?";
			$nCampos++;
			$campo[$nCampos] = $idColunista;
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
			$sql = "SELECT * FROM artigos where 1=1 $sql $sqlOrdem $sqlLimite";
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

		if (isset($_POST['acao']) && $_POST['acao'] == 'addArtigos') {


			try {



				$sql = "INSERT INTO artigos (titulo, data, artigo, categoria, foto, destaque, desc_foto, audio, autor_da_materia, hora_da_publicacao, ativo, arquivo_pdf, resumo, id_colunista) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
				$stm = $this->pdo->prepare($sql);
				$stm->bindValue(1, $_POST['titulo']);
				$stm->bindValue(2, ($_POST['data'] <> '') ? $_POST['data'] : NULL);
				$stm->bindValue(3, $_POST['artigo']);
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
				$stm->bindValue(14, $_POST['id_colunista']);
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

			$linkRedireciona = "artigos.php";

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
		if (isset($_POST['acao']) && $_POST['acao'] == 'editarArtigos') {

			try {
				$sql = "UPDATE artigos SET titulo=?, data=?, artigo=?, categoria=?, foto=?, destaque=?, desc_foto=?, audio=?, autor_da_materia=?, hora_da_publicacao=?, ativo=?, arquivo_pdf=?, resumo=?, id_colunista=? WHERE id=?";
				$stm = $this->pdo->prepare($sql);
				$stm->bindValue(1, $_POST['titulo']);
				$stm->bindValue(2, ($_POST['data'] <> '') ? $_POST['data'] : NULL);
				$stm->bindValue(3, $_POST['artigo']);
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
				$stm->bindValue(14, $_POST['id_colunista']);
				$stm->bindValue(15, $_POST['id']);
				$stm->execute();
			} catch (PDOException $erro) {
				echo $erro->getMessage();
			}


			$linkRedireciona = "artigos.php";

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
		if (isset($_GET['acao']) && $_GET['acao'] == 'excluirArtigos') {

			// deleta foto
			if ($_GET['foto'] <> '') {
				unlink("../img_conteudos/{$_GET['foto']}");
			}

			try {
				$sql = "DELETE FROM artigos WHERE id=? ";
				$stm = $this->pdo->prepare($sql);
				$stm->bindValue(1, $_GET['id']);
				$stm->execute();
			} catch (PDOException $erro) {
				echo $erro->getMessage();
			}
		}
	}
}

$ArtigosInstanciada = 'S';
