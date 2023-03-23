		<?php $textoRodape = $textos->rsDados(4);?>
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
				</div>
				<div class="footer__copyright">
					<div class="row">
						<div class="col-lg-6">
							<div class="copyright__text">
								<p>Todos os direitos reservados <span>®Jornal Brasil</span> - <?php echo date('Y')?></p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="copyright__menu">
								<ul class="list-wrap">
									<li><a href="#">Contato</a></li>
									<li><a href="#">Politica de Privacidade</a></li>
									<!-- <li><a href="#">Advertise</a></li>
									<li><a href="#">Store</a></li> -->
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
		<?php include "flutuante/flutuante.php"; ?>
		</body>

		</html>
		