

				 		<!-- SIDEBAR -->
						<aside id="sidebar" class="col-lg-4">


							<!-- SEARCH FIELD --> 
							

							<!-- <div class="blog-categories sidebar-div mb-50">
								<h5 class="h5-sm steelblue-color">Categories</h5>
								<ul class="blog-category-list clearfix">
									<li><a href="#"><i class="fas fa-angle-double-right blue-color"></i> Elderly Care</a> <span>(5)</span></li>
									<li><a href="#"><i class="fas fa-angle-double-right blue-color"></i> Lifestyle</a> <span>(13)</span></li>
									<li><a href="#"><i class="fas fa-angle-double-right blue-color"></i> Medical</a> <span>(6)</span></li>
									<li><a href="#"><i class="fas fa-angle-double-right blue-color"></i> Treatment </a> <span>(8)</span></li>
									<li><a href="#"><i class="fas fa-angle-double-right blue-color"></i> Pharma</a> <span>(12)</span></li>
								</ul>
							</div> -->


							<!-- POPULAR POSTS -->
							<div class="popular-posts sidebar-div mb-50">
									
								<!-- Title -->
								<h5 class="h5-sm steelblue-color">Posts Recentes</h5>

								<ul class="popular-posts">
								
									<!-- Popular post #1 -->
									<?php foreach($outrosBlog as $outroBlog){?>
									<li class="clearfix d-flex align-items-left">

										<!-- Image -->
										<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $outroBlog->foto;?>" alt="<?php echo $outroBlog->descricao_imagem;?>" title="<?php echo $outroBlog->legenda_imagem;?>" width="150" />

										<!-- Text -->
										<div class="post-summary">
											<a href="<?php echo SITE_URL;?>/blog/<?php echo $outroBlog->url_amigavel;?>"><?php echo $outroBlog->titulo;?></a>
										</div>

									</li>
									<?php }?>
								
								</ul>

							</div>


							<!-- 
							<div class="tags-cloud sidebar-div mb-50">
									
							
								<h5 class="h5-sm steelblue-color">Tags Cloud</h5>

								<span class="badge"><a href="#">Effective Treatment</a></span>
								<span class="badge"><a href="#">Molecular Biology</a></span> 	
								<span class="badge"><a href="#">Diagnostic</a></span> 									
								<span class="badge"><a href="#">Pediatrics</a></span> 
								<span class="badge"><a href="#">Lifestyle</a></span>
								<span class="badge"><a href="#">Pharma</a></span>									  								 
								<span class="badge"><a href="#">Medicine</a></span> 
								<span class="badge"><a href="#">Research</a></span> 								
							</div> -->


							<!-- SIDEBAR TIMETABLE -->
							<div class="sidebar-timetable sidebar-div mb-50">

								<!-- Title -->
								<h5 class="h5-md mb-20 steelblue-color">Vamos conversar?</h5>

								<!-- Text -->
								<p class="p-sm">Estamos sempre prontos para melhor atender você.</p>

								<!-- Button -->
								<a href="<?php echo SITE_URL;?>/contato" class="btn btn-md btn-orange btn-tra-white blue-hover">Entre em Contato</a>

							</div>	<!-- END SIDEBAR TIMETABLE -->


							<!-- IMAGE WIDGET -->						
							<div class="image-widget sidebar-div">
								<a href="<?php echo SITE_URL;?>/sobre">
									<img class="img-fluid" src="<?php echo SITE_URL;?>/images/frase.jpg" />
								</a>																		
							</div>


						</aside>	<!-- END SIDEBAR -->