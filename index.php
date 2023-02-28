<?php include "header.php";
?>
<!-- main-area -->
<main>
    <!-- banner-area -->
    <section class="tgbanner__area">
        <div class="container">
            <div class="tgbanner__grid">

                <div class="tgbanner__post big-post">
                    <div class="tgbanner__thumb tgImage__hover">
                        <a href="#"><img src="img_conteudos/<?php echo $destaque[0]->foto ?>" alt="img"></a>
                    </div>
                    <div class="tgbanner__content">
                        <ul class="tgbanner__content-meta list-wrap">
                            
                            <li><span class="by">Por</span> <a href="#"><?php echo $destaque[0]->autor_da_materia ?></a></li>
                            <li><?php echo $destaque[0]->data; ?></li>
                        </ul>
                        <h2 class="title tgcommon__hover"><a href="#"><?php echo $destaque[0]->titulo ?></a></h2>
                    </div>
                </div>

                <div class="tgbanner__side-post">
                    <?php foreach ($principalDireita as $itemDireita) { ?>

                        <div class="tgbanner__post small-post">
                            <div class="tgbanner__thumb tgImage__hover">
                                <a href="#"><img src="img_conteudos/<?php echo $itemDireita->foto ?>" alt="img"></a>
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
                                    <a href="blog-details.html"><img src="img_conteudos/<?php echo $itensPopulares->foto ?></a>
                                    <span class="is_trend"><i class="fas fa-bolt"></i></span>
                                </div>
                                <div class="trending__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="#"><?php echo $itensPopulares->nomeCategoria;?></a></li>
                                        <li><span class="by">Por</span> <a href="#"><?php echo $itensPopulares->autor_da_materia;?></a></li>
                                    </ul>
                                    <h4 class="title tgcommon__hover"><a href="#"><?php echo $itensPopulares->titulo;?></a></h4>
                                    
                                </div>
                            </div>
                        </div>
                        <?php }?>    
                        

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
<?php include "footer.php"; ?>