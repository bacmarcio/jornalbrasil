<?php include "includes.php";

$destaque = $blogs->rsDados('', '', '', '', 'S');
$principal = $blogs->rsDados();
$principalDireita = $blogs->rsDados('', 'id desc', '3', 'S');
$popular = $blogs->noticiasPopulares('', 'id DESC', '5');
$puxaCategorias = $categorias->rsDados('', 'RAND()', '3');


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		<?php if (isset($metastags->meta_title_principal) && !empty($metastags->meta_title_principal)) {
			echo $metastags->meta_title_principal;
		} ?>
	</title>

	<meta name="keywords" content="<?php if (isset($metastags->meta_keywords_principal) && !empty($metastags->meta_keywords_principal)) {
										echo $metastags->meta_keywords_principal;
									} ?>" />

	<meta name="description" content="<?php if (isset($metastags->meta_description_principal) && !empty($metastags->meta_description_principal)) {
											echo $metastags->meta_description_principal;
										} ?>">
	<meta name="author" content="Agência SIM">

	<!-- Favicon -->
	<?php if (isset($infoSistema->favicon) && !empty($infoSistema->favicon)) { ?>
		<link rel="shortcut icon" href="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>">
	<?php } ?>
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no, user-scalable=no">

	<!-- Web Fonts  -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/theme-blog.css">
	<link rel="stylesheet" href="css/theme-shop.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Head Libs -->
	<script src="vendor/modernizr/modernizr.min.js"></script>
	<?php include "inc-tagmanager-head.php" ?>
</head>
<?php include "inc-tagmanager-body.php" ?>

