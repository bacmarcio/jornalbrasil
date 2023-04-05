<?php $headerCategorias = $categorias->rsDados('', 'RAND()', 6); ?>
<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 108, 'stickySetTop': '-108px', 'stickyChangeLogo': true}">
    <div class="header-body border-color-primary border-top-0 box-shadow-none">
        <div class="header-container container z-index-2">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo header-logo-sticky-change">
                            <a href="index.html">
                                <img class="header-logo-sticky opacity-0" alt="Porto" width="100" height="48" data-sticky-width="89" data-sticky-height="43" data-sticky-top="88" src="img/logo-flat-light.png">
                                <img class="header-logo-non-sticky opacity-0" alt="Porto" width="100" height="48" src="img/logo-default-slim.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row h-100">
                        <ul class="header-extra-info d-flex h-100 align-items-center">
                            <li class="align-items-center h-100 py-4 header-border-right pe-4 d-none d-md-inline-flex">
                                <div class="header-extra-info-text h-100 py-2">
                                    <div class="feature-box feature-box-style-2 align-items-center">
                                        <div class="feature-box-icon">
                                            <i class="far fa-envelope text-7 p-relative"></i>
                                        </div>
                                        <div class="feature-box-info ps-1">
                                            <label>SEND US AN EMAIL</label>
                                            <strong><a href="mailto:mail@example.com">MAIL@EXAMPLE.COM</a></strong>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="align-items-center h-100 py-4">
                                <div class="header-extra-info-text h-100 py-2">
                                    <div class="feature-box feature-box-style-2 align-items-center">
                                        <div class="feature-box-icon">
                                            <i class="fab fa-whatsapp text-7 p-relative"></i>
                                        </div>
                                        <div class="feature-box-info ps-1">
                                            <label>CALL US NOW</label>
                                            <strong><a href="tel:8001234567">800-123-4567</a></strong>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav-bar bg-primary" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'background-color': 'transparent'}" data-sticky-header-style-deactive="{'background-color': '#0088cc'}">
            <div class="container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-colum order-2 order-lg-1">
                                <div class="header-row">
                                    <div class="header-nav header-nav-stripe header-nav-divisor header-nav-force-light-text justify-content-start" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '110px'}" data-sticky-header-style-deactive="{'margin-left': '0'}">
                                        <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                            <nav class="collapse">
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li class="dropdown dropdown-full-color dropdown-light">
                                                        <a class="dropdown-item dropdown-toggle" href="index.html">
                                                            Home
                                                        </a>
                                                    </li>
                                                    <?php foreach ($headerCategorias as $itemCategorias) { ?>

                                                        <li class="dropdown dropdown-full-color dropdown-light dropdown-mega">
                                                            <a class="dropdown-item dropdown-toggle" href="elements.html">
                                                                <?php echo $itemCategorias->nome; ?>
                                                            </a>

                                                        </li>
                                                    <?php } ?>

                                                </ul>
                                            </nav>
                                        </div>
                                        <!-- <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                            <i class="fas fa-bars"></i>
                                        </button> -->
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="header-column order-1 order-lg-2">
                                <div class="header-row justify-content-end">
                                    <div class="header-nav-features header-nav-features-no-border w-75 w-auto-mobile d-none d-sm-flex">
                                        <form role="search" class="d-flex w-100" action="page-search-results.html" method="get">
                                            <div class="simple-search input-group w-100">
                                                <input class="form-control border-0" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                                <button class="btn btn-light" type="submit">
                                                    <i class="fa fa-search header-nav-top-icon"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>