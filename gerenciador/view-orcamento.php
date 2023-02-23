<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/colaboradores.class.php');
$colaboradores = Colaboradores::getInstance(Conexao::getInstance());


include('../data/orcamentos.class.php');
$orcamentos = Orcamentos::getInstance(Conexao::getInstance());

$orcamento = $orcamentos->rsDados(intval($_GET['id']));
$colaborador = $colaboradores->rsDados($orcamento->id_colaborador);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Visualizar Orçamento</title>
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

		<h2>Orçamento <?php echo $orcamento->id; ?></h2>
		<hr>

		<?php if (!empty($_SESSION['message'])) : ?>
			<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
		<?php endif; ?>

		<dl class="dl-horizontal">
			<dt>Data de Cadastro:</dt>
			<dd><?php echo formataData($orcamento->data); ?></dd>

			<dt>Nome:</dt>
			<dd><?php echo $orcamento->nome; ?></dd>

			<dt>Telefone:</dt>
			<dd><?php echo $orcamento->telefone; ?></dd>
		</dl>
		<dl class="dl-horizontal">
			<dt>Endereço:</dt>
			<dd><?php echo $orcamento->endereco; ?></dd>

			<dt>Cidade:</dt>
			<dd><?php echo $orcamento->cidade; ?></dd>

			<dt>Estado:</dt>
			<dd><?php echo $orcamento->estado; ?></dd>

		</dl>

		<dl class="dl-horizontal">
			<dt>Tipo Empreendimento:</dt>
			<dd><?php echo $orcamento->tipo_empreendimento; ?></dd>

			<dt>Consumo Mensal Kwh:</dt>
			<dd><?php echo $orcamento->consumo_mensal; ?></dd>

			<dt>Valor da Conta R$:</dt>
			<dd><?php echo number_format($orcamento->valor_da_conta, 2, ',', '.'); ?></dd>

			<dt>Tipo de Ligação:</dt>
			<dd><?php echo $orcamento->tipo_ligacao; ?></dd>
		</dl>
		<dl class="dl-horizontal">
			<dt>Tipo de Local Instalação:</dt>
			<dd><?php echo $orcamento->tipo_local_instalacao; ?></dd>

			<dt>Colaborador:</dt>
			<dd><?php echo $colaborador->nome; ?></dd>
		</dl>

		<div id="actions" class="row">
			<div class="col-md-12">
				<a href="editar-colaborador.php?id=<?php echo $cliente->id; ?>" class="btn btn-primary">Editar</a>
				<a href="colaboradores.php" class="btn btn-default">Voltar</a>
			</div>
		</div>
	</main>
	<!--//----FIM DO CONTEUDO---//-->
	<hr>
	<?php include('footer.php'); ?>

</body>
<!--Ultima versão do jquery-->

</html>