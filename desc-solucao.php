<?php 
include "includes.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: index.php');
    }else{
        $id = $_GET['id'];
        
    }
}else{
    header('Location: index.php');
}
$descSolucao = $solucoes->rsDados('', '', '', '', '', $id);
$outrosBlog = $blogs->rsDados('', 'rand()', '8');
$outrosTreinamento = $treinamentos->rsDados('', 'rand()', '8');
$outrosSolucao = $solucoes->rsDados('', 'rand()', '8', '', $descSolucao[0]->id);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="keywords" content="Responsive, HTML5 Template, Jthemes, One Page, Landing, Medical, Health, Healthcare, Doctor, Clinic, Care, Hospital">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="<?php if(isset($descSolucao[0]->meta_description) && !empty($descSolucao[0]->meta_description)){echo $descSolucao[0]->meta_description;}?>"/>
		<meta name="keywords" content="<?php if(isset($descSolucao[0]->meta_keywords) && !empty($descSolucao[0]->meta_keywords)){echo $descSolucao[0]->meta_keywords;}?>">	
		<title><?php if(isset($descSolucao[0]->meta_title) && !empty($descSolucao[0]->meta_title)){echo $descSolucao[0]->meta_title;}?></title>
		<meta name="author" content="Adriano Monteiro">
		<?php if(isset($infoSistema->favicon) && !empty($infoSistema->favicon)){?>
		<link rel="shortcut icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>" >
		<link rel="icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>" >
		<?php }?>
		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 	
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet"> 
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="<?php echo SITE_URL;?>/css/bootstrap.min.css" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">		
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
	<style>
	    li{
	        list-style:disc;
	    }
	    body{
	        font-family:font-family:Open Sans,sans-serif!important;
	    }
	</style>
	<body>
		<?php include "inc-tagmanager-body.php";?>
<!-- 
		<div id="loader-wrapper">
			<div id="loader"><div class="loader-inner"></div></div>
		</div>
 -->
		<div id="page" class="page">
	<?php include "header.php";?>
			<div id="single-blog-page" class="wide-100 blog-page-section division">
				<div class="container">
				 	<div class="row">


				 		<!-- SINGLE POST -->
				 		<div class="col-lg-8">
					 		<div class="single-blog-post pr-30">
<?php if(isset($descSolucao[0]->embed) && !empty($descSolucao[0]->embed)){?>
				 			<div class="post-inner-img">
										<div class="embed-responsive embed-responsive-16by9">
							 				<iframe width="950" height="450" src="https://www.youtube.com/embed/<?php echo $descSolucao[0]->embed;?>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
							 			</div>
									</div>
									<?php }else{?>
					 			<!-- BLOG POST IMAGE -->
								 <?php if(isset($descSolucao[0]->foto) && !empty($descSolucao[0]->foto)){?>
					 			<div class="blog-post-img mb-40">
									<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $descSolucao[0]->foto;?>" alt="<?php echo $descSolucao[0]->descricao_imagem;?>" title="<?php echo $descSolucao[0]->legenda_imagem;?>" />		
								</div>	
								<?php }?>
								<?php }?>
				 			
					 			<!-- BLOG POST IMAGE -->
								 

								<!-- BLOG POST TEXT -->
								<div class="sblog-post-txt">

									<!-- Post Title -->
									<h4 class="h4-lg steelblue-color"><?php echo $descSolucao[0]->titulo;?></h4>

									<p class="mt-30"><?php echo $descSolucao[0]->conteudo;?></p>
									<p><a href="<?php echo SITE_URL;?>/solicitar-orcamento" class="btn btn-pink pink-hover submit">Solicitar Orçamento</a> </p>
								</div>	<!-- END BLOG POST TEXT -->

							</div>
				 		</div>	 <!-- END SINGLE POST -->				 		
					<?php include "inc-lateral-solucao.php";?>
				 		
				 	</div>	<!-- End row -->	
				 </div>	 <!-- End container -->
			</div>	<!-- END BLOG PAGE CONTENT -->
<?php include "footer.php";?>
		</div>	<!-- END PAGE CONTENT -->
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
	
		<!-- Custom Script -->		
		<script src="<?php echo SITE_URL;?>/js/custom.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script> 
			new WOW().init();
$(function () {
			$("#pesquisa_lateral").autocomplete({
                    source: '<?php echo SITE_URL;?>/proc_pesq_msg_solucao.php'
                });

                $("#pesquisa_lateral").autocomplete( "instance" )._renderItem = function( ul, item ) {
  return $( "<li class='col-lg-3 col-md-12 col-xs-12 link-list'>" )
    .data("item.autocomplete", item)
    .append( "<div style='font-size:20px; background: #f0f0f0;'><a href='<?php echo SITE_URL;?>/solucao/"+ item.url_amigavel +"'>"+ item.value + "</a></div>")
    .appendTo( ul );
};
            });
		</script>
	</body>
</html>	