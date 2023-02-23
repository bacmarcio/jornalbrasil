<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/conteudos.class.php');
$conteudos = Conteudos::getInstance(Conexao::getInstance());
$conteudos->excluir();
$dadosConteudos = $conteudos->rsDados(intval($_GET['id_menu']));
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
				<div class="col-sm-5">
					<h2>Conteudos</h2>
				</div>
				<div class="col-sm-7 text-right h2">
					<a class="btn btn-success" href="categorias.php?id_menu=<?php echo $_GET['id_menu']; ?>"><i class="fa fa-plus"></i> Categoria</a>
					<a class="btn btn-primary" href="add-conteudo.php?id_menu=<?php echo $_GET['id_menu']; ?>"><i class="fa fa-plus"></i> Novo Conteudo</a>
					<a class="btn btn-default" href="conteudos.php?id_menu=<?php echo $_GET['id_menu']; ?>"><i class="fa fa-refresh"></i> Atualizar</a>
				</div>
			</div>
		</header>

		<?php if (!empty($_SESSION['message'])) : ?>
			<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?php echo $_SESSION['message']; ?>
			</div>
			<?php clear_messages(); ?>
		<?php endif; ?>

		<hr>

		<table class="table table-hover" border="1">
			<thead>
				<tr>
					<th width="95">ID</th>
					<th width="100">Foto</th>
					<th width="296">Titulo</th>
					<th width="403">Resumo</th>
					<th width="330" class="text-center">Opções</th>
				</tr>
			</thead>
			<tbody>
				<?php if ($dadosConteudos) : ?>
					<?php foreach ($dadosConteudos as $conteudo) : ?>
						<tr>
							<td><?php echo $conteudo->id; ?></td>
							<td> <img src="../img_conteudos/<?php echo $conteudo->foto; ?>" width="100" alt=""></td>
							<td><?php echo $conteudo->titulo; ?></td>
							<td><?php echo $conteudo->resumo; ?></td>
							<td class="actions text-right">
								<a href="view-conteudo.php?id=<?php echo $conteudo->id; ?>&id_menu=<?php echo $_GET['id_menu']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
								<a href="editar-conteudo.php?id=<?php echo $conteudo->id; ?>&id_menu=<?php echo $_GET['id_menu']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
								<a href="javascript:;" class="btn btn-sm btn-danger" onclick="if(confirm('Tem certeza que deseja excluir <?php echo texto(preg_replace('~[\r\n]+~', '', $conteudo->titulo)); ?>?')) { window.location='clientes.php?acao=excluirConteudo&id=<?php echo $conteudo->id; ?>&foto=<?php echo $conteudo->foto; ?>&id_menu=<?php echo $_GET['id_menu']; ?>'; } ">
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