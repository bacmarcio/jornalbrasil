<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/videos.class.php');
$videos = Videos::getInstance(Conexao::getInstance());
$videos->add();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
  <title>Adicionar Video</title>

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

    <h2>Novo Video</h2>

    <form action="" method="post" enctype="multipart/form-data">
      <!-- area de campos do form -->
      <hr />


      <div class="row">
        <div class="form-group col-md-6">
          <label for="name">Nome do Canal</label>
          <input type="text" class="form-control" name="titulo">
        </div>
        <div class="form-group col-md-6">
          <label for="name">Link do canal</label>
          <input type="text" class="form-control" name="embed" placeholder="channel/UCbagmg4kSo2bpOveazHlH0w">
        </div>
        <!--  <div class="form-group col-md-12">-->
        <!--    <label for="name">Descri������o</label>-->
        <!--    <textarea name="descricao" id="ckeditor" class="ckeditor" cols="30" rows="10"></textarea>-->
        <!--  </div>-->
        <!--</div>-->

        <div id="actions" class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="videos.php" class="btn btn-default">Cancelar</a>
          </div>
        </div>
        <input type="hidden" name="acao" value="addVideos">
    </form>

  </main>
  <!--//----FIM DO CONTEUDO---//-->
  <hr>
  <?php include('footer.php'); ?>

</body>
<!--Ultima vers���o do jquery-->

<script src="vendor/ckeditor/ckeditor.js"></script>

</html>