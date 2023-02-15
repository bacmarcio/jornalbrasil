<?php
include('../data/acesso.class.php');


//echo "aqui: ".$_SESSION['gerenciadorLogado']; exit;

$acesso = Acesso::getInstance(Conexao::getInstance());
$acesso->restritoGerenciador();

include('../data/noticias.class.php');
$noticias = Noticias::getInstance(Conexao::getInstance());
$noticias->excluir();
$dadosConteudos = $noticias->rsDados('', 'id DESC', '100');


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Notícias</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">

    <!-- Ultima versão do bootstrap CSS, JS & FONT AWESOME -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">

</head>
<style>
    .azm-facebook {
        background: #4862a3;
    }

    .azm-whatsapp {
        background: #59ac23;
    }

    .azm-border-bottom {
        padding-top: 12px;
        border-bottom: 4px solid rgba(0, 0, 0, 0.1);
    }

    .azm-btn {
        height: 48px;
        margin: 8px;
        padding: 13px 17px;
        font-size: 14px;
        line-height: 21px;
        font-weight: 300;
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        border-radius: 4px;
    }

    .azm-social {
        margin: 0;
        padding: 0 15px 0;
        display: inline-block;
        color: #fff;
        text-align: center;
        -moz-border-radius: 0;
        -webkit-border-radius: 0;
        border-radius: 0;
        -o-transition: all .3s;
        -moz-transition: all .3s;
        -webkit-transition: all .3s;
        -ms-transition: all .3s;
        transition: all .3s;
    }

    .azm-btn i {
        padding-right: 6px;
        font-size: 21px;
        line-height: 37px;
        vertical-align: center;
    }

    .azm-twitter {
        background: #55acee;
    }
</style>

<body>
    <?php include('header.php'); ?>

    <!--//----CONTEUDO---//-->
    <main class="container">
        <br><br><br>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
        <header>
            <div class="row">
                <div class="col-sm-2">
                    <h2>Notícias</h2>
                </div>
                <div class="col-sm-2">
                    &nbsp;

                </div>
                <div class="col-sm-2">
                    &nbsp;

                    <!-- <a class="btn btn-primary" href=""><i class="fa fa-plus"></i> Pesquisar</a> -->
                </div>

                <div class="col-sm-6 text-right h2">
                    <a class="btn btn-success" href="categorias.php?id_menu=1"><i class="fa fa-plus"></i> Categoria</a>
                    <a class="btn btn-primary" href="add-noticia.php"><i class="fa fa-plus"></i> Nova Notícia</a>
                    <a class="btn btn-default" href="noticias.php"><i class="fa fa-refresh"></i> Atualizar</a>
                </div>
            </div>
        </header>

        <hr>

        <table class="table table-hover" border="1">
            <thead>
                <tr>
                    <th width="95">ID</th>
                    <th width="100">Foto</th>
                    <th width="296">Titulo</th>
                    <th width="296">Compartilhar</th>

                    <th width="330" class="text-center">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($dadosConteudos) : ?>
                    <?php foreach ($dadosConteudos as $conteudo) : ?>
                        <tr>
                            <td><?php echo $conteudo->id; ?></td>
                            <td> <img src="../img_conteudos/<?php echo $conteudo->foto; ?>" width="100" alt=""></td>
                            <td><?php echo $conteudo->titulo; ?></td>
                            <td>
                                <a class="btn azm-social azm-btn azm-border-bottom azm-facebook" target="_blank" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Frevistabrasilia.com.br%2Fdesc-noticia.php%3Fid%3D<?php echo $conteudo->id; ?>"><i class="fa fa-facebook"></i> </a>
                                <a class="btn azm-social azm-btn azm-border-bottom azm-twitter" target="_blank" href="https://twitter.com/intent/tweet?url=http%3A%2F%2Frevistabrasilia.com.br%2Fdesc-noticia.php%3Fid%3D<?php echo $conteudo->id; ?>"><i class="fa fa-twitter"></i> </a>
                                <a class="btn azm-social azm-btn azm-border-bottom azm-whatsapp" id="by-popup" target="_blank" href="https://api.whatsapp.com/send?text= http://revistabrasilia.com.br/desc-noticia.php?id%3D<?php echo $conteudo->id; ?>"><i class="fa fa-whatsapp"></i> </a>
                            </td>

                            <td class="actions text-right">
                                <a href="view-noticia.php?id=<?php echo $conteudo->id; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
                                <a href="editar-noticia.php?id=<?php echo $conteudo->id; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                                <a href="javascript:;" class="btn btn-sm btn-danger" onclick="if(confirm('Tem certeza que deseja excluir <?php echo preg_replace('~[\r\n]+~', '', $conteudo->titulo); ?>?')) { window.location='noticias.php?acao=excluirNoticias&id=<?php echo $conteudo->id; ?>&foto=<?php echo $conteudo->foto; ?>'; } ">
                                    <i class="fa fa-trash"></i> Excluir
                                </a>
                            </td>
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="6">Nenhum registro encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <?php include('modal.php'); ?>
    </main>
    <!--//----FIM DO CONTEUDO---//-->
    <hr>

    <?php include('footer.php'); ?>

</body>
<!--Ultima versão do jquery-->
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</html>