<?php include "includes.php";

$destaque = $blogs->rsDados('', '', '', '', 'S');
$principal = $blogs->rsDados();
$principalDireita = $blogs->rsDados('', '', 2, '', 'S');
$populares = $blogs->populares('', '', 5);

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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/imageRevealHover.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>
    <!-- HEADER ============================================= -->
    <?php include "header.php" ?>
    <!-- END HEADER -->

    <!-- main-area -->
    <main>
        <!-- banner-area -->
        <section class="tgbanner__area">
            <div class="container">
                <div class="tgbanner__grid">

                    <div class="tgbanner__post big-post">
                        <div class="tgbanner__thumb tgImage__hover">
                            <a href="#"><img src="<?php echo SITE_URL ?>/img/<?php echo $destaque[0]->foto ?>" alt="img"></a>
                        </div>
                        <div class="tgbanner__content">
                            <ul class="tgbanner__content-meta list-wrap">

                                <li><span class="by">Por</span> <a href="#"><?php echo $destaque[0]->postado_por ?></a></li>
                                <li><?php echo $destaque[0]->updated_at; ?></li>
                            </ul>
                            <h2 class="title tgcommon__hover"><a href="<?php echo SITE_URL ?>/blog/<?php echo $destaque[0]->url_amigavel ?>"><?php echo $destaque[0]->titulo ?></a><?php echo $destaque[0]->id ?></h2>
                        </div>
                    </div>

                    <div class="tgbanner__side-post">
                        <?php foreach ($principalDireita as $itemDireita) { ?>

                            <div class="tgbanner__post small-post">
                                <div class="tgbanner__thumb tgImage__hover">
                                    <a href="#"><img src="<?php echo SITE_URL ?>/img/<?php echo $itemDireita->foto ?>" alt="img"></a>
                                </div>
                                <div class="tgbanner__content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="#"><?php echo $itemDireita->nomeCategoria ?></a></li>
                                    </ul>
                                    <h2 class="title tgcommon__hover"><a href="#"><?php echo $itemDireita->titulo ?></a></h2>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- trending-area -->
        <section class="trending-post-area section__hover-line pt-25">
            <div class="container">
                <div class="section__title-wrap mb-40">
                    <div class="row align-items-end">
                        <div class="col-sm-6">
                            <div class="section__title">

                                <h3 class="section__main-title">Noticias Populares</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section__read-more text-start text-sm-end">
                                <a href="blog.html">Mais Noticias <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trending__slider">
                    <div class="swiper-container trending-active">
                        <div class="swiper-wrapper">
                            <?php foreach ($populares as $itensPopulares) { ?>

                                <div class="swiper-slide">
                                    <div class="trending__post">
                                        <div class="trending__post-thumb tgImage__hover">
                                            <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                            <a href="#">
                                                <img src="<?php echo SITE_URL ?>/img/<?php echo $itensPopulares->foto ?> ">
                                            </a>
                                            <span class="is_trend"><i class="fas fa-bolt"></i></span>
                                        </div>
                                        <div class="trending__post-content">
                                            <ul class="tgbanner__content-meta list-wrap">
                                                <li class="category"><a href="#"><?php echo $itensPopulares->nomeCategoria; ?></a></li>
                                                <li><span class="by">Por</span> <a href="#"><?php echo $itensPopulares->postado_por; ?></a></li>
                                            </ul>
                                            <h4 class="title tgcommon__hover"><a href="#"><?php echo $itensPopulares->titulo; ?></a><?php echo $itensPopulares->id; ?></h4>

                                        </div>
                                    </div>
                                </div>
                            <?php } ?>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trending-area-end -->

        <!-- advertisement-area -->
        <div class="advertisement pt-45 pb-80">
            <div class="container">
                <div class="col-12">
                    <div class="advertisement__image text-center">

                    </div>
                </div>
            </div>
        </div>
        <!-- advertisement-area-end -->

    </main>
    <!-- main-area-end -->




    <!-- FOOTER-1
			============================================= -->
    <?php include "footer.php" ?>
    <!-- END FOOTER-1 -->




    </div> <!-- END PAGE CONTENT -->

</body>



</html>