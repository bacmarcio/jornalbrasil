<?php
$headerCategoria = $categorias->rsDados();
date_default_timezone_set('America/Sao_Paulo'); ?>


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
                            <a href="<?php echo SITE_URL; ?>" class="logo-dark"><img src="<?php echo SITE_URL; ?>/assets/img/logo/logo.png" alt="Logo"></a>
                            <a href="<?php echo SITE_URL; ?>" class="logo-light"><img src="<?php echo SITE_URL; ?>/assets/img/logo/w_logo.png" alt="Logo"></a>
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
                                    <a href="<?php echo SITE_URL; ?>" class="logo-dark"><img src="<?php echo SITE_URL; ?>/assets/img/logo/logo.png" alt="Logo"></a>
                                    <a href="<?php echo SITE_URL; ?>" class="logo-light"><img src="<?php echo SITE_URL; ?>/assets/img/logo/w_logo.png" alt="Logo"></a>
                                </div>
                                <div class="offcanvas-toggle">
                                    <a href="#"><i class="flaticon-menu-bar"></i></a>
                                </div>
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="active"><a href="<?php echo SITE_URL; ?>">Home</a>
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

                                        foreach ($headerCategoria as $itemHeaderCat) { ?>

                                            <li><a href="<?php echo SITE_URL; ?>/categoria/<?php echo $itemHeaderCat->url_amigavel ?>"><?php echo $itemHeaderCat->nome ?></a></li>

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
                                    <a href="<?php echo SITE_URL; ?>" class="logo-dark"><img src="<?php echo SITE_URL; ?>/assets/img/logo/logo.png" alt="Logo"></a>
                                    <a href="<?php echo SITE_URL; ?>" class="logo-light"><img src="<?php echo SITE_URL; ?>/assets/img/logo/w_logo.png" alt="Logo"></a>
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
                                    <?php if (isset($infoSistema->facebook) && !empty($infoSistema->facebook)) { ?>
									    <li><a href="<?php echo $infoSistema->facebook; ?>"><i class="fab fa-facebook-f"></i> Facebook </a></li>
									<?php }?>
									<?php if (isset($infoSistema->twitter) && !empty($infoSistema->twitter)) { ?>
									    <li><a href="<?php echo $infoSistema->twitter; ?>"><i class="fab fa-twitter"></i> Twitter </a></li>
									<?php }?>
									<?php if (isset($infoSistema->youtube) && !empty($infoSistema->youtube)) { ?>
									    <li><a href="<?php echo $infoSistema->youtube; ?>"><i class="fab fa-youtube"></i> Youtube </a></li>
									<?php }?>
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
                        <a href="<?php echo SITE_URL; ?>" class="logo-dark"><img src="<?php echo SITE_URL; ?>/assets/img/logo/logo.png" alt="Logo"></a>
                        <a href="<?php echo SITE_URL; ?>" class="logo-light"><img src="<?php echo SITE_URL; ?>/assets/img/logo/w_logo.png" alt="Logo"></a>
                    </div>

                </div>
                <div class="offCanvas__contact">
                    <h4 class="title">Entre em Contato</h4>
                    <ul class="offCanvas__contact-list list-wrap">
                        <li><i class="fas fa-envelope-open"></i><a href="mailto:info@webmail.com">redacao@jornalbrasil.com.br</a></li>
                        <li><i class="fas fa-phone"></i><a href="tel:88899988877">(61)555-5555</a></li>

                    </ul>
                    <ul class="offCanvas__social list-wrap">
                    <?php if (isset($infoSistema->facebook) && !empty($infoSistema->facebook)) { ?>
						<li><a href="<?php echo $infoSistema->facebook; ?>"><i class="fab fa-facebook-f"></i> Facebook </a></li>
					<?php }?>
					<?php if (isset($infoSistema->twitter) && !empty($infoSistema->twitter)) { ?>
						<li><a href="<?php echo $infoSistema->twitter; ?>"><i class="fab fa-twitter"></i> Twitter </a></li>
					<?php }?>
					<?php if (isset($infoSistema->youtube) && !empty($infoSistema->youtube)) { ?>
						<li><a href="<?php echo $infoSistema->youtube; ?>"><i class="fab fa-youtube"></i> Youtube </a></li>
					<?php }?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="offCanvas__overlay"></div>
        <!-- offCanvas-area-end -->

    </header>
    <!-- header-area-end -->