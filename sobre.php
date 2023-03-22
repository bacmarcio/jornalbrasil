<?php include "includes.php";
$texto = $textos->rsDados(1);
$texto1 = $textos->rsDados(20);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="keywords"
		content="Responsive, HTML5 Template, Jthemes, One Page, Landing, Medical, Health, Healthcare, Doctor, Clinic, Care, Hospital">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="theme-color" content="#171515" />
	<title>
		<?php if(isset($metastags->meta_title_sobre) && !empty($metastags->meta_title_sobre)){echo $metastags->meta_title_sobre;}?>
	</title>
	<meta name="description"
		content="<?php if(isset($metastags->meta_description_sobre) && !empty($metastags->meta_description_sobre)){echo $metastags->meta_description_sobre;}?>" />
	<meta name="keywords"
		content="<?php if(isset($metastags->meta_keywords_sobre) && !empty($metastags->meta_keywords_sobre)){echo $metastags->meta_keywords_sobre;}?>">
	<?php if(isset($infoSistema->favicon) && !empty($infoSistema->favicon)){?>
	<link rel="shortcut icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>">
	<link rel="icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>">
	<?php }?>
	<meta name="author" content="Adriano Monteiro">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">

	<!-- BOOTSTRAP CSS -->
	<link href="<?php echo SITE_URL;?>/css/bootstrap.min.css" rel="stylesheet">

	<!-- FONT ICONS -->
	<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet"
		crossorigin="anonymous">
	<link href="<?php echo SITE_URL;?>/css/flaticon.css" rel="stylesheet">

	<!-- PLUGINS STYLESHEET -->
	<link href="<?php echo SITE_URL;?>/css/menu.css" rel="stylesheet">
	<link id="effect" href="<?php echo SITE_URL;?>/css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
	<link href="<?php echo SITE_URL;?>/css/magnific-popup.css" rel="stylesheet">
	<link href="<?php echo SITE_URL;?>/css/owl.carousel.min.css" rel="stylesheet">
	<link href="<?php echo SITE_URL;?>/css/owl.theme.default.min.css" rel="stylesheet">
	<link href="<?php echo SITE_URL;?>/css/animate.css" rel="stylesheet">
	<link href="<?php echo SITE_URL;?>/css/jquery.datetimepicker.min.css" rel="stylesheet">

	<!-- TEMPLATE CSS -->
	<link href="<?php echo SITE_URL;?>/css/style.css" rel="stylesheet">

	<!-- RESPONSIVE CSS -->
	<link href="<?php echo SITE_URL;?>/css/responsive.css" rel="stylesheet">
	<?php include "inc-tagmanager-head.php";?>
</head>

<body>
	<?php include "inc-tagmanager-body.php";?>

	<div id="page" class="page">

		<?php include "header.php";?>

		<section id="info-4" class="wide-100 info-section division">
			<div class="container">


				<!-- TOP ROW -->
				<div class="top-row mb-80">
					<div class="row d-flex align-items-center">


						<!-- INFO IMAGE -->
						<div class="col-lg-6">
							<div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
								<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $texto->foto;?>"
									alt="<?php echo $texto->titulo;?>">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">
								<span class="section-id blue-color">
									<?php echo $texto->titulo;?>
								</span>
								<h3 class="h3-md steelblue-color">
									<?php echo $texto->titulo2;?>
								</h3>
								<?php echo $texto->texto;?>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom-row">
					<div class="row d-flex align-items-center">
						<div class="col-lg-6">
							<div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">
								<span class="section-id blue-color">
									<?php echo $texto1->titulo;?>
								</span>
								<h3 class="h3-md steelblue-color">
									<?php echo $texto1->titulo2;?>
								</h3>
								<?php echo $texto1->texto;?>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
								<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $texto1->foto;?>"
									alt="<?php echo $texto1->titulo;?>">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php include "footer.php";?>
	</div>
	<script src="<?php echo SITE_URL;?>/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/bootstrap.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/modernizr.custom.js"></script>
	<script src="<?php echo SITE_URL;?>/js/jquery.easing.js"></script>
	<script src="<?php echo SITE_URL;?>/js/jquery.appear.js"></script>
	<script src="<?php echo SITE_URL;?>/js/jquery.stellar.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/menu.js"></script>
	<script src="<?php echo SITE_URL;?>/js/sticky.js"></script>
	<script src="<?php echo SITE_URL;?>/js/jquery.scrollto.js"></script>
	<script src="<?php echo SITE_URL;?>/js/materialize.js"></script>
	<script src="<?php echo SITE_URL;?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/isotope.pkgd.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/hero-form.js"></script>
	<script src="<?php echo SITE_URL;?>/js/contact-form.js"></script>
	<script src="<?php echo SITE_URL;?>/js/comment-form.js"></script>
	<script src="<?php echo SITE_URL;?>/js/appointment-form.js"></script>
	<script src="<?php echo SITE_URL;?>/js/jquery.datetimepicker.full.js"></script>
	<script src="<?php echo SITE_URL;?>/js/jquery.validate.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/wow.js"></script>
	<script src="<?php echo SITE_URL;?>/js/custom.js"></script>
	<script>
		new WOW().init();
	</script>
</body>

</html>