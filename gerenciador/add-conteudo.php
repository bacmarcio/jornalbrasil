<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/categorias.class.php');
$categorias = Categorias::getInstance(Conexao::getInstance());
$dadosCategorias = $categorias->rsDados(intval($_GET['id_menu']), '', 'titulo ASC');

include('../data/conteudos.class.php');
$conteudos = Conteudos::getInstance(Conexao::getInstance());
$conteudos->add();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Adicionar Conteudo</title>
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

    <h2>Novo Conteudo</h2>

    <form action="" method="post" enctype="multipart/form-data">
      <!-- area de campos do form -->
      <hr />
      <div class="row">
        <div class="form-group col-md-12">
          <label for="name">Titulo</label>
          <input type="text" class="form-control" name="titulo">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="campo1">Foto</label>
          <input type="file" class="form-control" name="foto">
        </div>
        <div class="form-group col-md-6">
          <label for="campo1">Categoria</label>
          <select name="id_categoria" id="id_categoria" class="form-control">
            <option value="">SELECIONE</option>
            <?php foreach ($dadosCategorias as $categoria) : ?>
              <option value="<?php echo $categoria->id; ?>"><?php echo $categoria->titulo; ?></option>
            <?php endforeach; ?>
          </select>

        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-12">
          <label for="campo2">Resumo</label>
          <textarea name="resumo" id="resumo" class="form-control" cols="30" rows="5"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-12">
          <label for="campo2">Descrição</label>
          <textarea name="conteudo" id="ckeditor" class="ckeditor" cols="30" rows="10"></textarea>
        </div>
      </div>

      <div id="actions" class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Salvar</button>
          <a href="conteudos.php" class="btn btn-default">Cancelar</a>
        </div>
      </div>
      <input type="hidden" name="acao" value="addConteudos">
      <input type="hidden" name="id_menu" value="<?php echo $_GET['id_menu']; ?>">
    </form>

  </main>
  <!--//----FIM DO CONTEUDO---//-->
  <hr>
  <?php include('footer.php'); ?>

</body>
<!--Ultima versão do jquery-->

<script src="vendor/ckeditor/ckeditor.js"></script>

</html>