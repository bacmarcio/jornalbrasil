<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/banners_colunista.class.php');
$bannersColunistas = BannersColunistas::getInstance(Conexao::getInstance());

$conteudo = $bannersColunistas->rsDados(intval($_GET['id']));
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Visualizar Banner</title>
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

        <h2>Banner <?php echo $conteudo->id; ?></h2>
        <hr>

        <dl class="dl-horizontal">
            <dt>Foto:</dt>
            <dd> <img src="../img_conteudos/<?php echo $conteudo->foto; ?>" width="700" alt=""></dd>
        </dl>

        <dl class="dl-horizontal">
            <dt>Titulo:</dt>
            <dd><?php echo $conteudo->titulo; ?></dd>
        </dl>

        <div id="actions" class="row">
            <div class="col-md-12">
                <a href="editar-banner-colunista.php?id=<?php echo $conteudo->id; ?>" class="btn btn-primary">Editar</a>
                <a href="bannersColunista.php?id_colunista=<?php echo $conteudo->id_colunista; ?>" class="btn btn-default">Voltar</a>
            </div>
        </div>
    </main>
    <!--//----FIM DO CONTEUDO---//-->
    <hr>
    <?php include('footer.php'); ?>

</body>
<!--Ultima versão do jquery-->

</html>