<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/clientes.class.php');
$clientes = Clientes::getInstance(Conexao::getInstance());
$clientes->editar();
$dados = $clientes->rsDados(intval($_GET['id']));
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Adicionar Cliente</title>
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

    <h2>Atualizar Cliente</h2>

    <form action="" method="post">
      <hr />
      <div class="row">
        <div class="form-group col-md-7">
          <label for="name">Nome / Razão Social</label>
          <input type="text" class="form-control" name="nome" value="<?php echo $dados->nome; ?>">
        </div>

        <div class="form-group col-md-3">
          <label for="campo2">CNPJ / CPF</label>
          <input type="text" class="form-control" name="cpf_cnpj" value="<?php echo $dados->cpf_cnpj; ?>">
        </div>

        <div class="form-group col-md-2">
          <label for="campo3">Data de Nascimento</label>
          <input type="text" class="form-control" name="nascimento" value="<?php echo $dados->nascimento; ?>">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-5">
          <label for="campo1">Endereço</label>
          <input type="text" class="form-control" name="endereco" value="<?php echo $dados->endereco; ?>">
        </div>

        <div class="form-group col-md-3">
          <label for="campo2">Bairro</label>
          <input type="text" class="form-control" name="bairro" value="<?php echo $dados->bairro; ?>">
        </div>

        <div class="form-group col-md-2">
          <label for="campo3">CEP</label>
          <input type="text" class="form-control" name="cep" value="<?php echo $dados->cep; ?>">
        </div>


      </div>
      <div class="row">


        <div class="form-group col-md-2">
          <label for="campo2">Telefone</label>
          <input type="text" class="form-control" name="telefone" value="<?php echo $dados->telefone; ?>">
        </div>

        <div class="form-group col-md-2">
          <label for="campo3">Celular</label>
          <input type="text" class="form-control" name="celular" value="<?php echo $dados->celular; ?>">
        </div>

        <div class="form-group col-md-1">
          <label for="campo3">Estado</label>
          <input type="text" class="form-control" name="estado" value="<?php echo $dados->estado; ?>">
        </div>

      </div>
      <div id="actions" class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Salvar</button>
          <a href="clientes.php" class="btn btn-default">Cancelar</a>
        </div>
      </div>
      <input type="hidden" name="acao" value="editarClientes">
      <input type="hidden" name="id" value="<?php echo $dados->id; ?>">
      <input type="hidden" name="criado" value="<?php echo $dados->criado; ?>">
    </form>

  </main>
  <!--//----FIM DO CONTEUDO---//-->
  <hr>
  <?php include('footer.php'); ?>

</body>
<!--Ultima versão do jquery-->

</html>