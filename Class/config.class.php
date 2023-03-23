<?php
$ConfigSistemaInstanciada = '';
if(empty($ConfigSistemaInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../funcoes.php');
	}
	
	class ConfigSistema {

		private $pdo = null;  

		private static $ConfigSistema = null; 
	
		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
		
		public static function getInstance($conexao){   
			if (!isset(self::$ConfigSistema)):    
				self::$ConfigSistema = new ConfigSistema($conexao);   
			endif;
			return self::$ConfigSistema;    
		}
		
		private $favicon;
		private $facebook;
		private $twitter;
		private $instagram;
		private $youtube;
		private $linkedln;
		private $nome_empresa;
		private $telefone1;
		private $telefone2;
		private $email1;
		private $email2;
				
		function rsDados() {
			
			try{   
				$sql = "SELECT * FROM tbl_config ";
				$stm = $this->pdo->prepare($sql);
				$stm->execute();   
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
				$this->favicon      = $rsDados[0]->favicon;
				$this->facebook     = $rsDados[0]->facebook;
				$this->twitter      = $rsDados[0]->twitter;
				$this->instagram    = $rsDados[0]->instagram;
				$this->youtube      = $rsDados[0]->youtube;
				$this->linkedln     = $rsDados[0]->linkedln;
				$this->nome_empresa = $rsDados[0]->nome_empresa;
				$this->telefone1    = $rsDados[0]->telefone1;
				$this->telefone2    = $rsDados[0]->telefone2;
				$this->email1       = $rsDados[0]->email1;
				$this->email2       = $rsDados[0]->email2;
				
				
			} catch(PDOException $erro){   
				echo $erro->getLine(); 
			}
			
			return($this);
		}

		

		function acessosSite($id='', $orderBy='', $limite='', $idCampanha='', $veioDeOnde='') {
			
			/// FILTROS
			$nCampos = 0;
			$sql = '';
			$sqlOrdem = ''; 
			$sqlLimite = '';
			if(!empty($id)) {
				$sql .= " and id = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id;
			}
			
			if(!empty($idCampanha)) {
				$sql .= " and id_campanha = ?"; 
				$nCampos++;
				$campo[$nCampos] = $idCampanha;
			}
			if(!empty($veioDeOnde)) {
				$sql .= " and veio_de_onde = ?"; 
				$nCampos++;
				$campo[$nCampos] = $veioDeOnde;
			}
			
			
			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			try{   
				$sql = "SELECT * FROM contadores_paginas where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
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

		
		function statusFrase($id_usuario, $status) {
		

				try{   
					$sql = "UPDATE tbl_usuarios SET frase_lida=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $status);   
					$stm->bindValue(2, $id_usuario);   
					$stm->execute();  
					
					
				} catch(PDOException $erro){   
					echo $erro->getMessage();
				}
				echo "	<script>
							window.location='.';
							</script>";
							exit;
			
		}
		
		
		function editar() {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editarConfig') {
				$facebook = filter_input(INPUT_POST, 'facebook', FILTER_SANITIZE_SPECIAL_CHARS);
				$twitter = filter_input(INPUT_POST, 'twitter', FILTER_SANITIZE_SPECIAL_CHARS);
				$instagram = filter_input(INPUT_POST, 'instagram', FILTER_SANITIZE_SPECIAL_CHARS);
				$youtube = filter_input(INPUT_POST, 'youtube', FILTER_SANITIZE_SPECIAL_CHARS);
				$nome_empresa = filter_input(INPUT_POST, 'nome_empresa', FILTER_SANITIZE_SPECIAL_CHARS);
				$telefone1 = filter_input(INPUT_POST, 'telefone1', FILTER_SANITIZE_SPECIAL_CHARS);
				$telefone2 = filter_input(INPUT_POST, 'telefone2', FILTER_SANITIZE_SPECIAL_CHARS);
				$email1 = filter_input(INPUT_POST, 'email1', FILTER_SANITIZE_SPECIAL_CHARS);
				$email2 = filter_input(INPUT_POST, 'email2', FILTER_SANITIZE_SPECIAL_CHARS);
				
				try{   
					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
					$sql = "UPDATE tbl_config SET  facebook=?, twitter=?, instagram=?, youtube=?, favicon=?, nome_empresa=?, telefone1=?, telefone2=?, email1=?, email2=? WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);  
					
					$stm->bindValue(1, $facebook);
					$stm->bindValue(2, $twitter);
					$stm->bindValue(3, $instagram);
					$stm->bindValue(4, $youtube);
					$stm->bindValue(5, upload('favicon', $pastaArquivos, 'N'));
					$stm->bindValue(6, $nome_empresa);					
					$stm->bindValue(7, $telefone1);
					$stm->bindValue(8, $telefone2);
					$stm->bindValue(9, $email1);
					$stm->bindValue(10, $email2);
					$stm->bindValue(11, 1);
					$stm->execute();  
					
					echo "	<script>
							alert('Modificado com sucesso!');
							window.location='configuracoes.php';
							</script>";
							exit;
				} catch(PDOException $erro){   
					echo $erro->getMessage();
				}
			}
		}

		function rsFrases($id='', $orderBy='', $limite='') {
			
			/// FILTROS
			$nCampos = 0;
			$sql = '';
			$sqlOrdem = ''; 
			$sqlLimite = '';
			if(!empty($id)) {
				$sql .= " and id = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id;
			}
			
			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			try{   
				$sql = "SELECT * FROM tbl_frases where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
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

		function addFrase($redireciona='') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'addFrase') {
				$frase = filter_input(INPUT_POST, 'frase', FILTER_SANITIZE_SPECIAL_CHARS);
			
					try{
						
						$sql = "INSERT INTO tbl_frases (frase) VALUES (?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $frase);   
						$stm->execute(); 
						//$idTratamento = $this->pdo->lastInsertId();
						
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
					if($redireciona == '') {
						$redireciona = '.';
					}
					
					echo "	<script>
							window.location='frases.php';
							</script>";
							exit;
				
			}
		}

		function editarFrase() {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaFrase') {
				$frase = filter_input(INPUT_POST, 'frase', FILTER_SANITIZE_SPECIAL_CHARS);
				$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
				try{   
					$sql = "UPDATE tbl_frases SET frase=? WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);  
					$stm->bindValue(1, $frase);
					$stm->bindValue(2, $id);
					$stm->execute();  
					
				} catch(PDOException $erro){   
					echo $erro->getMessage();
				}
				echo "	<script>
				window.location='frases.php';
				</script>";
				exit;
			}
		}

		function excluirFrase() {
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirFrase') {
				
				try{   
					$sql = "DELETE FROM tbl_frases WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}

			}
		}

		function rsCampanha($id='', $orderBy='', $limite='') {
			
			/// FILTROS
			$nCampos = 0;
			$sql = '';
			$sqlOrdem = ''; 
			$sqlLimite = '';
			if(!empty($id)) {
				$sql .= " and id = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id;
			}
			
			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			try{   
				$sql = "SELECT * FROM tbl_campanha where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
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

		function addCampanha($redireciona='') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'addCampanha') {
				$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
			
					try{
						
						$sql = "INSERT INTO tbl_campanha (nome) VALUES (?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $nome);   
						$stm->execute(); 
						//$idTratamento = $this->pdo->lastInsertId();
						
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
					if($redireciona == '') {
						$redireciona = '.';
					}
					
					echo "	<script>
							window.location='campanhas.php';
							</script>";
							exit;
				
			}
		}

		function editarCampanha() {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaCampanha') {
				$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
				$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
				try{   
					$sql = "UPDATE tbl_campanha SET nome=? WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);  
					$stm->bindValue(1, $nome);
					$stm->bindValue(2, $id);
					$stm->execute();  
					
				} catch(PDOException $erro){   
					echo $erro->getMessage();
				}
				echo "	<script>
				window.location='campanhas.php';
				</script>";
				exit;
			}
		}

		function excluirCampanha() {
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirCampanha') {
				
				try{   
					$sql = "DELETE FROM tbl_campanha WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}

			}
		}

	
	}
	
	$ConfigSistemaInstanciada = 'S';
}