<?php 
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/colaboradores.class.php');
$colaboradores = Colaboradores::getInstance(Conexao::getInstance());

include('../data/orcamentos.class.php');
$orcamentos = Orcamentos::getInstance(Conexao::getInstance());
$orcamentos->excluir();
$dadosOrcamentos = $orcamentos->rsDados();
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
		<div class="col-sm-6">
			<h2>Orçamentos</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add-orcamento.php"><i class="fa fa-plus"></i> Novo Orçamento</a>
	    	<a class="btn btn-default" href="orcamentos.php"><i class="fa fa-refresh"></i> Atualizar</a>
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
		<th>ID</th>
		<th>Data</th>
		<th>Nome</th>
		<th>Empreendimento</th>
		<th>Colaborador</th>
		<th class="text-center">Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($dadosOrcamentos) : ?>
<?php foreach ($dadosOrcamentos as $orcamento) : ?>
<?php $colaborador = $colaboradores->rsDados($orcamento->id_colaborador);?>
	<tr>
		<td><?php echo $orcamento->id; ?></td>
		<td><?php echo formataData($orcamento->data); ?></td>
		<td><?php echo $orcamento->nome; ?></td>
		<td><?php echo $orcamento->tipo_empreendimento; ?></td>
		<td><?php echo $colaborador->nome; ?></td>
		<td class="actions text-right">
			<a href="view-orcamento.php?id=<?php echo $orcamento->id; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="editar-orcamento.php?id=<?php echo $orcamento->id; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<?php /*?><a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $clientes->id; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a><?php */?>
			<a href="javascript:;" class="btn btn-sm btn-danger" onclick="if(confirm('Tem certeza que deseja excluir <?php echo texto(preg_replace('~[\r\n]+~', '', $orcamento->nome)); ?>?')) { window.location='orcamentos.php?acao=excluirOrcamentos&id=<?php echo $orcamento->id; ?>'; } ">
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