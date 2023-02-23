<?php include "header.php"; //print_r($destaque)?>
<!-- main-area -->
<main>

    <!-- banner-area -->
    <section class="tgbanner__area">
        <div class="container">
            <div class="tgbanner__grid">
            
            <div class="tgbanner__post big-post">
                    <div class="tgbanner__thumb tgImage__hover">
                        <a href="#"><img src="img_conteudos/<?php echo $destaque[0]->foto?>" alt="img"></a>
                    </div>
                    <div class="tgbanner__content">
                        <ul class="tgbanner__content-meta list-wrap">
                            <li class="category"><a href="#"><?php echo $destaque[0]->categoria?></a></li>
                            <li><span class="by">Por</span> <a href="#"><?php echo $destaque[0]->autor_da_materia?></a></li>
                            <li><?php echo $destaque[0]->data?></li>
                        </ul>
                        <h2 class="title tgcommon__hover"><a href="blog-details.html"><?php echo $destaque[0]->titulo?></a></h2>
                    </div>
                </div>
                <?php //}?>
                <div class="tgbanner__side-post">
                    <div class="tgbanner__post small-post">
                        <div class="tgbanner__thumb tgImage__hover">
                            <a href="blog-details.html"><img src="assets/img/blog/blog02.jpg" alt="img"></a>
                        </div>
                        <div class="tgbanner__content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">multiverse</a></li>
                            </ul>
                            <h2 class="title tgcommon__hover"><a href="blog-details.html">Together these universes
                                    comprise everything that exists</a></h2>
                        </div>
                    </div>
                    <div class="tgbanner__post small-post">
                        <div class="tgbanner__thumb tgImage__hover">
                            <a href="blog-details.html"><img src="assets/img/blog/blog03.jpg" alt="img"></a>
                        </div>
                        <div class="tgbanner__content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">technology</a></li>
                            </ul>
                            <h2 class="title tgcommon__hover"><a href="blog-details.html">Bubble universes or baby black
                                    hole universes may exist...</a></h2>
                        </div>
                    </div>
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
                            <span class="section__sub-title">Popular Posts</span>
                            <h3 class="section__main-title">Trending News</h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="section__read-more text-start text-sm-end">
                            <a href="blog.html">More Post <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="trending__slider">
                <div class="swiper-container trending-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="trending__post">
                                <div class="trending__post-thumb tgImage__hover">
                                    <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                    <a href="blog-details.html"><img src="assets/img/blog/blog04.jpg" alt="img"></a>
                                    <span class="is_trend"><i class="fas fa-bolt"></i></span>
                                </div>
                                <div class="trending__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">Gaming</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                    </ul>
                                    <h4 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate
                                            that ours might not be held</a></h4>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.0k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 128</a></li>
                                        <li><i class="fal fa-share-alt"></i> 29</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trending__post">
                                <div class="trending__post-thumb tgImage__hover">
                                    <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                    <a href="blog-details.html"><img src="assets/img/blog/blog05.jpg" alt="img"></a>
                                </div>
                                <div class="trending__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">tech</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                    </ul>
                                    <h4 class="title tgcommon__hover"><a href="blog-details.html">The Multiverse is the
                                            collection of alternate universes</a></h4>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.0k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 115</a></li>
                                        <li><i class="fal fa-share-alt"></i> 19</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trending__post">
                                <div class="trending__post-thumb tgImage__hover">
                                    <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                    <a href="blog-details.html"><img src="assets/img/blog/blog06.jpg" alt="img"></a>
                                    <span class="is_trend"><i class="fas fa-bolt"></i></span>
                                </div>
                                <div class="trending__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">movie</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                    </ul>
                                    <h4 class="title tgcommon__hover"><a href="blog-details.html">That share a universal
                                            hierarchy a large variety of these</a></h4>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.2k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 110</a></li>
                                        <li><i class="fal fa-share-alt"></i> 16</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trending__post">
                                <div class="trending__post-thumb tgImage__hover">
                                    <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                    <a href="blog-details.html"><img src="assets/img/blog/blog07.jpg" alt="img"></a>
                                </div>
                                <div class="trending__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">sports</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                    </ul>
                                    <h4 class="title tgcommon__hover"><a href="blog-details.html">Universes were
                                            originated from another due to a major</a></h4>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.5k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                        <li><i class="fal fa-share-alt"></i> 42</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trending__post">
                                <div class="trending__post-thumb tgImage__hover">
                                    <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                    <a href="blog-details.html"><img src="assets/img/blog/blog08.jpg" alt="img"></a>
                                </div>
                                <div class="trending__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">sports</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                    </ul>
                                    <h4 class="title tgcommon__hover"><a href="blog-details.html">A hypothetical
                                            collection of potentially diverse</a></h4>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.5k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                        <li><i class="fal fa-share-alt"></i> 32</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
                    <a href="#"><img src="assets/img/others/advertisement.png" alt="advertisement"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- advertisement-area-end -->

    <!-- stories-post-area -->
    <section class="stories-post-area section__hover-line pt-75 pb-40">
        <div class="container">
            <div class="section__title-wrap mb-40">
                <div class="row align-items-end">
                    <div class="col-sm-6">
                        <div class="section__title">
                            <span class="section__sub-title">Stories</span>
                            <h3 class="section__main-title">Popular Stories</h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="section__read-more text-start text-sm-end">
                            <a href="blog.html">Stories Post <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-gutters-40">
                <div class="col-md-6">
                    <div class="stories-post__item">
                        <div class="stories-post__thumb tgImage__hover">
                            <a href="blog-details.html"><img src="assets/img/blog/blog25.jpg" alt="img"></a>
                        </div>
                        <div class="stories-post__content video__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">technology</a></li>
                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                <li>nov 21, 2022</li>
                            </ul>
                            <h3 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a
                                    hypothetical group of the multiple universes.</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="stories-post__item">
                        <div class="stories-post__thumb tgImage__hover">
                            <a href="blog-details.html"><img src="assets/img/blog/blog26.jpg" alt="img"></a>
                        </div>
                        <div class="stories-post__content video__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">technology</a></li>
                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                <li>nov 22, 2022</li>
                            </ul>
                            <h3 class="title tgcommon__hover"><a href="blog-details.html">Experimentally accessible by a
                                    connection to the multiple communities</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="trending__post stories-small-post__item">
                        <div class="trending__post-thumb tgImage__hover">
                            <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                            <a href="blog-details.html"><img src="assets/img/blog/blog27.jpg" alt="img"></a>
                        </div>
                        <div class="trending__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">Gaming</a></li>
                                <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                            </ul>
                            <h4 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate that ours
                                    might not be held</a></h4>
                            <ul class="post__activity list-wrap">
                                <li><i class="fal fa-signal"></i> 1.5k</li>
                                <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                <li><i class="fal fa-share-alt"></i> 32</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="trending__post stories-small-post__item">
                        <div class="trending__post-thumb tgImage__hover">
                            <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                            <a href="blog-details.html"><img src="assets/img/blog/blog28.jpg" alt="img"></a>
                        </div>
                        <div class="trending__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">tech</a></li>
                                <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                            </ul>
                            <h4 class="title tgcommon__hover"><a href="blog-details.html">The Multiverse is the
                                    collection of alternate universes</a></h4>
                            <ul class="post__activity list-wrap">
                                <li><i class="fal fa-signal"></i> 1.5k</li>
                                <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                <li><i class="fal fa-share-alt"></i> 32</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="trending__post stories-small-post__item">
                        <div class="trending__post-thumb tgImage__hover">
                            <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                            <a href="blog-details.html"><img src="assets/img/blog/blog29.jpg" alt="img"></a>
                        </div>
                        <div class="trending__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">movie</a></li>
                                <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                            </ul>
                            <h4 class="title tgcommon__hover"><a href="blog-details.html">That share a universal
                                    hierarchy a large variety of these</a></h4>
                            <ul class="post__activity list-wrap">
                                <li><i class="fal fa-signal"></i> 1.2k</li>
                                <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                <li><i class="fal fa-share-alt"></i> 26</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="trending__post stories-small-post__item">
                        <div class="trending__post-thumb tgImage__hover">
                            <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                            <a href="blog-details.html"><img src="assets/img/blog/blog30.jpg" alt="img"></a>
                        </div>
                        <div class="trending__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">sports</a></li>
                                <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                            </ul>
                            <h4 class="title tgcommon__hover"><a href="blog-details.html">Universes were originated from
                                    another due to a major</a></h4>
                            <ul class="post__activity list-wrap">
                                <li><i class="fal fa-signal"></i> 1.2k</li>
                                <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                <li><i class="fal fa-share-alt"></i> 26</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- stories-post-area-end -->

    <!-- newsletter-area -->
    <section class="newsletter-area pb-80">
        <div class="container">
            <div class="newsletter__wrap">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="newsletter__title">
                            <span class="sub-title">newsletter</span>
                            <h4 class="title">Get notified of the best deals on our WordPress Themes</h4>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="newsletter__form-wrap">
                            <form action="#" class="newsletter__form">
                                <div class="newsletter__form-grp">
                                    <input type="email" placeholder="Email address" required>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree that my submitted data is being collected and stored.
                                        </label>
                                    </div>
                                </div>
                                <button class="btn" type="submit"><span class="text">Subscribe</span> <i
                                        class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-area-end -->

</main>
<!-- main-area-end -->
<?php include "footer.php";?>