<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/colunistas.class.php');
$colunistas = Colunistas::getInstance(Conexao::getInstance());
$colunistas->add();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Adicionar Colunista</title>
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

    <h2>Novo Colunista</h2>

    <form action="" method="post" enctype="multipart/form-data">
      <!-- area de campos do form -->
      <hr />
      <div class="row">
        <div class="form-group col-md-12">
          <label for="name">Nome</label>
          <input type="text" class="form-control" name="nome">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="name">Foto</label>
          <input type="file" class="form-control" name="foto">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="campo1">E-mail</label>
          <input type="email" class="form-control" name="email">
        </div>

        <div class="form-group col-md-6">
          <label for="campo2">Telefone</label>
          <input type="text" class="form-control" name="telefone">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="campo1">Login</label>
          <input type="text" class="form-control" name="login">
        </div>

        <div class="form-group col-md-6">
          <label for="campo2">Senha</label>
          <input type="password" class="form-control" name="senha">
        </div>

        <div class="form-group col-md-12">
          <label for="campo2">Nome da coluna</label>
          <input type="text" class="form-control" name="assunto">
        </div>

        <div class="row">
          <div class="form-group col-md-12">
            <label for="campo2">Descrição</label>
            <textarea name="descricao" id="ckeditor" class="ckeditor" cols="30" rows="10"></textarea>
          </div>
        </div>

        <div id="actions" class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="colunistas.php" class="btn btn-default">Cancelar</a>
          </div>
        </div>
        <input type="hidden" name="acao" value="addColunistas">
    </form>

  </main>
  <!--//----FIM DO CONTEUDO---//-->
  <hr>
  <?php include('footer.php'); ?>

</body>
<!--Ultima versão do jquery-->

<script src="vendor/ckeditor/ckeditor.js"></script>

</html>