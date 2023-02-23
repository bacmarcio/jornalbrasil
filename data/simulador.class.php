<?php
if($SimuladorInstanciada == '') {
	if(file_exists('Connections/conexao.php')) {
		include_once('Connections/con-pdo.php');
		include_once('funcoes.php');
	} else {
		require_once('../Connections/con-pdo.php');
		include_once('../funcoes.php');
	}
	
	class Simulador {
		
		private $pdo = null;  

		private static $Simulador = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Simulador)):    
				self::$Simulador = new Simulador($conexao);   
			endif;
			return self::$Simulador;    
		}
		
		
		function rsDados($id='', $orderBy='', $limite='') {
			
			/// FILTROS
			$nCampos = 0;
			$sql = '';
			$sqlOrdem = '';
			$sqlLimite = '';
			
			if($id <> '') {
				$sql .= " and id = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id;
			}
						
						
			/// ORDEM		
			if($orderBy <> '') {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if($limite <> '') {
				$sqlLimite = " limit 0,{$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM simulador where 1=1 $sql GROUP BY uf $sqlOrdem $sqlLimite";
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
			
			if($_POST['acao'] == 'addOrcamentos') {
				
				
					try{
					
						$sql = "INSERT INTO orcamentos (nome, endereco, cidade, estado, email, telefone, tipo_empreendimento, consumo_mensal, valor_da_conta, tipo_ligacao, tipo_local_instalacao, id_colaborador, data) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $_POST['nome']);   
						$stm->bindValue(2, $_POST['endereco']);   
						$stm->bindValue(3, $_POST['cidade']);   
						$stm->bindValue(4, $_POST['estado']);   
						$stm->bindValue(5, $_POST['email']);   
						$stm->bindValue(6, $_POST['telefone']);   
						$stm->bindValue(7, $_POST['tipo_empreendimento']);   
						$stm->bindValue(8, $_POST['consumo_mensal']);   
						$stm->bindValue(9, $_POST['valor_da_conta']);   
						$stm->bindValue(10, $_POST['tipo_ligacao']);   
						$stm->bindValue(11, $_POST['tipo_local_instalacao']);   
						$stm->bindValue(12, $_POST['id_colaborador']);   
						$stm->bindValue(13, date('Y-m-d'));   
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
				
				$linkRedireciona = "orcamentos.php";
				
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
			if($_POST['acao'] == 'editarOrcamentos') {
				
					try{   
						$sql = "UPDATE orcamentos SET nome=?, endereco=?, cidade=?, estado=?, email=?, telefone=?, tipo_empreendimento=?, consumo_mensal=?, valor_da_conta=?, tipo_ligacao=?, tipo_local_instalacao=?, id_colaborador=?, data=? WHERE id=?"; 
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $_POST['nome']);   
						$stm->bindValue(2, $_POST['endereco']);   
						$stm->bindValue(3, $_POST['cidade']);  
						$stm->bindValue(4, $_POST['estado']);   
						$stm->bindValue(5, $_POST['email']);   
						$stm->bindValue(6, $_POST['telefone']);   
						$stm->bindValue(7, $_POST['tipo_empreendimento']);   
						$stm->bindValue(8, $_POST['consumo_mensal']);   
						$stm->bindValue(9, $_POST['valor_da_conta']);   
						$stm->bindValue(10, $_POST['tipo_ligacao']);   
						$stm->bindValue(11, $_POST['tipo_local_instalacao']);   
						$stm->bindValue(12, $_POST['id_colaborador']);   
						$stm->bindValue(13, $_POST['data']);   
						$stm->bindValue(14, $_POST['id']);   
						$stm->execute(); 
						
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
					
				
				$linkRedireciona = "orcamentos.php";
				
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
			if($_GET['acao'] == 'excluirOrcamentos') {
				
				try{   
					$sql = "DELETE FROM orcamentos WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
				
			}
		}
	}
	
	$SimuladorInstanciada = 'S';
}