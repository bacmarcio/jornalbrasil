<?php include "header.php"?>
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
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
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
                                <li><a href="#"><i class="fas fa-share"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-post-wrapper">
                            <?php foreach ($registros as $registro) { ?>
                              
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="#"><img src="/img_conteudos/<?php echo $registro['foto']?>" alt="<?php //echo $itensGeral->titulo?>"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        
                                        <li class="category"><a href="#"><?php echo $registro['nomeCategoria']?></a></li>
                                       
                                        <li><span class="by">Por</span> <a href="#"><?php echo $registro['autor_da_materia']?></a></li>
                                        <li><?php echo $registro['data']?></li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="#"><?php echo $registro['titulo']?></a></h3>
                                    
                                    
                                    <div class="latest__post-read-more">
                                        <a href="blog-details.html">Saiba Mais  <?php echo $registro['id']?><i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php }?>    
                            <!-- <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/lifestyle/life_style02.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate that our might not connection be held.</a></h3>
                                    <p>In partnership with Sydney startup Trace, Envato is delivering on its sustainability promise as a B-Corp and meeting part of its recent commitment to the To Whom It Should Concern campaign. Envato is now officially carbon commitment, as part of a comprehensive new sustainability.</p>
                                    <div class="latest__post-read-more">
                                        <a href="blog-details.html">Read More <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/lifestyle/life_style03.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">Experimentally a connection to the multiple communities.</a></h3>
                                    <p>In partnership with Sydney startup Trace, Envato is delivering on its sustainability promise as a B-Corp and meeting part of its recent commitment to the To Whom It Should Concern campaign. Envato is now officially carbon commitment, as part of a comprehensive new sustainability.</p>
                                    <div class="latest__post-read-more">
                                        <a href="blog-details.html">Read More <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/lifestyle/life_style04.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical no group of the multiple universes.</a></h3>
                                    <p>In partnership with Sydney startup Trace, Envato is delivering on its sustainability promise as a B-Corp and meeting part of its recent commitment to the To Whom It Should Concern campaign. Envato is now officially carbon commitment, as part of a comprehensive new sustainability.</p>
                                    <div class="latest__post-read-more">
                                        <a href="blog-details.html">Read More <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/lifestyle/life_style05.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">That share universal hierarchy a large variety of sport these.</a></h3>
                                    <p>In partnership with Sydney startup Trace, Envato is delivering on its sustainability promise as a B-Corp and meeting part of its recent commitment to the To Whom It Should Concern campaign. Envato is now officially carbon commitment, as part of a comprehensive new sustainability.</p>
                                    <div class="latest__post-read-more">
                                        <a href="blog-details.html">Read More <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div> -->
                            
                        </div>
                        <?php 
                        $paginacaoDados = $paginacao->getPaginacao();
                        $totalPaginas = $paginacaoDados['totalPaginas']; 
                    ?>

                    <div class="pagination__wrap">
                    <ul class="list-wrap">
                        <?php if ($paginacaoDados['paginaAtual'] > 1) {?>
                            <li><a href="<?php echo '?pagina=' . ($paginacaoDados['paginaAtual'] - 1)?>"><i class="fas fa-angle-double-left"></i></a></li>
                        <?php }?>
                        <?php for ($i = 1; $i <= $totalPaginas; $i++) {?>
                            <li <?php if(isset($_GET['pagina'])&&$_GET['pagina'] == $i){echo "class='active'";}?> ><a href="<?php echo '?pagina= '. $i;?>"><?php echo $i;?></a></li>
                        <?php }?>
                        <?php if ($paginacaoDados['paginaAtual'] < $totalPaginas) {?>
                            <li><a href="<?php echo '?pagina=' . ($paginacaoDados['paginaAtual'] + 1); ?> "><i class="fas fa-angle-double-right"></i></a></li>
                        <?php }?>
                        </ul>
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
    <?php include "footer.php"?>