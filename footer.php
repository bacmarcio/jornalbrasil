		<?php $textoRodape = $textos->rsDados(4); ?>
		<footer class="footer-area black-bg">
			<div class="container">
				<div class="footer__logo-wrap">
					<div class="row align-items-center">
						<div class="col-lg-3 col-md-4">
							<div class="footer__logo logo">
								<a href="index.html"><img src="assets/img/logo/w_logo.png" alt="Logo"></a>
							</div>
						</div>
						<div class="col-lg-9 col-md-8">
							<div class="footer__social">
								<ul class="list-wrap">
									<li><a href="#"><i class="fab fa-facebook-f"></i> Facebook <span>25K</span></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i> Twitter <span>44K</span></a></li>
									<li><a href="#"><i class="fab fa-youtube"></i> Youtube <span>91K</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="footer__copyright">
					<div class="row">
						<div class="col-lg-6">
							<div class="copyright__text">
								<p>Copyright & Design By <span>@Theme_Genix</span> - 2022</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="copyright__menu">
								<ul class="list-wrap">
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Terms of Use</a></li>
									<li><a href="#">Advertise</a></li>
									<li><a href="#">Store</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer-area-end -->



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


		<!-- <footer id="footer-1" class="bg-image pt-20 pb-20 footer division">
			<div class="container">
				
				<div class="row">
					
					<div class="col-md-6 col-lg-4 mt-20">
						<div class="footer-info mb-10">
							<img src="<?php echo SITE_URL; ?>/images/logo3.png" alt="footer-logo" />

							
							<p class="p-sm mt-20">
								<?php echo $textoRodape->texto; ?>
							</p>

							
							<div class="footer-socials-links mt-10">
								<ul class="foo-socials text-center clearfix">
									<?php if (isset($infoSistema->instagram) && !empty($infoSistema->instagram)) { ?>
                                    <li><a href="<?php echo $infoSistema->instagram; ?>" target="_blank" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>	
                                    <?php } ?>
                                    <?php if (isset($infoSistema->youtube) && !empty($infoSistema->youtube)) { ?>
                                    <li><a href="<?php echo $infoSistema->youtube; ?>" target="_blank" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>	
                                    <?php } ?>
                                    <?php if (isset($infoSistema->twitter) && !empty($infoSistema->twitter)) { ?>
                                    <li><a href="<?php echo $infoSistema->twitter; ?>" target="_blank" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>
                                    <?php } ?>
                                    <?php if (isset($infoSistema->facebook) && !empty($infoSistema->facebook)) { ?>
                                    <li><a href="<?php echo $infoSistema->facebook; ?>" target="_blank" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <?php } ?>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mt-90 d-none d-sm-block">
					
						<div class="footer-box mb-10 mtn-4">
							
							<h5 class="h5-xs">Nossa Localização</h5>

							
							<p><?php echo $infoSistema->endereco; ?></p>
							<p>CEP: <?php echo $infoSistema->cep_loja; ?></p>

							
							<p class="foo-email mt-20">
							    <a href="mailto:<?php echo $infoSistema->email1; ?>"><?php echo $infoSistema->email1; ?></a>
							</p>
							
							<p><?php echo $infoSistema->telefone1; ?></p>
							<p><?php echo $infoSistema->telefone2; ?></p>
						</div>
					</div>

					
					<div class="col-md-6 col-lg-4 mt-90 d-none d-sm-block">
					
						<div class="footer-box mb-10 mtn-4">
							
							<h5 class="h5-xs">Menu</h5>

							
							<p class="p-sm"><a href="<?php echo SITE_URL; ?>/."><span>Home</span></a></p>
                            <p class="p-sm"><a href="<?php echo SITE_URL; ?>/sobre"><span>Quem Somos</span></a></p>
                            <p class="p-sm"><a href="<?php echo SITE_URL; ?>/simulador"><span>Simulador</span></a></p>
							<p class="p-sm"><a href="<?php echo SITE_URL; ?>/blog"><span>Blog</span></a></p>
                            <p class="p-sm"><a href="<?php echo SITE_URL; ?>/contato"><span>Contato</span></a></p>
						</div>
					</div>

				</div>
				
				<div class="bottom-footer">
					<div class="row">
						<div class="col-md-12">
							<p class="footer-copyright">
								&copy;  2009-<?php echo date('Y'); ?> Feito com <i class="fa fa-heart" style="color: red;"></i> por <span><a href="http://hoogli.com.br/" target="_blank"><img src="<?php echo SITE_URL; ?>/images/hoogli_logo.svg" alt="Hoogli-Marketing-Digital-Brasilia-(61)-3436-1999" style="margin-top: 3px; width:60px;"></a></span>. Todos os direitos reservados.
							</p>
						</div>
					</div>
				</div>
			</div>
			
		</footer> -->
		<?php include "flutuante/flutuante.php"; ?>