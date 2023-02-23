<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/colaboradores.class.php');
$colaboradores = Colaboradores::getInstance(Conexao::getInstance());
$dadosColaboradores = $colaboradores->rsDados();

include('../data/orcamentos.class.php');
$orcamentos = Orcamentos::getInstance(Conexao::getInstance());
$orcamentos->editar();

$dadosOrcamento = $orcamentos->rsDados(intval($_GET['id']));
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Atualizar Orçamento</title>
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

    <h2>Editar Orçamento</h2>

    <form action="" method="post">
      <!-- area de campos do form -->
      <hr />
      <div class="row">
        <div class="form-group col-md-12">
          <label for="name">Nome</label>
          <input type="text" class="form-control" name="nome" value="<?php echo $dadosOrcamento->nome; ?>">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="campo1">Endereço</label>
          <input type="text" class="form-control" name="endereco" value="<?php echo $dadosOrcamento->endereco; ?>">
        </div>

        <div class="form-group col-md-3">
          <label for="campo2">Cidade</label>
          <input type="text" class="form-control" name="cidade" value="<?php echo $dadosOrcamento->cidade; ?>">
        </div>

        <div class="form-group col-md-3">
          <label for="campo3">Estado</label>
          <input type="text" class="form-control" name="estado" value="<?php echo $dadosOrcamento->estado; ?>">
        </div>


      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="campo2">Telefone</label>
          <input type="text" class="form-control" name="telefone" value="<?php echo $dadosOrcamento->telefone; ?>">
        </div>

        <div class="form-group col-md-6">
          <label for="campo2">Tipo Empreendimento</label>
          <select name="tipo_empreendimento" id="tipo_empreendimento" class="form-control">
            <option value="">SELECIONE</option>
            <option value="Casa" <?php if ($dadosOrcamento->tipo_empreendimento == 'Casa') : echo "selected";
                                  endif; ?>>Casa</option>
            <option value="Condominio" <?php if ($dadosOrcamento->tipo_empreendimento == 'Condominio') : echo "selected";
                                        endif; ?>>Condominio</option>
            <option value="Ed. Comercial" <?php if ($dadosOrcamento->tipo_empreendimento == 'Ed. Comercial') : echo "selected";
                                          endif; ?>>Ed. Comercial</option>
            <option value="Industria" <?php if ($dadosOrcamento->tipo_empreendimento == 'Industria') : echo "selected";
                                      endif; ?>>Industria</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-4">
          <label for="campo2">Consumo Mensal em Kwh</label>
          <input type="text" class="form-control" name="consumo_mensal" value="<?php echo $dadosOrcamento->consumo_mensal; ?>">
        </div>
        <div class="form-group col-md-4">
          <label for="campo2">Valor da Conta R$</label>
          <input type="text" class="form-control" name="valor_da_conta" value="<?php echo number_format($dadosOrcamento->valor_da_conta, 2, ',', '.'); ?>">
        </div>
        <div class="form-group col-md-4">
          <label for="campo2">Tipo de Ligação</label>
          <select name="tipo_ligacao" id="tipo_ligacao" class="form-control">
            <option value="">SELECIONE</option>
            <option value="Monofásica" <?php if ($dadosOrcamento->tipo_ligacao == 'Monofásica') : echo "selected";
                                        endif; ?>>Monofásica</option>
            <option value="Bifásica" <?php if ($dadosOrcamento->tipo_ligacao == 'Bifásica') : echo "selected";
                                      endif; ?>>Bifásica</option>
            <option value="Trifásica" <?php if ($dadosOrcamento->tipo_ligacao == 'Trifásica') : echo "selected";
                                      endif; ?>>Trifásica</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="campo2">Tipo de Local Instalação</label>
          <select name="tipo_local_instalacao" id="tipo_local_instalacao" class="form-control">
            <option value="">SELECIONE</option>
            <option value="Telhado de Fibrocimento" <?php if ($dadosOrcamento->tipo_local_instalacao == 'Telhado de Fibrocimento') : echo "selected";
                                                    endif; ?>>Telhado de Fibrocimento</option>
            <option value="Laje" <?php if ($dadosOrcamento->tipo_local_instalacao == 'Laje') : echo "selected";
                                  endif; ?>>Laje</option>
            <option value="Telhado de Telha de Barro" <?php if ($dadosOrcamento->tipo_local_instalacao == 'Telhado de Telha de Barro') : echo "selected";
                                                      endif; ?>>Telhado de Telha de Barro</option>
            <option value="Outro" <?php if ($dadosOrcamento->tipo_local_instalacao == 'Outro') : echo "selected";
                                  endif; ?>>Outro</option>
          </select>
        </div>

        <div class="form-group col-md-6">
          <label for="campo2">Colaborador</label>
          <select name="id_colaborador" id="id_colaborador" class="form-control">
            <option value="">SELECIONE</option>
            <?php foreach ($dadosColaboradores as $colaborador) : ?>
              <option value="<?php echo $colaborador->id; ?>" <?php if ($dadosOrcamento->id_colaborador == $colaborador->id) : echo "selected";
                                                              endif; ?>><?php echo $colaborador->nome; ?></option>
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
      <input type="hidden" name="acao" value="editarOrcamentos">
      <input type="hidden" name="id" value="<?php echo $dadosOrcamento->id; ?>">
      <input type="hidden" name="data" value="<?php echo $dadosOrcamento->data; ?>">
    </form>

  </main>
  <!--//----FIM DO CONTEUDO---//-->
  <hr>
  <?php include('footer.php'); ?>

</body>
<!--Ultima versão do jquery-->

</html>