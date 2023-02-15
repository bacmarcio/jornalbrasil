<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
// $_POST['login'] = '';
// $_POST['senha'] = '';
$acesso->login($_POST['login'], $_POST['senha']);
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
  <?php include('header2.php'); ?>

  <!--//----CONTEUDO---//-->
  <main class="container col-md-offset-4">
    <br><br><br>
    <h2>Login</h2>

    <form action="" method="post">
      <!-- area de campos do form -->

      <div class="row">
        <div class="form-group col-md-4">
          <label for="name">Login</label>
          <input type="text" class="form-control" name="login">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-4">
          <label for="name">Senha</label>
          <input type="password" class="form-control" name="senha">
        </div>
      </div>



      <div id="actions" class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Confirmar</button>
          <!--      <a href="index.php" class="btn btn-default">Cancelar</a>-->

        </div>
      </div>
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

</html>