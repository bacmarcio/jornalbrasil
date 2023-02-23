<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/colunistas.class.php');
$colunistas = Colunistas::getInstance(Conexao::getInstance());
$colunistas->excluir();
$dadosColaboradores = $colunistas->rsDados();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Sistema</title>
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
		<div class="clearfix">&nbsp;</div>
		<div class="clearfix">&nbsp;</div>
		<header>
			<div class="row">
				<div class="col-sm-6">
					<h2>Colunistas</h2>
				</div>
				<div class="col-sm-6 text-right h2">
					<a class="btn btn-primary" href="add-colunista.php"><i class="fa fa-plus"></i> Novo Colunista</a>
					<a class="btn btn-default" href="colunistas.php"><i class="fa fa-refresh"></i> Atualizar</a>
				</div>
			</div>
		</header>

		<hr>

		<table class="table table-hover" border="1">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>E-mail</th>
					<th>Telefone</th>
					<th class="text-center">Opções</th>
				</tr>
			</thead>
			<tbody>
				<?php if ($dadosColaboradores) : ?>
					<?php foreach ($dadosColaboradores as $colaborador) : ?>
						<tr>
							<td><?php echo $colaborador->id; ?></td>
							<td><?php echo $colaborador->nome; ?></td>
							<td><?php echo $colaborador->email; ?></td>
							<td><?php echo $colaborador->telefone; ?></td>
							<td class="actions text-right">
								<a href="view-colunista.php?id=<?php echo $colaborador->id; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
								<a href="editar-colunista.php?id=<?php echo $colaborador->id; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
								<a href="javascript:;" class="btn btn-sm btn-danger" onclick="if(confirm('Tem certeza que deseja excluir <?php echo texto(preg_replace('~[\r\n]+~', '', $colaborador->nome)); ?>?')) { window.location='colunistas.php?acao=excluirColunistas&id=<?php echo $colaborador->id; ?>'; } ">
									<i class="fa fa-trash"></i> Excluir
								</a>
							</td>
						</tr>
					<?php endforeach;
				else : ?>
					<tr>
						<td colspan="6">Nenhum registro encontrado.</td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php include('modal.php'); ?>
	</main>
	<!--//----FIM DO CONTEUDO---//-->
	<hr>
	<?php include('footer.php'); ?>

</body>
<!--Ultima versão do jquery-->

</html>