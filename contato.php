<?php include "includes.php";
$texto = $textos->rsDados(19);

/**** ALTERAR OS CAMPOS ABAIXO ****/
// informar as chaves do ReCaptcha abaixo:
$chave_de_site = '6LfceikaAAAAAD3HaDpTX4hpYvw4QTQMZWTlodCU';
$chave_secreta = '6LfceikaAAAAAF_VCGcGVdezigdghSame3JzqL-z';

// definir
$destinatario = 'redacao@jornalbrasil.com.br';
$remetente = 'redacao@jornalbrasil.com.br';
$assunto = 'Contato pelo site';
$redirecionar_para = '/.';
/**** FIM DAS ALTERAÇÕES ****/

if (isset($_POST['acao']) && $_POST['acao'] == "enviarMensagem")
{
	// incluir a funcionalidade do recaptcha
	require_once('recaptchalib.php');

	$erros = [];
	if (empty($_POST['nome']))
		$erros[] = 'Nome não preenchido';

	if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		$erros[] = 'E-mail não preenchido ou inválido';

	if (empty($_POST['telefone']))
		$erros[] = 'Telefone não preenchido';


	// verificar a chave secreta
	$response = null;
	//$reCaptcha = new ReCaptcha($chave_secreta);

	if ($_POST['g-recaptcha-response'])
		$response = $reCaptcha->verifyResponse($_SERVER['REMOTE_ADDR'], $_POST['g-recaptcha-response']);

	if ($response == null || !$response->success)
		$erros[] = 'Erro na verificação do Recaptcha';

	if (!$erros)
	{
		$ip = $_SERVER['REMOTE_ADDR'];
		$reverso = gethostbyaddr($ip);
		if ($reverso == $ip)
			$origem = $ip;
		else
			$origem = "$ip ($reverso)";
		$de = "\"$_POST[nome]\" <$_POST[email]>";
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $tipo_empreendimento = $_POST['tipo_empreendimento'];
        $tipo_ligacao = $_POST['tipo_ligacao'];
        $tipo_local_instalacao = $_POST['tipo_local_instalacao'];
        $consumo_mensal = $_POST['consumo_mensal'];
        $valor_da_conta = $_POST['valor_da_conta'];
		$corpo = "De: $de <br>
		Telefone: $telefone <br>
		Endereco: $endereco <br>
		Estado: $estado <br>
		Cidade: $cidade <br>
		Tipo de Empreendimento: $tipo_empreendimento <br>
		Tipo de Ligacao: $tipo_ligacao <br>
		Tipo de Local de Instalacao: $tipo_local_instalacao <br>
		Consumo Mensal: $consumo_mensal <br>
		Valor da Conta: $valor_da_conta <br>

";

		$headers = "From: $remetente\n";
		$headers .= "Reply-To: $de";

		if (mail($destinatario, $assunto, $corpo, $headers, "-f$remetente"))
		{
			header("Location: $redirecionar_para");
			exit;
		}
		else
			$erros[] = 'Erro ao mandar seu e-mail, por favor tente novamente mais tarde';
	}
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<meta name="theme-color" content="#171515"/>
	<title><?php if(isset($metastags->meta_title_contato) && !empty($metastags->meta_title_contato)){echo $metastags->meta_title_contato;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_contato) && !empty($metastags->meta_description_contato)){echo $metastags->meta_description_contato;}?>"/>
		<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_contato) && !empty($metastags->meta_keywords_contato)){echo $metastags->meta_keywords_contato;}?>">
    <?php if(isset($infoSistema->favicon) && !empty($infoSistema->favicon)){?>
		<link rel="shortcut icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>" >
		<link rel="icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>" >
    <?php }?>
    
	<?php include "inc-tagmanager-head.php";?>
	<script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script>
