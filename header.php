<?php
include "includes.php";

$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: /');
    }else{
        $id = $_GET['id'];        
    }
}

$headerCategoria = $categorias->rsDados();
$destaque = $noticias->rsDados('', '1', '', '', 'S');
$principal = $noticias->rsDados('', '', '', '', '', 'S');
$principalDireita = $noticias->rsDados('', '', 2, '', '', 'S');
$populares = $noticias->populares('','',5);

$descNoticias = $noticias->rsDados($id);

if(isset($descNoticias->id)){
    $catDesc = $categorias->rsDados(1, $descNoticias->categoria);
}
?>

<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jornal Brasil</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="pt_BR" />

    <meta property="og:title" content="Jornal Brasil" />
    <meta property="og:url" content="https://www.jornalbrasil.com.br" />
    <meta property="og:site_name" content="JN" />
    <meta name="Author" content="Agencia Sim" />
    <meta name="description" content="O Jornal Brasil é um título incontornável no panorama da imprensa brasileira. No Jornal Brasil acompanhe as notícias, os vídeos, os áudios e as infografias de toda a atualidade nacional, internacional e local." />
    <meta name="keywords" content="Jornal Brasil,Bolsa,Empresas,Farmácias,Futebol,Internacional,Investir,País,Política,Rss,Tempo,Trânsito,Tv,Videos,Blogues,Opinião,Serviços,Últimas,Nacional,Sociedade,Polícia,Economia,Mundo,Cultura,Tecnologia,Média,Vídeos,Fotos,Áudios,atualidade,fóruns" />
    <meta property="og:description" content="O Jornal Brasil é um título incontornável no panorama da imprensa brasileira. No Jornal Brasil acompanhe as notícias, os vídeos, os áudios e as infografias de toda a atualidade nacional, internacional e local." />
    <link rel="image_src" href="https://www.jornalbrasil.com.br/img/logo.png" />

    <meta property="og:image" content="https://www.jornalbrasil.com.br/img/logo.png" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="500" />
    <meta property="article:author" content="https://www.facebook.com/jornalbrasil/?fref=ts" />


    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Jornal Brasil" />
    <meta name="twitter:creator" content="Jornal Brasil" />
    <meta name="twitter:title" content="Jornal Brasil" />
    <meta name="twitter:description" content="
    <meta property=" og:description" content="O Jornal Brasil é um título incontornável no panorama da imprensa brasileira. No Jornal Brasil acompanhe as notícias, os vídeos, os áudios e as infografias de toda a atualidade nacional, internacional e local." />
    <meta name="twitter:image" content="https://www.jornalbrasil.com.br/img/logo.png" />
    <meta property="fb:pages" content="" />
    <meta name="google" content="notranslate" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

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

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header>
        <div class="header__top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 order-2 order-lg-0">

                    </div>
                    <div class="col-lg-4 col-md-3 order-0 order-lg-2 d-none d-md-block">
                        <div class="header__top-logo logo text-lg-center">
                            <a href="/" class="logo-dark"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                            <a href="/" class="logo-light"><img src="assets/img/logo/w_logo.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-6 order-3 d-none d-sm-block">
                        <div class="header__top-right">
                            <!-- <ul class="list-wrap">
                                <li class="news-btn"><a href="#newsletter" class="btn"><span class="btn-text">subscribe</span></a></li>
                                <li class="lang">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            ENG
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">SPA</a></li>
                                            <li><a class="dropdown-item" href="#">GRE</a></li>
                                            <li><a class="dropdown-item" href="#">CIN</a></li>
                                            <li><a class="dropdown-item" href="#">CIN</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-fixed-height"></div>
        <div id="sticky-header" class="tg-header__area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo d-block d-md-none">
                                    <a href="/" class="logo-dark"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                                    <a href="/" class="logo-light"><img src="assets/img/logo/w_logo.png" alt="Logo"></a>
                                </div>
                                <div class="offcanvas-toggle">
                                    <a href="#"><i class="flaticon-menu-bar"></i></a>
                                </div>
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="active"><a href="/">Home</a>
                                            <!-- <ul class="sub-menu">
                                                <li class="active"><a href="index.html">Home Default</a></li>
                                                <li><a href="index-2.html">Home Interior</a></li>
                                                <li><a href="index-3.html">Home Travel</a></li>
                                                <li><a href="index-4.html">Home Technology</a></li>
                                                <li><a href="index-5.html">Home NFT</a></li>
                                                <li><a href="index-6.html">Home Fashion</a></li>
                                                <li><a href="index-7.html">Home Adventure</a></li>
                                                <li><a href="index-8.html">Home Minimal</a></li>
                                            </ul> -->
                                        </li>
                                        <?php 
                                        
                                            foreach($headerCategoria as $itemHeaderCat) { ?>

                                                <li><a href="#"><?php echo $itemHeaderCat->titulo ?></a></li>

                                            <?php } ?>
                                        
                                        <!-- <li class="menu-item-has-children"><a href="#">Post Type</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Our Blog</a></li>
                                                <li><a href="#">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="nft.html">NFT</a></li> -->
                                    </ul>
                                </div>
                                <div class="tgmenu__action">
                                    <ul class="list-wrap">
                                        <li class="mode-switcher">
                                            <nav class="switcher__tab">
                                                <span class="switcher__btn light-mode"><i class="flaticon-sun"></i></span>
                                                <span class="switcher__mode"></span>
                                                <span class="switcher__btn dark-mode"><i class="flaticon-moon"></i></span>
                                            </nav>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="tgmobile__menu">
                            <nav class="tgmobile__menu-box">
                                <div class="close-btn"><i class="fas fa-times"></i></div>
                                <div class="nav-logo">
                                    <a href="index.html" class="logo-dark"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.html" class="logo-light"><img src="assets/img/logo/w_logo.png" alt="Logo"></a>
                                </div>
                                <div class="tgmobile__search">
                                    <form action="#">
                                        <input type="text" placeholder="Search here...">
                                        <button><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="tgmobile__menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="tgmobile__menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>

        <!-- offCanvas-area -->
        <div class="offCanvas__wrap">
            <div class="offCanvas__body">
                <div class="offCanvas__toggle"><i class="flaticon-addition"></i></div>
                <div class="offCanvas__content">
                    <div class="offCanvas__logo logo">
                        <a href="index.html" class="logo-dark"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                        <a href="index.html" class="logo-light"><img src="assets/img/logo/w_logo.png" alt="Logo"></a>
                    </div>

                </div>
                <div class="offCanvas__contact">
                    <h4 class="title">Entre em Contato</h4>
                    <ul class="offCanvas__contact-list list-wrap">
                        <li><i class="fas fa-envelope-open"></i><a href="mailto:info@webmail.com">redacao@jornalbrasil.com.br</a></li>
                        <li><i class="fas fa-phone"></i><a href="tel:88899988877">(61)555-5555</a></li>

                    </ul>
                    <ul class="offCanvas__social list-wrap">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="offCanvas__overlay"></div>
        <!-- offCanvas-area-end -->

    </header>
    <!-- header-area-end -->