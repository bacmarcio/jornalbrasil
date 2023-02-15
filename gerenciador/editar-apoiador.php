<?php 
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/apoiadores.class.php');
$apoiadores = Apoiadores::getInstance(Conexao::getInstance());
$apoiadores->editar();

$descApoiador = $apoiadores->rsDados(intval($_GET['id']));
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Atualizar Apoiador</title>
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

<h2>Atualizar Apoiador</h2>

<form action="" method="post" enctype="multipart/form-data">
  <!-- area de campos do form -->
  <hr />
	
	<div class="row">
    <div class="form-group col-md-12">
      <label for="name">Tipo Apoiador</label>
      <input type="text" class="form-control" name="tipo_apoiador" value="<?php echo $descApoiador->tipo_apoiador; ?>">
    </div>
  </div>
	
  <div class="row">
    <div class="form-group col-md-12">
      <label for="name">Titulo</label>
      <input type="text" class="form-control" name="titulo" value="<?php echo $descApoiador->titulo; ?>">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-6">
      <label for="campo1">Foto</label>
      <input type="file" class="form-control" name="foto">
    </div>
 
  </div>
	<div class="row">
    <div class="form-group col-md-12">
      <label for="name">Link</label>
      <input type="text" class="form-control" name="linkApoio" value="<?php echo $descApoiador->linkApoio; ?>">
    </div>
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="apoiadores.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
  <input type="hidden" name="acao" value="editarApoiadores">
  <input type="hidden" name="id" value="<?php echo $descApoiador->id; ?>">
  <input type="hidden" name="foto_Atual" value="<?php echo $descApoiador->foto; ?>">
 
</form>

</main> 
 <!--//----FIM DO CONTEUDO---//-->
	<hr>
<?php include('footer.php'); ?>

    </body>
    <!--Ultima versão do jquery-->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="vendor/ckeditor/ckeditor.js"></script>
</html>