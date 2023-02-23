<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/banners_colunista.class.php');
$bannersColunistas = BannersColunistas::getInstance(Conexao::getInstance());
$bannersColunistas->editar();

$descBanner = $bannersColunistas->rsDados(intval($_GET['id']));
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
  <?php include('header.php'); ?>

  <!--//----CONTEUDO---//-->
  <main class="container">
    <br><br><br>

    <h2>Atualizar Banner</h2>

    <form action="" method="post" enctype="multipart/form-data">
      <!-- area de campos do form -->
      <hr />

      <div class="row">
        <div class="form-group col-md-12">
          <label for="name">Titulo</label>
          <input type="text" class="form-control" name="titulo" value="<?php echo $descBanner->titulo; ?>">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="campo1">Foto</label>
          <input type="file" class="form-control" name="foto">
        </div>

      </div>

      <div id="actions" class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Salvar</button>
          <a href="bannersColunista.php?id_colunista=<?php echo $descBanner->id_colunista; ?>" class="btn btn-default">Cancelar</a>
        </div>
      </div>
      <input type="hidden" name="acao" value="editarBannersColunistas">
      <input type="hidden" name="id" value="<?php echo $descBanner->id; ?>">
      <input type="hidden" name="foto_Atual" value="<?php echo $descBanner->foto; ?>">
      <input type="hidden" name="id_colunista" value="<?php echo $descBanner->id_colunista; ?>">

    </form>

  </main>
  <!--//----FIM DO CONTEUDO---//-->
  <hr>
  <?php include('footer.php'); ?>

</body>
<!--Ultima versão do jquery-->

<script src="vendor/ckeditor/ckeditor.js"></script>

</html>