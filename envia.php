<?php

// incluir a funcionalidade do recaptcha
//require_once "recaptchalib.php";

// definir a chave secreta
//$secret = "6LeMQNUZAAAAAARCvsmscpKnmM-Z5RMtVPu5NbBf";

// verificar a chave secreta
//$response = null;
//$reCaptcha = new ReCaptcha($secret);

//if ($_POST["g-recaptcha-response"]) {
    //$response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);
//}

// deu tudo certo?
//if ($response != null && $response->success) {
    // processar o formulario

	
	   require("phpmailer/class.phpmailer.php");
	// Define os dados do servidor e tipo de conexão
          $mail = new PHPMailer();
		  
		  $mensagem = "<b>Contato via site - ALBANY CLASS</b> <br /> <br />";
		  $mensagem.= "<b>Nome:</b> ".$_POST['nome']." <br />";
		  $mensagem.= "<b>E-Mail:</b> ".$_POST['email']." <br />";
		  $mensagem.= "<b>Telefone:</b> ".$_POST['telefone']." <br />";
		  $mensagem.= "<b>Assunto:</b> ".$_POST['assunto']."  <br />";
		  $mensagem.= "<b>Mensagem:</b> ".$_POST['mensagem']."  <br />";
		  
		  $mail->IsSMTP(); // telling the class to use SMTP


		  try {
			 $mail->Host       = "mail.albanyclassic.com.br";// sets GMAIL as the SMTP server
			 $mail->SMTPDebug  = 1;// enables SMTP debug information (for testing)
			 $mail->SMTPAuth   = true;// enable SMTP authentication
			// $mail->SMTPSecure = "ssl";// sets the prefix to the servier
			 $mail->Host       = "mail.albanyclassic.com.br";// sets GMAIL as the SMTP server
			 $mail->Port       = 587;// set the SMTP port for the GMAIL server
			 $mail->Username   = "albanyclassic@albanyclassic.com.br";// GMAIL username
			 $mail->Password   = "brasil2009";// GMAIL password
			 //$mail->AddReplyTo($_POST['email'], $_POST['nome']);
			 //$mail->AddAddress('asmbmonteiro@gmail.com');
			 $mail->AddAddress('atendimento@albanyclassic.com.br');
			 $mail->AddAddress('albany@albanyclassic.com.br');
			 $mail->SetFrom('atendimento@albanyclassic.com.br', 'ALBANY CLASS');
			 $mail->Subject = 'Contato via site - ALBANY CLASS';
			 $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; 
			 $mail->MsgHTML($mensagem);
			 $mail->Send();
			 
			 
		 
		  } catch (phpmailerException $e) {
			  echo $e->errorMessage(); //Pretty error messages from PHPMailer
		  } catch (Exception $e) {
			  echo $e->getMessage(); //Boring error messages from anything else!
		  }

		  echo "<script type='text/javascript'>alert('Sua mensagem foi enviada com sucesso!');window.location='.';</script>\n";

//}
	
?>