<body data-plugin-page-transition>

	<div class="body">

		<?php include "header.php" ?>
		<div role="main" class="main pt-3 mt-3">
			<div class="container">
				<div class="row pb-1">

					<div class="col-lg-7 mb-4 pb-2">
						<a href="#">
							<article class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
								<div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
									<img src="<?php echo SITE_URL ?>/img/<?php if (isset($destaque[0]->foto) && !empty($destaque[0]->foto)) {
																				echo $destaque[0]->foto;
																			} ?>" class="img-fluid" alt="How To Take Better Concert Pictures in 30 Seconds">
									<div class="thumb-info-title bg-transparent p-4">
										<div class="thumb-info-type bg-color-dark px-2 mb-1">
											<?php if (isset($destaque[0]->nomeCategoria) && !empty($destaque[0]->nomeCategoria)) {
												echo $destaque[0]->nomeCategoria;
											} ?>
										</div>
										<div class="thumb-info-inner mt-1">
											<h2 class="font-weight-bold text-color-light line-height-2 text-5 mb-0">
												<?php if (isset($destaque[0]->titulo) && !empty($destaque[0]->titulo)) {
													echo $destaque[0]->titulo;
												} ?>
											</h2>
										</div>
										<div class="thumb-info-show-more-content">
											<p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">
												<?php if (isset($destaque[0]->breve) && !empty($destaque[0]->breve)) {
													echo $destaque[0]->breve;
												} ?>
											</p>
										</div>
									</div>
								</div>
							</article>
						</a>
					</div>

					<div class="col-lg-5">
						<?php foreach ($principalDireita as $itemDireita) { ?>
							<article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
								<div class="row align-items-center pb-1">
									<div class="col-sm-5">
										<a href="blog-post.html">
											<img src="<?php echo SITE_URL ?>/img/<?php if (isset($itemDireita->foto) && !empty($itemDireita->foto)) {
																						echo $itemDireita->foto;
																					} ?>" class="img-fluid border-radius-0" alt="<?php if (isset($itemDireita->titulo) && !empty($itemDireita->titulo)) {
																																		echo $itemDireita->titulo;
																																	} ?>">
										</a>
									</div>
									<div class="col-sm-7 ps-sm-1">
										<div class="thumb-info-caption-text">
											<div class="thumb-info-type text-light text-uppercase d-inline-block bg-color-dark px-2 m-0 mb-1 float-none">
												<a href="blog-post.html" class="text-decoration-none text-color-light">
													<?php if (isset($itemDireita->nomeCategoria) && !empty($itemDireita->nomeCategoria)) {
														echo $itemDireita->nomeCategoria;
													} ?>
												</a>
											</div>
											<h2 class="d-block line-height-2 text-4 text-dark font-weight-bold mt-1 mb-0">
												<a href="<?php echo SITE_URL ?>/blog/<?php if (isset($itemDireita->url_amigavel) && !empty($itemDireita->url_amigavel)) {
																							echo $itemDireita->url_amigavel;
																						} ?>" class="text-decoration-none text-color-dark text-color-hover-primary">
													<?php if (isset($itemDireita->titulo) && !empty($itemDireita->titulo)) {
														echo $itemDireita->titulo;
													} ?>
												</a>
											</h2>
										</div>
									</div>
								</div>
							<?php } ?>
							</article>



					</div>
				</div>
				<div class="row pb-1 pt-2">

					<div class="col-md-9">
						<?php foreach ($puxaCategorias as $itenCategoria) {
							$catDestaque = $blogs->rsDados('', '', '', '', '', 'S', $itenCategoria->id);
							$catPrincipalDireita = $blogs->rsDados('', '', '', 'S', '', '', $itenCategoria->id);

						?>

							<div class="heading heading-border heading-middle-border">
								<h3 class="text-4"><strong class="font-weight-bold text-1 px-3 text-light py-2 bg-secondary">
										<?php echo $itenCategoria->nome ?>
									</strong>
								</h3>
							</div>

							<div class="row pb-1">

								<div class="col-lg-6 mb-4 pb-1">
									<article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-2 mb-2">
										<div class="row">
											<div class="col">
												<a href="blog-post.html">
													<img src="<?php echo SITE_URL ?>/img/<?php if (isset($catDestaque[0]->foto) && !empty($catDestaque[0]->foto)) {
																								echo $catDestaque[0]->foto;
																							} ?>" class="img-fluid border-radius-0" alt="<?php if (isset($catDestaque[0]->titulo) && !empty($catDestaque[0]->titulo)) {
																																				echo $catDestaque[0]->titulo;
																																			} ?>">
												</a>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<div class="thumb-info-caption-text">
													<div class="d-inline-block text-default text-1 mt-2 float-none">
														<!-- <a href="blog-post.html" class="text-decoration-none text-color-default">January 12,
												2020</a> -->
													</div>
													<h4 class="d-block line-height-2 text-4 text-dark font-weight-bold mb-0">
														<a href="blog-post.html" class="text-decoration-none text-color-dark text-color-hover-primary">
															<?php if (isset($catDestaque[0]->titulo) && !empty($catDestaque[0]->titulo)) {
																echo $catDestaque[0]->titulo;
															} ?>
														</a>
													</h4>
												</div>
											</div>
										</div>
									</article>
								</div>


								<div class="col-lg-6">
									<?php foreach ($catPrincipalDireita as $itemCatDireita) { ?>
										<article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
											<div class="row align-items-center pb-1">
												<div class="col-sm-4">
													<a href="blog-post.html">
														<img src="<?php echo SITE_URL ?>/img/<?php if (isset($itemCatDireita->foto) && !empty($itemCatDireita->foto)) {
																									echo $itemCatDireita->foto;
																								} ?>" class="img-fluid border-radius-0" alt="<?php if (isset($itemCatDireita->titulo) && !empty($itemCatDireita->titulo)) {
																																					echo $itemCatDireita->titulo;
																																				} ?>">
													</a>
												</div>
												<div class="col-sm-8 ps-sm-0">
													<div class="thumb-info-caption-text">
														<div class="d-inline-block text-default text-1 float-none">
															<!-- <a href="blog-post.html" class="text-decoration-none text-color-default">January 12,
													2020</a> -->
														</div>
														<h4 class="d-block pb-2 line-height-2 text-3 text-dark font-weight-bold mb-0">
															<a href="blog-post.html" class="text-decoration-none text-color-dark text-color-hover-primary">
																<?php if (isset($itemCatDireita->titulo) && !empty($itemCatDireita->titulo)) {
																	echo $itemCatDireita->titulo;
																} ?>
															</a>
														</h4>
													</div>
												</div>
											</div>
										<?php } ?>
										</article>
								</div>
							</div>
						<?php } ?>


						<div class="row pb-1 pt-3">
							<div class="col-md-6">

								<h3 class="font-weight-bold text-3 mb-0">Popular Posts</h3>

								<ul class="simple-post-list">
									<?php foreach ($popular as $itensPopulares) { ?>
										<li>
											<article>
												<div class="post-image">
													<div class="img-thumbnail img-thumbnail-no-borders d-block">
														<a href="blog-post.html">
															<img src="<?php echo SITE_URL ?>/img/<?php if (isset($itensPopulares->foto) && !empty($itensPopulares->foto)) {
																										echo $itensPopulares->foto;
																									} ?>" class="border-radius-0" width="50" height="50" alt="<?php if (isset($itensPopulares->titulo) && !empty($itensPopulares->titulo)) {
																																									echo $itensPopulares->titulo;
																																								} ?>">
														</a>
													</div>
												</div>
												<div class="post-info">
													<div class="post-meta">
														January 12, 2020
													</div>
													<h4 class="font-weight-normal text-3 mb-0"><a href="blog-post.html" class="text-dark">
															<?php if (isset($itensPopulares->titulo) && !empty($itensPopulares->titulo)) {
																echo $itensPopulares->titulo;
															} ?>
														</a></h4>
												</div>
											</article>
										</li>
									<?php } ?>


								</ul>

							</div>
							<div class="col-md-6">

								<h3 class="font-weight-bold text-3 mb-0 mt-4 mt-md-0">Recent Posts</h3>

								<ul class="simple-post-list">

									<li>
										<article>
											<div class="post-image">
												<div class="img-thumbnail img-thumbnail-no-borders d-block">
													<a href="blog-post.html">
														<img src="img/blog/square/blog-64.jpg" class="border-radius-0" width="50" height="50" alt="Explained: How does VR actually work?">
													</a>
												</div>
											</div>
											<div class="post-info">
												<div class="post-meta">
													January 12, 2020
												</div>
												<h4 class="font-weight-normal text-3 mb-0"><a href="blog-post.html" class="text-dark">Explained: How does VR actually work?</a></h4>
											</div>
										</article>
									</li>

									<li>
										<article>
											<div class="post-image">
												<div class="img-thumbnail img-thumbnail-no-borders d-block">
													<a href="blog-post.html">
														<img src="img/blog/square/blog-65.jpg" class="border-radius-0" width="50" height="50" alt="Main Reasons To Stop Texting And Driving">
													</a>
												</div>
											</div>
											<div class="post-info">
												<div class="post-meta">
													January 12, 2020
												</div>
												<h4 class="font-weight-normal text-3 mb-0"><a href="blog-post.html" class="text-dark">Main Reasons To Stop Texting And Driving</a>
												</h4>
											</div>
										</article>
									</li>

									<li>
										<article>
											<div class="post-image">
												<div class="img-thumbnail img-thumbnail-no-borders d-block">
													<a href="blog-post.html">
														<img src="img/blog/square/blog-66.jpg" class="border-radius-0" width="50" height="50" alt="Tips to Help You Quickly Prepare your Lunch">
													</a>
												</div>
											</div>
											<div class="post-info">
												<div class="post-meta">
													January 12, 2020
												</div>
												<h4 class="font-weight-normal text-3 mb-0"><a href="blog-post.html" class="text-dark">Tips to Help You Quickly Prepare your
														Lunch</a></h4>
											</div>
										</article>
									</li>

									<li>
										<article>
											<div class="post-image">
												<div class="img-thumbnail img-thumbnail-no-borders d-block">
													<a href="blog-post.html">
														<img src="img/blog/square/blog-67.jpg" class="border-radius-0" width="50" height="50" alt="Why should I buy a smartwatch?">
													</a>
												</div>
											</div>
											<div class="post-info">
												<div class="post-meta">
													January 12, 2020
												</div>
												<h4 class="font-weight-normal text-3 mb-0"><a href="blog-post.html" class="text-dark">Why should I buy a smartwatch?</a></h4>
											</div>
										</article>
									</li>

									<li>
										<article>
											<div class="post-image">
												<div class="img-thumbnail img-thumbnail-no-borders d-block">
													<a href="blog-post.html">
														<img src="img/blog/square/blog-68.jpg" class="border-radius-0" width="50" height="50" alt="The best augmented reality smartglasses">
													</a>
												</div>
											</div>
											<div class="post-info">
												<div class="post-meta">
													January 12, 2020
												</div>
												<h4 class="font-weight-normal text-3 mb-0"><a href="blog-post.html" class="text-dark">The best augmented reality smartglasses</a>
												</h4>
											</div>
										</article>
									</li>

									<li>
										<article>
											<div class="post-image">
												<div class="img-thumbnail img-thumbnail-no-borders d-block">
													<a href="blog-post.html">
														<img src="img/blog/square/blog-69.jpg" class="border-radius-0" width="50" height="50" alt="12 Healthiest Foods to Eat for Breakfast">
													</a>
												</div>
											</div>
											<div class="post-info">
												<div class="post-meta">
													January 12, 2020
												</div>
												<h4 class="font-weight-normal text-3 mb-0"><a href="blog-post.html" class="text-dark">12 Healthiest Foods to Eat for Breakfast</a>
												</h4>
											</div>
										</article>
									</li>

								</ul>

							</div>
						</div>

					</div>

					<div class="col-md-3">

						<h3 class="font-weight-bold text-3 pt-1">Featured Posts</h3>

						<div class="pb-2">

							<div class="mb-4 pb-2">
								<article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-2 mb-2">
									<div class="row">
										<div class="col">
											<a href="blog-post.html">
												<img src="img/blog/default/blog-65.jpg" class="img-fluid border-radius-0" alt="Main Reasons To Stop Texting And Driving">
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="thumb-info-caption-text">
												<div class="d-inline-block text-default text-1 mt-2 float-none">
													<a href="blog-post.html" class="text-decoration-none text-color-default">January 12,
														2020</a>
												</div>
												<h4 class="d-block line-height-2 text-4 text-dark font-weight-bold mb-0">
													<a href="blog-post.html" class="text-decoration-none text-color-dark text-color-hover-primary">Main
														Reasons To Stop Texting And Driving</a>
												</h4>
											</div>
										</div>
									</div>
								</article>
							</div>

							<div class="mb-4 pb-2">
								<article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-2 mb-2">
									<div class="row">
										<div class="col">
											<a href="blog-post.html">
												<img src="img/blog/default/blog-66.jpg" class="img-fluid border-radius-0" alt="Tips to Help You Quickly Prepare your Lunch">
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="thumb-info-caption-text">
												<div class="d-inline-block text-default text-1 mt-2 float-none">
													<a href="blog-post.html" class="text-decoration-none text-color-default">January 12,
														2020</a>
												</div>
												<h4 class="d-block line-height-2 text-4 text-dark font-weight-bold mb-0">
													<a href="blog-post.html" class="text-decoration-none text-color-dark text-color-hover-primary">Tips
														to Help You Quickly Prepare your Lunch</a>
												</h4>
											</div>
										</div>
									</div>
								</article>
							</div>

						</div>

						<aside class="sidebar pb-4">
							<!-- <h5 class="font-weight-semi-bold">Latest from Twitter</h5>
							<div id="tweet" class="twitter mb-4" data-plugin-tweets
								data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
								<p>Please wait...</p>
							</div> -->
							<!-- <h5 class="font-weight-semi-bold pt-4">Photos from Instagram</h5>
							<div class="instagram-feed" data-type="nomargins" class="mb-4 pb-1"></div> -->
							<h5 class="font-weight-semi-bold pt-4 mb-2">Tags</h5>
							<div class="mb-3 pb-1">
								<a href="#"><span class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">design</span></a>
								<a href="#"><span class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">brands</span></a>
								<a href="#"><span class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">video</span></a>
								<a href="#"><span class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">business</span></a>
								<a href="#"><span class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">travel</span></a>
							</div>
							<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="my-4 pt-3 d-block">
								<img alt="Porto" class="img-fluid" src="img/blog/blog-ad-1-medium.jpg" />
							</a>
							<!-- <h5 class="font-weight-semi-bold pt-4">Find us on Facebook</h5>
							<div class="fb-page" data-href="https://www.facebook.com/OklerThemes/"
								data-small-header="true" data-adapt-container-width="true" data-hide-cover="true"
								data-show-facepile="true">
								<blockquote cite="https://www.facebook.com/OklerThemes/" class="fb-xfbml-parse-ignore">
									<a href="https://www.facebook.com/OklerThemes/">Okler Themes</a>
								</blockquote>
							</div> -->
						</aside>

						<!-- <h5 class="font-weight-semi-bold pt-1">Recent Comments</h5>

						<ul class="list-unstyled mb-4 pb-1 pt-2">

							<li class="pb-3 text-2">
								<a href="#" rel="external nofollow" class="font-weight-bold text-dark">John Doe</a> on
								<a href="blog-post.html" class="text-dark">Main Reasons To Stop Texting And Driving</a>
							</li>

							<li class="pb-3 text-2">
								<a href="#" rel="external nofollow" class="font-weight-bold text-dark">John Doe</a> on
								<a href="blog-post.html" class="text-dark">Tips to Help You Quickly Prepare your
									Lunch</a>
							</li>

							<li class="pb-3 text-2">
								<a href="#" rel="external nofollow" class="font-weight-bold text-dark">John Doe</a> on
								<a href="blog-post.html" class="text-dark">Why should I buy a smartwatch?</a>
							</li>

							<li class="pb-3 text-2">
								<a href="#" rel="external nofollow" class="font-weight-bold text-dark">John Doe</a> on
								<a href="blog-post.html" class="text-dark">The best augmented reality smartglasses</a>
							</li>

							<li class="pb-3 text-2">
								<a href="#" rel="external nofollow" class="font-weight-bold text-dark">John Doe</a> on
								<a href="blog-post.html" class="text-dark">12 Healthiest Foods to Eat for Breakfast</a>
							</li>

						</ul> -->

					</div>

				</div>
			</div>

		</div>

		<?php include "footer.php" ?>