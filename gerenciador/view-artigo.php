<?php
include('../data/acesso.class.php');
$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/colunistas.class.php');
$colunistas = Colunistas::getInstance(Conexao::getInstance());

include('../data/artigos.class.php');
$artigos = Artigos::getInstance(Conexao::getInstance());

$conteudo = $artigos->rsDados(intval($_GET['id']));
$colunista = $colunistas->rsDados($conteudo->id_colunista);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Visualizar Artigo</title>
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

        <h2>Artigo <?php echo $conteudo->id; ?></h2>
        <hr>

        <dl class="dl-horizontal">
            <dt>Foto:</dt>
            <dd> <img src="../img_conteudos/<?php echo $conteudo->foto; ?>" width="700" alt=""></dd>
        </dl>

        <dl class="dl-horizontal">
            <dt>Data:</dt>
            <dd><?php echo formataData($conteudo->data); ?></dd>
        </dl>
        <dl class="dl-horizontal">
            <dt>Colunista:</dt>
            <dd><?php echo $colunista->nome; ?></dd>
        </dl>
        <dl class="dl-horizontal">
            <dt>Titulo:</dt>
            <dd><?php echo $conteudo->titulo; ?></dd>
        </dl>

        <dl class="dl-horizontal">
            <dt>Resumo:</dt>
            <dd><?php echo $conteudo->resumo; ?></dd>
        </dl>

        <dl class="dl-horizontal">
            <dt>Descrição:</dt>
            <dd><?php echo $conteudo->artigo; ?></dd>
        </dl>

        <div id="actions" class="row">
            <div class="col-md-12">
                <a href="editar-artigo.php?id=<?php echo $conteudo->id; ?>" class="btn btn-primary">Editar</a>
                <a href="artigos.php" class="btn btn-default">Voltar</a>
            </div>
        </div>
    </main>
    <!--//----FIM DO CONTEUDO---//-->
    <hr>
    <?php include('footer.php'); ?>

</body>
<!--Ultima versão do jquery-->

</html>