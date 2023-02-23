<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/colaboradores.class.php');
$colaboradores = Colaboradores::getInstance(Conexao::getInstance());
$dadosColaboradores = $colaboradores->rsDados();

include('../data/orcamentos.class.php');
$orcamentos = Orcamentos::getInstance(Conexao::getInstance());
$orcamentos->add();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Adicionar Orçamento</title>
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

    <h2>Novo Orçamento</h2>

    <form action="" method="post">
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
          <label for="campo1">Endereço</label>
          <input type="text" class="form-control" name="endereco">
        </div>

        <div class="form-group col-md-3">
          <label for="campo2">Cidade</label>
          <input type="text" class="form-control" name="cidade">
        </div>

        <div class="form-group col-md-3">
          <label for="campo3">Estado</label>
          <input type="text" class="form-control" name="estado">
        </div>


      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="campo2">Telefone</label>
          <input type="text" class="form-control" name="telefone">
        </div>

        <div class="form-group col-md-6">
          <label for="campo2">Tipo Empreendimento</label>
          <select name="tipo_empreendimento" id="tipo_empreendimento" class="form-control">
            <option value="">SELECIONE</option>
            <option value="Casa">Casa</option>
            <option value="Condominio">Condominio</option>
            <option value="Ed. Comercial">Ed. Comercial</option>
            <option value="Industria">Industria</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-4">
          <label for="campo2">Consumo Mensal em Kwh</label>
          <input type="text" class="form-control" name="consumo_mensal">
        </div>
        <div class="form-group col-md-4">
          <label for="campo2">Valor da Conta R$</label>
          <input type="text" class="form-control" name="valor_da_conta">
        </div>
        <div class="form-group col-md-4">
          <label for="campo2">Tipo de Ligação</label>
          <select name="tipo_ligacao" id="tipo_ligacao" class="form-control">
            <option value="">SELECIONE</option>
            <option value="Monofásica">Monofásica</option>
            <option value="Bifásica">Bifásica</option>
            <option value="Trifásica">Trifásica</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="campo2">Tipo de Local Instalação</label>
          <select name="tipo_local_instalacao" id="tipo_local_instalacao" class="form-control">
            <option value="">SELECIONE</option>
            <option value="Telhado de Fibrocimento">Telhado de Fibrocimento</option>
            <option value="Laje">Laje</option>
            <option value="Telhado de Telha de Barro">Telhado de Telha de Barro</option>
            <option value="Outro">Outro</option>
          </select>
        </div>

        <div class="form-group col-md-6">
          <label for="campo2">Colaborador</label>
          <select name="id_colaborador" id="id_colaborador" class="form-control">
            <option value="">SELECIONE</option>
            <?php foreach ($dadosColaboradores as $colaborador) : ?>
              <option value="<?php echo $colaborador->id; ?>"><?php echo $colaborador->nome; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>

      <div id="actions" class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Salvar</button>
          <a href="orcamentos.php" class="btn btn-default">Cancelar</a>
        </div>
      </div>
      <input type="hidden" name="acao" value="addOrcamentos">
    </form>

  </main>
  <!--//----FIM DO CONTEUDO---//-->
  <hr>
  <?php include('footer.php'); ?>

</body>
<!--Ultima versão do jquery-->

</html>