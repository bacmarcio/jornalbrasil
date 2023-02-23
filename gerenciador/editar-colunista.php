<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/colunistas.class.php');
$colunistas = Colunistas::getInstance(Conexao::getInstance());
$colunistas->editar();

$dadosColaborador = $colunistas->rsDados(intval($_GET['id']));
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Atualizar Colunista</title>
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

    <h2>Atualizar Colunista</h2>

    <form action="" method="post" enctype="multipart/form-data">
      <!-- area de campos do form -->
      <hr />
      <div class="row">
        <div class="form-group col-md-12">
          <label for="name">Nome</label>
          <input type="text" class="form-control" name="nome" value="<?php echo $dadosColaborador->nome; ?>">
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
          <input type="email" class="form-control" name="email" value="<?php echo $dadosColaborador->email; ?>">
        </div>

        <div class="form-group col-md-6">
          <label for="campo2">Telefone</label>
          <input type="text" class="form-control" name="telefone" value="<?php echo $dadosColaborador->telefone; ?>">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="campo1">Login</label>
          <input type="text" class="form-control" name="login" value="<?php echo $dadosColaborador->login; ?>">
        </div>

        <div class="form-group col-md-6">
          <label for="campo2">Senha</label>
          <input type="password" class="form-control" name="senha" value="<?php echo $dadosColaborador->senha; ?>">
        </div>
        <div class="form-group col-md-12">
          <label for="campo2">Nome da Coluna</label>
          <input type="text" class="form-control" name="assunto" value="<?php echo $dadosColaborador->assunto; ?>">
        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="campo2">Facebook</label>
        <input type="text" class="form-control" name="facebook" value="<?php echo $dadosColaborador->facebook; ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="campo2">Twitter</label>
        <input type="text" class="form-control" name="twitter" value="<?php echo $dadosColaborador->twitter; ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="campo2">Instagram</label>
        <input type="text" class="form-control" name="instagram" value="<?php echo $dadosColaborador->instagram; ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="campo2">YouTube</label>
        <input type="text" class="form-control" name="youtube" value="<?php echo $dadosColaborador->youtube; ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="campo2">Linkedin</label>
        <input type="text" class="form-control" name="linkedin" value="<?php echo $dadosColaborador->linkedin; ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="campo2">Google</label>
        <input type="text" class="form-control" name="google" value="<?php echo $dadosColaborador->google; ?>">
      </div>
      <div class="row">
        <div class="form-group col-md-12">
          <label for="campo2">Descrição</label>
          <textarea name="descricao" id="ckeditor" class="ckeditor" cols="30" rows="10"><?php echo $dadosColaborador->descricao; ?></textarea>
        </div>
      </div>

      <div id="actions" class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Salvar</button>
          <a href="bannersColunista.php?id_colunista=<?php echo $_GET['id'] ?>" class="btn btn-success">Banners</a>
          <a href="colunistas.php" class="btn btn-default">Cancelar</a>
        </div>
      </div>
      <input type="hidden" name="acao" value="editarColunistas">
      <input type="hidden" name="id" value="<?php echo $dadosColaborador->id; ?>">
      <input type="hidden" name="foto_Atual" value="<?php echo $dadosColaborador->foto; ?>">
    </form>

  </main>
  <!--//----FIM DO CONTEUDO---//-->
  <hr>
  <?php include('footer.php'); ?>

</body>
<!--Ultima versão do jquery-->

<script src="vendor/ckeditor/ckeditor.js"></script>

</html>