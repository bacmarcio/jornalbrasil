<?php
include "includes.php";
$id = '';
if (isset($_GET['id'])) {
    if (empty($_GET['id'])) {
        header('Location: blog.php');
    } else {
        $id = $_GET['id'];
    }
} else {
    header('Location: blog.php');
}
$descBlog = $blogs->rsDados('', '', '', '', '', '', $id);


//$outrosBlog = $blogs->rsDados('', 'rand()', '8', '', $descBlog[0]->id);
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
                                <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/blog">Noticias</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $descBlog[0]->titulo; ?></li>
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
                    <div class="blog-details-wrap">
                        <ul class="tgbanner__content-meta list-wrap">
                            <li class="category"><a href="">technology</a></li>
                            <li><span class="by">Por</span> <a href="#"><?php echo $descBlog[0]->postado_por; ?></a></li>
                            <li><?php echo $descBlog[0]->updated_at; ?></li>

                        </ul>
                        <h2 class="title"><?php echo $descBlog[0]->titulo; ?></h2>
                        <div class="blog-details-thumb">
                            <img src="<?php echo SITE_URL; ?>/img/<?php echo $descBlog[0]->foto; ?>" alt="<?php echo $descBlog[0]->legenda_foto; ?>">
                        </div>
                        <div class="blog-details-content">
                            <?php echo $descBlog[0]->conteudo; ?>
                        </div>
                        <div class="blog-details-bottom">
                            <div class="row align-items-baseline">
                                <div class="col-xl-6 col-md-7">
                                    <div class="blog-details-tags">
                                        <ul class="list-wrap mb-0">
                                            <li><a href="#">technology</a></li>
                                            <li><a href="#">finance</a></li>
                                            <li><a href="#">business</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-5">
                                    <div class="blog-details-share">
                                        <h6 class="share-title">Share Now:</h6>
                                        <ul class="list-wrap mb-0">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-prev-next-posts">
                            <div class="row">
                                <div class="col-xl-6 col-lg-8 col-md-6">
                                    <div class="pn-post-item">
                                        <div class="thumb">
                                            <a href="blog-details.html"><img src="assets/img/lifestyle/life_style06.jpg" alt="img"></a>
                                        </div>
                                        <div class="content">
                                            <span>Prev Post</span>
                                            <h5 class="title tgcommon__hover"><a href="blog-details.html">3 Stocks to Buy and Hold Through the Panic...</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-md-6">
                                    <div class="pn-post-item next-post">
                                        <div class="thumb">
                                            <a href="blog-details.html"><img src="assets/img/lifestyle/life_style07.jpg" alt="img"></a>
                                        </div>
                                        <div class="content">
                                            <span>Next Post</span>
                                            <h5 class="title tgcommon__hover"><a href="blog-details.html">Mood Boards for Product Designers dome...</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <aside class="blog-sidebar">
                        <div class="widget sidebar-widget">

                        </div>
                        <div class="widget sidebar-widget widget_categories">
                            <h4 class="widget-title">Categorias</h4>
                            <ul class="list-wrap">
                                <?php foreach ($headerCategoria as $cat) {
                                    $count = $blogs->rsDados('', '', '', '', '', $cat->id);
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



<!-- JS here -->
<script src="<?php echo SITE_URL; ?>/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/isotope.pkgd.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/jquery.marquee.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/imageRevealHover.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/swiper-bundle.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/TweenMax.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/slick.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/ajax-form.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/wow.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/main.js"></script>
</body>

</html>