<?php 
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/depoimentos.class.php');
$depoimentos = Depoimentos::getInstance(Conexao::getInstance());
$depoimentos->excluir();
$dadosDepoimentos = $depoimentos->rsDados(intval($_GET['id_menu']));
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
<?php include('header.php');?>

    <!--//----CONTEUDO---//-->
    <main class="container">
    <br><br><br>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<header>
	<div class="row">
		<div class="col-sm-5">
			<h2>Depoimentos</h2>
		</div>
		<div class="col-sm-7 text-right h2">
    		<a class="btn btn-primary" href="add-depoimento.php"><i class="fa fa-plus"></i> Novo Depoimento</a>
	    	<a class="btn btn-default" href="depoimentos.php"><i class="fa fa-refresh"></i> Atualizar</a>
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
		<th width="296">Nome</th>
		<th width="403">Depoimento</th>
		<th width="330" class="text-center">Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($dadosDepoimentos) : ?>
<?php foreach ($dadosDepoimentos as $depoimento) : ?>
	<tr>
		<td><?php echo $depoimento->id; ?></td>
		<td> <img src="../img_conteudos/<?php echo $depoimento->foto; ?>" width="100" alt=""></td>
		<td><?php echo $depoimento->nome; ?></td>
		<td><?php echo $depoimento->depoimento; ?></td>
		<td class="actions text-right">
			<a href="view-depoimento.php?id=<?php echo $depoimento->id; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="editar-depoimento.php?id=<?php echo $depoimento->id; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="javascript:;" class="btn btn-sm btn-danger" onclick="if(confirm('Tem certeza que deseja excluir <?php echo texto(preg_replace('~[\r\n]+~', '', $depoimento->nome)); ?>?')) { window.location='depoimentos.php?acao=excluirDepoimentos&id=<?php echo $depoimento->id; ?>&foto=<?php echo $depoimento->foto; ?>'; } ">
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
<?php include ('modal.php');?>
</main> 
 <!--//----FIM DO CONTEUDO---//-->
	<hr>
<?php include('footer.php'); ?>

    </body>
    <!--Ultima versão do jquery-->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</html>