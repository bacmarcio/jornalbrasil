<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/colunistas.class.php');
$colunistas = Colunistas::getInstance(Conexao::getInstance());

$colaborador = $colunistas->rsDados(intval($_GET['id']));
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Visualizar Colunista</title>
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

        <h2>Colunista <?php echo $colaborador->id; ?></h2>
        <hr>

        <dl class="dl-horizontal">
            <dt>Foto:</dt>
            <dd> <img src="../img_conteudos/<?php echo $colaborador->foto; ?>" alt=""></dd>
        </dl>

        <dl class="dl-horizontal">
            <dt>Nome:</dt>
            <dd><?php echo $colaborador->nome; ?></dd>

            <dt>E-mail:</dt>
            <dd><?php echo $colaborador->email; ?></dd>

            <dt>Telefone:</dt>
            <dd><?php echo $colaborador->telefone; ?></dd>

            <dt>Login:</dt>
            <dd><?php echo $colaborador->login; ?></dd>

            <dt>Nome da Coluna:</dt>
            <dd><?php echo $colaborador->assunto; ?></dd>
        </dl>

        <dl class="dl-horizontal">
            <dt>Descrição:</dt>
            <dd><?php echo $colaborador->descricao; ?></dd>
        </dl>


        <div id="actions" class="row">
            <div class="col-md-12">
                <a href="editar-colunista.php?id=<?php echo $colaborador->id; ?>" class="btn btn-primary">Editar</a>
                <a href="colunistas.php" class="btn btn-default">Voltar</a>
            </div>
        </div>
    </main>
    <!--//----FIM DO CONTEUDO---//-->
    <hr>
    <?php include('footer.php'); ?>

</body>
<!--Ultima versão do jquery-->

</html>