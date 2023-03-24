<?php
include "includes.php";

// $pagina = '';

// if (isset($_GET['pagina'])) {
//     if (empty($_GET['pagina'])) {
//         header('Location:' . SITE_URL);
//     } else {
//         $pagina = $_GET['pagina'];
//     }
// } else {
//     header('Location:' . SITE_URL . '/blog');
// }

$puxaBlogs = $blogs->rsDados();

$outrosBlog = $blogs->rsDados('', 'rand()', '8');

// $puxaPagina = $paginacao->cria_itens(3, $pagina, count($puxaBlogs), SITE_URL);
// list($dados, $html_paginacao) = $paginacao->calcular_paginas();
// Exibir os dados e o HTML da paginação

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="description" content="<?php if (isset($metastags->meta_description_principal) && !empty($metastags->meta_description_principal)) {
                                            echo $metastags->meta_description_principal;
                                        } ?>" />
    <meta name="keywords" content="<?php if (isset($metastags->meta_keywords_principal) && !empty($metastags->meta_keywords_principal)) {
                                        echo $metastags->meta_keywords_principal;
                                    } ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- SITE TITLE -->
    <title>
        <?php if (isset($metastags->meta_title_principal) && !empty($metastags->meta_title_principal)) {
            echo $metastags->meta_title_principal;
        } ?>
    </title>
    <!-- FAVICON AND TOUCH ICONS  -->
    <?php if (isset($infoSistema->favicon) && !empty($infoSistema->favicon)) { ?>
        <link rel="shortcut icon" href="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>">
        <link rel="icon" href="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>">
    <?php } ?>
    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/imageRevealHover.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/spacing.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/main.css">

</head>

<!-- HEADER ============================================= -->
<?php include "header.php" ?>
<!-- END HEADER -->

<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Noticias</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- blog-details-area -->
    <section class="blog-details-area pt-80 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-1">
                    <div class="blog-details-social">
                        <ul class="list-wrap">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fas fa-share"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-post-wrapper">
                        <?php foreach ($puxaBlogs as $itemBlog) { ?>
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="<?php echo SITE_URL; ?>/img/<?php echo $itemBlog->foto; ?>" alt="<?php echo $itemBlog->legenda_imagem; ?>"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="<?php echo SITE_URL; ?>/categoria/"><?php echo $itemBlog->nomeCategoria; ?></a></li>
                                        <li><span class="by">By</span> <a href="blog.html"><?php echo $itemBlog->postado_por; ?></a></li>
                                        <li><?php echo $itemBlog->updated_at; ?></li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="<?php echo SITE_URL; ?>/blog/<?php echo $itemBlog->url_amigavel; ?>"><?php echo $itemBlog->titulo; ?></a></h3>

                                    <div class="latest__post-read-more">
                                        <a href="blog-details.html">Saiba Mais <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <aside class="blog-sidebar">

                        <div class="widget sidebar-widget widget_categories">
                            <h4 class="widget-title">Categorias</h4>
                            <ul class="list-wrap">
                                <?php foreach ($headerCategoria as $cat) {
                                    $count = $blogs->rsDados('', '', '', '', '', $puxaBlogs[0]->id_categoria);
                                    $contador = count($count);
                                ?>

                                    <li>
                                        <a href="<?php echo SITE_URL; ?>/categoria/<?php echo $cat->url_amigavel; ?>"> <?php echo $cat->nome; ?></a>
                                        <span class="float-right"><?php echo $contador; ?></span>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="widget sidebar-widget">
                            <div class="sidePost-active">

                            </div>
                        </div>
                        <div class="widget sidebar-widget">

                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->
</main>
<!-- main-area-end -->


<?php include "footer.php" ?>