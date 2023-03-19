

				 		<!-- SIDEBAR -->
						<aside id="sidebar" class="col-lg-4">


							
							
							<div class="blog-categories sidebar-div mb-50">
								<h5 class="h5-sm steelblue-color">Outras Soluções</h5>
								<ul class="blog-category-list clearfix">
									<?php foreach($outrosSolucao as $outroSolucao){?>
									<li><a href="<?php echo SITE_URL;?>/solucao/<?php echo $outroSolucao->url_amigavel;?>"><i class="fas fa-angle-double-right blue-color"></i> <?php echo $outroSolucao->titulo;?></a></li>
									<?php }?>
								</ul>
							</div>
							
								<div class="sidebar-timetable sidebar-div mb-50">
								<h5 class="h5-md mb-20 steelblue-color">Vamos conversar?</h5>
								<p class="p-sm">Estamos sempre prontos para melhor atender você.</p>
								<a href="<?php echo SITE_URL;?>/contato" class="btn btn-md btn-orange btn-tra-white blue-hover">Entre em Contato</a>
							</div>
							 
							<!--<div class="blog-categories sidebar-div mb-50">
								<h5 class="h5-sm steelblue-color">Outros Treinamentos</h5>
								<ul class="blog-category-list clearfix">
									<?php foreach($outrosTreinamento as $outroTreinamento){?>
									<li><a href="<?php echo SITE_URL;?>/treinamento/<?php echo $outroTreinamento->url_amigavel;?>"><i class="fas fa-angle-double-right blue-color"></i> <?php echo $outroTreinamento->titulo;?></a></li>
									<?php }?>
								</ul>
							</div>-->
							


							<!-- POPULAR POSTS -->
							<div class="popular-posts sidebar-div mb-50">
									
								<!-- Title -->
								<h5 class="h5-sm steelblue-color">Posts Recentes</h5>

								<ul class="popular-posts">
								
									<!-- Popular post #1 -->
									<?php foreach($outrosBlog as $outroBlog){?>
									<li class="clearfix d-flex align-items-center">

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
				
							<div class="image-widget sidebar-div">
								<a href="<?php echo SITE_URL;?>/sobre">
									<img class="img-fluid" src="<?php echo SITE_URL;?>/images/frase.jpg" />
								</a>																		
							</div>


						</aside>	<!-- END SIDEBAR -->