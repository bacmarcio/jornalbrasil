<?php
if($DepoimentosInstanciada == '') {
	if(file_exists('Connections/conexao.php')) {
		include('Connections/con-pdo.php');
		include('funcoes.php');
	} else {
		require_once('../Connections/con-pdo.php');
		include('../funcoes.php');
	}
	
	class Depoimentos {
		
		private $pdo = null;  

		private static $Depoimentos = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Depoimentos)):    
				self::$Depoimentos = new Depoimentos($conexao);   
			endif;
			return self::$Depoimentos;    
		}
		
		
		function rsDados($id='', $orderBy='', $tipo="", $limite='', $categoria='') {
			
			/// FILTROS
			$nCampos = 0;
			
			if($id <> '') {
				$sql .= " and id = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id;
			}
			
			if($_GET['busca'] <> '') {
				$sql .= " and (tbl_noticias.titulo like ? or tbl_noticias.noticia like ? or tbl_noticias.breve like ?)"; 
			}
			
			/// ORDEM		
			if($orderBy <> '') {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if($limite <> '') {
				$sqlLimite = " limit 0,{$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM depoimentos where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				if($_GET['busca'] <> '') {
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
				if($id <> '' or $limite == 1) {
					return($rsDados[0]);
				} else {
					return($rsDados);
				}
			} catch(PDOException $erro){   
				echo $erro->getMessage(); 
			}
		}
		
		function add($mensagemAlert='', $redireciona='') {
			global $conInstanciada, $InfoSiteInstanciada; 
			
			if($_POST['acao'] == 'addDepoimentos') {
				
				
					try{
					
						$sql = "INSERT INTO depoimentos (nome, depoimento, foto) VALUES (?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $_POST['nome']);   
						$stm->bindValue(2, $_POST['depoimento']);   
						$stm->bindValue(3, upload('foto', '../img_conteudos', 'N'));   
						$stm->execute();
						$idConteudo = $this->pdo->lastInsertId();
						
						/////////////
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
					
				
				
				if($mensagemAlert <> '') {
					echo "	<script>
							alert('{$mensagemAlert}');
							</script>";
				}
				
				$linkRedireciona = "depoimentos.php";
				
				if($redireciona <> '') {
					$linkRedireciona = $redireciona;
				}
				
				echo "	<script>
						window.location='{$linkRedireciona}';
						</script>";
						exit;
			}
		}
		
		function editar($redireciona='') {
			if($_POST['acao'] == 'editarDepoimentos') {
				
					try{   
						$sql = "UPDATE depoimentos SET nome=?, depoimento=?, foto=? WHERE id=?"; 
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $_POST['nome']);   
						$stm->bindValue(2, $_POST['depoimento']);   
						$stm->bindValue(3, upload('foto', '../img_conteudos', 'N'));   
						$stm->bindValue(4, $_POST['id']);   
						$stm->execute(); 
						
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
					
				
				$linkRedireciona = "depoimentos.php";
				
				if($redireciona <> '') {
					$linkRedireciona = $redireciona;
				}
				
				echo "	<script>
						window.location='{$linkRedireciona}';
						</script>";
						exit;
						
			}
		}
		
		function excluir() {
			if($_GET['acao'] == 'excluirDepoimentos') {
				
				// deleta foto
				if($_GET['foto'] <> '') {
					unlink ("../img_conteudos/{$_GET['foto']}");
				}
				
				try{   
					$sql = "DELETE FROM depoimentos WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
				
			}
		}
	}
	
	$conteudosInstanciada = 'S';
}