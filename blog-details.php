<?php include "header.php";?>


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
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Noticias</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $descNoticias->titulo;?></li>
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
                                <li class="category"><a href="#"><?php echo $descNoticias->nomeCategoria;?></a></li>
                                <li><span class="by">Por</span> <a href="#"><?php echo $descNoticias->autor_da_materia;?></a></li>
                                <li><?php echo $descNoticias->data;?></li>
                                <?php if(isset($descNoticias->audio)){?>
                                <li>
                                    <audio controls>
                                    <source src="img_conteudos/<?php echo $descNoticias->audio;?>" type="audio/ogg">
                                    <source src="img_conteudos/<?php echo $descNoticias->audio;?>" type="audio/mpeg">
                                    </audio>
                                </li>
                                <?php }?>
                            </ul>
                            <h2 class="title"><?php echo $descNoticias->titulo;?></h2>
                            <?php if(isset($descNoticias->embed)){
                                $embed = $descNoticias->embed;
                                $embed = substr( $embed, 17);?>
                            <div class="blog-details-thumb">
                            <iframe width="100%" height="415" src="https://www.youtube.com/embed/<?php echo $embed;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <?php }else { ?>
                            <div class="blog-details-thumb">
                                <img src="img_conteudos/<?php echo $descNoticias->foto;?>" alt="<?php echo $descNoticias->desc_foto;?>">
                            </div>
                            <?php }?>
                            <div class="blog-details-content">
                                <p><?php echo $descNoticias->noticia;?></p>
                            </div>
                            <div class="blog-details-bottom">
                                <div class="row align-items-baseline">
                                    <div class="col-xl-6 col-md-7">
                                        <div class="blog-details-tags">
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-5">
                                        <div class="blog-details-share">
                                        <?php if(isset($descNoticias->arquivo_pdf)){?>
                                            <h6 class="share-title">Anexo</h6>
                                            <ul class="list-wrap mb-0">
                                                <li>
                                                <a href="img_conteudos/<?php echo $descNoticias->arquivo_pdf;?>">Arquivo complementar a matéria</a>
                                                </li>
                                            </ul>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <?php $prevId = ($id - 1);
                                  $nextId = ($id + 1);
                                  $pagPrev = $noticias->rsDados($prevId);
                                  $pagNex = $noticias->rsDados($nextId);
                            ?>     
                            <div class="blog-prev-next-posts">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-8 col-md-6">
                                        <div class="pn-post-item">
                                            <div class="thumb">
                                                <a href="blog-details.html">
                                                    <img src="img_conteudos/<?php echo $pagPrev->foto?>" alt="img"></a>
                                            </div>
                                            
                                            <div class="content">
                                                <span>Anterior</span>
                                                <h5 class="title tgcommon__hover"><a href="<?php echo '?id=' . $prevId?>"><?php echo $pagPrev->titulo?></a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-md-6">
                                        <div class="pn-post-item next-post">
                                            <div class="thumb">
                                                <a href="blog-details.html"><img
                                                        src="img_conteudos/<?php echo $pagNex->foto?>" alt="img"></a>
                                            </div>
                                            <div class="content">
                                                <span>Next Post</span>
                                                <h5 class="title tgcommon__hover"><a href="<?php echo '?id=' . ($id + 1)?>"><?php echo $pagNex->titulo?></a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <aside class="blog-sidebar">
                            <div class="widget sidebar-widget widget_categories">
                            <h4 class="widget-title">Categorias</h4>
                                <ul class="list-wrap">
                                <?php foreach ($headerCategoria as $blogCat) {
                                    $geral = $noticias->rsDados('','','',$blogCat->id);
                                    $contador = count($geral);   
                                ?>
                                    
                                    <li>
                                        <div class="thumb"><a href="#"><img src="img_conteudos/<?php echo $blogCat->foto?>" alt="img"></a></div>
                                        <a href="#"><?php echo $blogCat->titulo?></a>
                                        <span class="float-right"><?php echo $contador?></span>
                                    </li>
                                <?php }?>    
                                    
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


    <?php include "footer.php";?>