<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/depoimentos.class.php');
$depoimentos = Depoimentos::getInstance(Conexao::getInstance());

$depoimento = $depoimentos->rsDados(intval($_GET['id']));
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Visualizar Depoimento</title>
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

        <h2>Depoimento <?php echo $conteudo->id; ?></h2>
        <hr>

        <dl class="dl-horizontal">
            <dt>Foto:</dt>
            <dd> <img src="../img_conteudos/<?php echo $depoimento->foto; ?>" width="700" alt=""></dd>
        </dl>

        <dl class="dl-horizontal">
            <dt>Nome:</dt>
            <dd><?php echo $depoimento->nome; ?></dd>
        </dl>

        <dl class="dl-horizontal">
            <dt>Depoimento:</dt>
            <dd><?php echo $depoimento->depoimento; ?></dd>
        </dl>

        <div id="actions" class="row">
            <div class="col-md-12">
                <a href="editar-depoimento.php?id=<?php echo $depoimento->id; ?>" class="btn btn-primary">Editar</a>
                <a href="depoimentos.php" class="btn btn-default">Voltar</a>
            </div>
        </div>
    </main>
    <!--//----FIM DO CONTEUDO---//-->
    <hr>
    <?php include('footer.php'); ?>

</body>
<!--Ultima versão do jquery-->

</html>