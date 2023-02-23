<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/clientes.class.php');
$clientes = Clientes::getInstance(Conexao::getInstance());

$cliente = $clientes->rsDados(intval($_GET['id']));
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Visualizar Cliente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet">

	<!-- Ultima versão do bootstrap CSS, JS & FONT AWESOME -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">

</head>

<body>
	<?php include('header.php'); ?>

	<!--//----CONTEUDO---//-->
	<main class="container">
		<br><br><br>

		<h2>Cliente <?php echo $cliente->id; ?></h2>
		<hr>

		<?php if (!empty($_SESSION['message'])) : ?>
			<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
		<?php endif; ?>

		<dl class="dl-horizontal">
			<dt>Nome / Razão Social:</dt>
			<dd><?php echo $cliente->nome; ?></dd>

			<dt>CPF / CNPJ:</dt>
			<dd><?php echo $cliente->cpf_cnpj; ?></dd>

			<dt>Data de Nascimento:</dt>
			<dd><?php echo $cliente->nascimento; ?></dd>
		</dl>

		<dl class="dl-horizontal">
			<dt>Endereço:</dt>
			<dd><?php echo $cliente->endereco; ?></dd>

			<dt>Bairro:</dt>
			<dd><?php echo $cliente->bairro; ?></dd>

			<dt>CEP:</dt>
			<dd><?php echo $cliente->cep; ?></dd>

			<dt>Data de Cadastro:</dt>
			<dd><?php echo formataData($cliente->criado); ?></dd>
		</dl>

		<dl class="dl-horizontal">
			<dt>Cidade:</dt>
			<dd><?php echo $cliente->cidade; ?></dd>

			<dt>Telefone:</dt>
			<dd><?php echo $cliente->telefone; ?></dd>

			<dt>Celular:</dt>
			<dd><?php echo $cliente->celular; ?></dd>

			<dt>Estado:</dt>
			<dd><?php echo $cliente->estado; ?></dd>


		</dl>

		<div id="actions" class="row">
			<div class="col-md-12">
				<a href="editar-cliente.php?id=<?php echo $cliente->id; ?>" class="btn btn-primary">Editar</a>
				<a href="clientes.php" class="btn btn-default">Voltar</a>
			</div>
		</div>
	</main>
	<!--//----FIM DO CONTEUDO---//-->
	<hr>
	<?php include('footer.php'); ?>

</body>
<!--Ultima versão do jquery-->

</html>