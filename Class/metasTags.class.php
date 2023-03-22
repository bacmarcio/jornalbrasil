<?php
$MetasTagsInstanciada = '';
if(empty($MetasTagsInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../funcoes.php');
	}
	
	class MetasTags {

		private $pdo = null;  

		private static $MetasTags = null; 
	
		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
		
		public static function getInstance($conexao){   
			if (!isset(self::$MetasTags)):    
				self::$MetasTags = new MetasTags($conexao);   
			endif;
			return self::$MetasTags;    
		}
				private $meta_title_principal; 
				private $meta_keywords_principal;
				private $meta_description_principal;
				private $meta_title_blog;
				private $meta_keywords_blog;
				private $meta_description_blog;
				private $meta_title_contato;
				private $meta_keywords_contato;
				private $meta_description_contato;
				private $meta_title_sobre;
				private $meta_keywords_sobre;
				private $meta_description_sobre;
				
		
		function rsDados() {
			
			try{   
				$sql = "SELECT * FROM tbl_metas_tags ";
				$stm = $this->pdo->prepare($sql);
				$stm->execute();   
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
											
				$this->meta_title_principal = $rsDados[0]->meta_title_principal;
				$this->meta_keywords_principal = $rsDados[0]->meta_keywords_principal;
				$this->meta_description_principal = $rsDados[0]->meta_description_principal;
				$this->meta_title_blog = $rsDados[0]->meta_title_blog;
				$this->meta_keywords_blog = $rsDados[0]->meta_keywords_blog;
				$this->meta_description_blog = $rsDados[0]->meta_description_blog;
				$this->meta_title_contato = $rsDados[0]->meta_title_contato;
				$this->meta_keywords_contato = $rsDados[0]->meta_keywords_contato;
				$this->meta_description_contato = $rsDados[0]->meta_description_contato;
				$this->meta_title_sobre = $rsDados[0]->meta_title_sobre;
				$this->meta_keywords_sobre = $rsDados[0]->meta_keywords_sobre;
				$this->meta_description_sobre = $rsDados[0]->meta_description_sobre;
				
			} catch(PDOException $erro){   
				echo $erro->getLine(); 
			}
			
			return($this);
		}


	function editarMetaTag() {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editarMetaTag') {
				$meta_title_principal = filter_input(INPUT_POST, 'meta_title_principal', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_keywords_principal = filter_input(INPUT_POST, 'meta_keywords_principal', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_description_principal = filter_input(INPUT_POST, 'meta_description_principal', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_title_blog = filter_input(INPUT_POST, 'meta_title_blog', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_keywords_blog = filter_input(INPUT_POST, 'meta_keywords_blog', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_description_blog = filter_input(INPUT_POST, 'meta_description_blog', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_title_contato = filter_input(INPUT_POST, 'meta_title_contato', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_keywords_contato = filter_input(INPUT_POST, 'meta_keywords_contato', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_description_contato = filter_input(INPUT_POST, 'meta_description_contato', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_title_sobre = filter_input(INPUT_POST, 'meta_title_sobre', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_keywords_sobre = filter_input(INPUT_POST, 'meta_keywords_sobre', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_description_sobre = filter_input(INPUT_POST, 'meta_description_sobre', FILTER_SANITIZE_SPECIAL_CHARS);
				
				try{   
					$sql = "UPDATE tbl_metas_tags SET meta_title_principal=?, meta_keywords_principal=?, meta_description_principal=?,meta_title_blog=?, meta_keywords_blog=?, meta_description_blog=?, meta_title_contato=?, meta_keywords_contato=?, meta_description_contato=?, meta_title_sobre=?, meta_keywords_sobre=?, meta_description_sobre=? WHERE id=? ";
					$stm = $this->pdo->prepare($sql);  
					$stm->bindValue(1, $meta_title_principal);
					$stm->bindValue(2, $meta_keywords_principal);
					$stm->bindValue(3, $meta_description_principal);
					$stm->bindValue(4, $meta_title_blog);
					$stm->bindValue(5, $meta_keywords_blog);
					$stm->bindValue(6, $meta_description_blog);
					$stm->bindValue(7, $meta_title_contato);
					$stm->bindValue(8, $meta_keywords_contato);
					$stm->bindValue(9, $meta_description_contato);					
					$stm->bindValue(10, $meta_title_sobre);
					$stm->bindValue(11, $meta_keywords_sobre);
					$stm->bindValue(12, $meta_description_sobre);
					$stm->bindValue(13, 1);
					$stm->execute();  
					echo "	<script>
							alert('Modificado com sucesso!');
							window.location='metas-tags.php';
							</script>";
							exit;
				} catch(PDOException $erro){   
					echo $erro->getMessage();
				}
			}
		}
	}
	
	$MetasTagsInstanciada = 'S';
}