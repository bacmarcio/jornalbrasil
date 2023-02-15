<?php 
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/artigos.class.php');
$artigos = Artigos::getInstance(Conexao::getInstance());
$artigos->excluir();
$dadosConteudos = $artigos->rsDados('', 'data DESC');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Artigos</title>
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
			<h2>Artigos</h2>
		</div>
		<div class="col-sm-7 text-right h2">
    		<a class="btn btn-primary" href="add-artigo.php"><i class="fa fa-plus"></i> Novo Artigo</a>
	    	<a class="btn btn-default" href="artigos.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<hr>

<table class="table table-hover" border="1">
<thead>
	<tr>
		<th width="95">ID</th>
		<th width="100">Foto</th>
		<th width="296">Titulo</th>
		
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
		
		<td class="actions text-right">
			<a href="view-artigo.php?id=<?php echo $conteudo->id; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="editar-artigo.php?id=<?php echo $conteudo->id; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="javascript:;" class="btn btn-sm btn-danger" onclick="if(confirm('Tem certeza que deseja excluir <?php echo texto(preg_replace('~[\r\n]+~', '', $conteudo->titulo)); ?>?')) { window.location='artigos.php?acao=excluirArtigos&id=<?php echo $conteudo->id; ?>&foto=<?php echo $conteudo->foto; ?>'; } ">
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