</head>
	<body>
		<?php include "inc-tagmanager-body.php";?>
		<div id="page" class="page">
				<?php include "header.php";?>
			<!-- CONTACTS-1
			============================================= -->
			<section id="contacts-1" class="wide-60 contacts-section division">				
				<div class="container">
					<div class="row">	
						<div class="col-lg-11 offset-lg-1 section-title">	
							<h3 id="contato" class="h3-md steelblue-color"><?php echo $texto->titulo;?></h3>	
							<p><?php echo $texto->texto;?></p>
						</div>
					</div>
					<div class="row">	


		 				<!-- CONTACTS INFO -->
		 				<div class="col-md-5 col-lg-4 d-none d-md-block d-lg-block">

		 					<!-- General Information -->
		 					<div class="contact-box-2 mb-40">
								<h5 class="h5-sm steelblue-color">Informações Gerais</h5>
								<p><?php echo $infoSistema->endereco;?></p> 
								<p>CEP: <?php echo $infoSistema->cep_loja;?></p>
								<p>Telefone: <?php echo $infoSistema->telefone1;?></p>
								<p>E-mail: <a href="mailto:<?php echo $infoSistema->email1;?>" class="blue-color"><?php echo $infoSistema->email1;?></a></p>
		 					</div>
						</div>	<!-- END CONTACTS INFO -->


						<!-- CONTACT FORM -->	
				 		<div class="col-md-7 col-lg-8">
				 			<div class="form-holder mb-40">
				 				<form name="contactForm" class="row contact-form" method="POST" >
				 				     <div class="col-lg-12 contact-form-msg text-center">
					                	<div class="sending-msg">
					                	<?php if(!empty($erros)){ ?>
											<div class="alert alert-danger" role="alert">
												Seu contato não foi enviado:
											    <ul class="mb-0">
												<?php foreach ($erros as $erro)
														echo '<li>' . htmlspecialchars($erro) . "</li>\n";
												?>
												</ul>
											</div>
										<?php } ?>
					                	</div>
					                </div> 
				                    <div id="input-name" class="col-md-12 col-lg-6">
					                	<input type="text" required name="nome" class="form-control name" placeholder="Nome*"  style="background-color: #fff;"> 
					                </div>
					                        
					                <div id="input-email" class="col-md-12 col-lg-6">
					                	<input type="text" required name="email" class="form-control email" placeholder="E-mail*"  style="background-color: #fff;"> 
									</div>
									<div id="input-email" class="col-md-12 col-lg-12">
					                	<input type="text" required name="endereco" class="form-control email" placeholder="Endereço*"  style="background-color: #fff;"> 
					                </div>

					                <div id="input-phone" class="col-md-12 col-lg-6">
					                	<input type="tel" required name="telefone" class="form-control phone" placeholder="Telefone*"  style="background-color: #fff;"> 
									</div>
									
									<div id="input-name" class="col-md-12 col-lg-6">
					                	<input type="text" required name="cidade" class="form-control name" placeholder="Cidade*"  style="background-color: #fff;"> 
									</div>
									<div id="input-name" class="col-md-12 col-lg-6">
					                	<input type="text" required name="estado" class="form-control name" placeholder="Estado*"  style="background-color: #fff;"> 
									</div>
									<div id="input-name" class="col-md-12 col-lg-6">
									<select name="tipo_empreendimento" id="tipo_empreendimento" class="form-control">
										<option value="">TIPO DE EMPREENDIMENTO</option>
										<option value="Casa">Casa</option>
										<option value="Condominio">Condomínio</option>
										<option value="Ed. Comercial">Ed. Comercial</option>
										<option value="Industria">Indústria</option>
									</select>
									</div>
									<div id="input-name" class="col-md-12 col-lg-6">
									<select name="tipo_ligacao" id="tipo_ligacao" class="form-control">
										<option value="">TIPO DE LIGAÇÃO</option>
										<option value="Monofásica">Monofásica</option>
										<option value="Bifásica">Bifásica</option>
										<option value="Trifásica">Trifásica</option>
									</select>
					                </div>
									<div id="input-name" class="col-md-12 col-lg-6">
									<select name="tipo_local_instalacao" id="tipo_local_instalacao" class="form-control">
										<option value="">TIPO DE LOCAL DA INSTALAÇÃO</option>
										<option value="Telhado de Fibrocimento">Telhado de Fibrocimento</option>
										<option value="Laje">Laje</option>
										<option value="Telhado de Telha de Barro">Telhado de Telha de Barro</option>
										<option value="Outro">Outro</option>
									</select>
									</div>
									<div id="input-name" class="col-md-12 col-lg-6">
										<input type="text" class="form-control" name="consumo_mensal" placeholder="Consumo Mensal em Kwh">
									</div>
									<div id="input-name" class="col-md-12 col-lg-6">
									<input type="text" class="form-control" placeholder="Valor da Conta R$" name="valor_da_conta">
									</div>
					                
					                <div class="col-md-12 col-lg-6">
										<div class="g-recaptcha" data-sitekey="<?php echo $chave_de_site; ?>"></div>
									</div>
					                                            
					                <!-- Contact Form Button -->
					                <div class="col-lg-12 mt-15 form-btn">  
					                	<button type="submit" class="btn btn-orange orange-hover submit" onclick="gtag('event', 'conversion', {'send_to': 'AW-461679481/Bs7ECP_7se4BEPnWktwB'});">Enviar Mensagem</button> 
					                </div>
					                <input type="hidden" name="acao" value="enviarMensagem">
					                <!-- Contact Form Message -->
					                
				                                              
				                </form> 

				 			</div>	
				 		</div> 	
				 		<div class="col-md-5 col-lg-4 d-block d-sm-none">

		 					<!-- General Information -->
		 					<div class="contact-box-2 mb-40">
								<h5 class="h5-sm steelblue-color">Informações Gerais</h5>
								<p><?php echo $infoSistema->endereco;?></p> 
								<p>CEP: <?php echo $infoSistema->cep_loja;?></p>
								<p>Telefone: <?php echo $infoSistema->telefone1;?></p>
								<p>E-mail: <a href="mailto:<?php echo $infoSistema->email1;?>" class="blue-color"><?php echo $infoSistema->email1;?></a></p>
		 					</div>
						</div>


				 	</div>	<!-- End row -->			  
 

				</div>	   <!-- End container -->		
			</section>	<!-- END CONTACTS-1 -->

		<?php include "footer.php";?>
		

	</body>
</html>	