<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/categorias.class.php');
$categorias = Categorias::getInstance(Conexao::getInstance());
$dadosCategorias = $categorias->rsDados(1, '', 'titulo ASC');

include('../data/noticias.class.php');
$noticias = Noticias::getInstance(Conexao::getInstance());
$noticias->add();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Adicionar Notícias</title>
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

    <h2>Novo Notícias</h2>

    <form action="" method="post" enctype="multipart/form-data">
      <!-- area de campos do form -->
      <hr />
      <div class="row">
        <div class="form-group col-md-3">
          <label for="campo1">Data</label>
          <input type="date" name="data" class="form-control" value="<?php echo date('Y-m-d'); ?>">

        </div>


        <div class="form-group col-md-3">
          <label for="campo1">Categoria</label>
          <select name="categoria" id="categoria" class="form-control">
            <option value="">SELECIONE</option>
            <?php foreach ($dadosCategorias as $categoria) : ?>
              <option value="<?php echo $categoria->id; ?>"><?php echo $categoria->titulo; ?></option>
            <?php endforeach; ?>
          </select>

        </div>
        <div class="form-group col-md-2">
          <label for="campo1">Destaque</label>
          <select name="destaque" id="destaque" class="form-control">
            <option value="S">Sim</option>
            <option value="N" selected>Não</option>
          </select>

        </div>
        <div class="form-group col-md-2">
          <label for="campo1">Ativo</label>
          <select name="ativo" id="ativo" class="form-control">
            <option value="S" selected>Sim</option>
            <option value="N">Não</option>
          </select>

        </div>
        <div class="form-group col-md-2">
          <label for="campo1">Principal</label>
          <select name="principal" id="principal" class="form-control">
            <option value="S">Sim</option>
            <option value="N" selected>Não</option>
          </select>

        </div>
      </div>
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
          <label for="campo1">Legenda Foto</label>
          <input type="text" class="form-control" name="desc_foto">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="campo1">Arquivo PDF</label>
          <input type="file" class="form-control" name="arquivo_pdf">
        </div>
        <div class="form-group col-md-6">
          <label for="campo1">Arquivo Audio</label>
          <input type="file" class="form-control" name="audio">
        </div>

      </div>
      <div class="row">
        <div class="form-group col-md-12">
          <label for="name">Fonte</label>
          <input type="text" class="form-control" name="autor_da_materia">
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
          <textarea name="noticia" id="ckeditor" class="ckeditor" cols="30" rows="10"></textarea>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-4">
          <label for="campo2">Indicar Notícia 1</label>
          <input type="email" name="email_indica" class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label for="campo2">Indicar Notícia 2</label>
          <input type="email" name="email_indica2" class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label for="campo2">Indicar Notícia 3</label>
          <input type="email" name="email_indica3" class="form-control">
        </div>
      </div>

      <div id="actions" class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Salvar</button>
          <a href="noticias.php" class="btn btn-default">Cancelar</a>
        </div>
      </div>
      <input type="hidden" name="acao" value="addNoticias">
    </form>

  </main>
  <!--//----FIM DO CONTEUDO---//-->
  <hr>
  <?php include('footer.php'); ?>

</body>
<!--Ultima versão do jquery-->

<script src="vendor/ckeditor/ckeditor.js"></script>

</html>