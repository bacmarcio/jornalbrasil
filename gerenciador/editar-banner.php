<?php 
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/banners.class.php');
$banners = Banners::getInstance(Conexao::getInstance());
$banners->editar();

$descBanner = $banners->rsDados(intval($_GET['id']));
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Atualizar Banner</title>
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

<h2>Atualizar Banner</h2>

<form action="" method="post" enctype="multipart/form-data">
  <!-- area de campos do form -->
  <hr />
  
<!--  <div class="row">
    <div class="form-group col-md-6">
      <label for="name">Posição</label>
      <select name="posicao" id="posicao" class="form-control">
      	<option value="">SELECIONE</option>
      	<option value="E" <?php if($descBanner->posicao == 'E'): echo "selected"; endif; ?>>Esquerda 150x330</option>
      	<option value="D" <?php if($descBanner->posicao == 'D'): echo "selected"; endif; ?>>Direita 310x310</option>
      	<option value="DE" <?php if($descBanner->posicao == 'DE'): echo "selected"; endif; ?>>Direita Especial 310x310</option>
      	<option value="R1" <?php if($descBanner->posicao == 'R1'): echo "selected"; endif; ?>>Rodapé 970x90</option>
      	<option value="R2" <?php if($descBanner->posicao == 'R2'): echo "selected"; endif; ?>>Rodapé 310x310</option>
      </select>
     
    </div>-->
  </div>
  
  <div class="row">
    <div class="form-group col-md-12">
      <label for="name">Titulo</label>
      <input type="text" class="form-control" name="titulo" value="<?php echo $descBanner->titulo; ?>">
    </div>
  </div>
	
	<div class="row">
    <div class="form-group col-md-12">
      <label for="name">Link</label>
      <input type="text" class="form-control" name="link" value="<?php echo $descBanner->link; ?>">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-6">
      <label for="campo1">Foto</label>
      <input type="file" class="form-control" name="foto">
    </div>
 
  </div>
  
 <!-- <div class="row">
    <div class="form-group col-md-12">
      <label for="name">Adsense</label>
      <textarea name="codigo_fonte" class="form-control" cols="30" rows="5">
		  <?php echo $descBanner->codigo_fonte; ?>
		</textarea>
    </div>
  </div>-->
 
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="banners.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
  <input type="hidden" name="acao" value="editarBanners">
  <input type="hidden" name="id" value="<?php echo $descBanner->id; ?>">
  <input type="hidden" name="foto_Atual" value="<?php echo $descBanner->foto; ?>">
 
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