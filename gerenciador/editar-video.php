<?php 
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/videos.class.php');
$videos = Videos::getInstance(Conexao::getInstance());
$videos->editar();

$descVideo = $videos->rsDados(intval($_GET['id']));
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
        <title>Atualizar Video</title>
        
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

<h2>Atualizar Video</h2>

<form action="" method="post" enctype="multipart/form-data">
  <!-- area de campos do form -->
  <hr />
 
  <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Nome do canal</label>
      <input type="text" class="form-control" name="titulo" value='<?php echo $descVideo->titulo; ?>'>
    </div>
	  <div class="form-group col-md-4">
      <label for="name">Link do Canal</label>
      <input type="text" class="form-control" name="embed" placeholder="channel/UCbagmg4kSo2bpOveazHlH0w" value="<?php echo $descVideo->embed; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="name">Ativo</label>
      <select name="ativo" id="" class="form-control">
        <option value="S">Sim</option>
        <option value="N">Não</option>
      </select>
    </div>
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="videos.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
  <input type="hidden" name="acao" value="editarVideos">
  <input type="hidden" name="id" value="<?php echo $descVideo->id; ?>">
  <input type="hidden" name="data" value="<?php echo date('Y-m-d'); ?>">
  
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