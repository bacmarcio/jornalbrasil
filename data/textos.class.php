<?php
if (isset($TextosInstanciada));
if (file_exists('Connections/conexao.php')) {
	include('Connections/con-pdo.php');
	include_once('funcoes.php');
} else {
	require_once('../Connections/con-pdo.php');
	include_once('../funcoes.php');
}

class Textos
{

	private $pdo = null;

	private static $Textos = null;

	/*  
		* Construtor da classe como private  
		* @param $conexao - Conexão com o banco de dados  
		*/
	private function __construct($conexao)
	{
		$this->pdo = $conexao;
	}

	public static function getInstance($conexao)
	{
		if (!isset(self::$Textos)) :
			self::$Textos = new Textos($conexao);
		endif;
		return self::$Textos;
	}

	var $titulo;
	var $textos;
	var $foto;




	function rsDados($id = '')
	{

		$nCampos = 0;
		$sql = '';
		if ($id <> '') {
			$sql .= " and id = ?";
			$nCampos++;
			$campo[$nCampos] = $id;
		}

		try {
			$sql = "SELECT * FROM textos where 1=1 $sql ";
			$stm = $this->pdo->prepare($sql);

			for ($i = 1; $i <= $nCampos; $i++) {
				$stm->bindValue($i, $campo[$i]);
			}

			$stm->execute();
			$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);

			if ($id <> '') {
				return ($rsDados[0]);
			} else {
				return ($rsDados);
			}
		} catch (PDOException $erro) {
			echo $erro->getLine();
		}
	}

	function editar()
	{
		if ($_POST['acao'] == 'editarTexto') {
			try {
				$sql = "UPDATE textos SET titulo=?, texto=?, foto=? WHERE id=?";
				$stm = $this->pdo->prepare($sql);
				$stm->bindValue(1, $_POST['titulo']);
				$stm->bindValue(2, $_POST['texto']);
				$stm->bindValue(3, upload('foto', '../img_conteudos', 'N'));
				$stm->bindValue(4, $_POST['id']);
				$stm->execute();

				echo "	<script>
							window.location='textos.php';
							</script>";
				exit;
			} catch (PDOException $erro) {
				echo $erro->getMessage();
			}
		}
	}
}

$TextosInstanciada = 'S';
