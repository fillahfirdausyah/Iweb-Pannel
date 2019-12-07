
					<div class="sppb-addon-container sppb-wow fadeIn" style="padding:10px;" data-sppb-wow-duration="100ms" data-sppb-wow-delay="200ms">
						<div class="sppb-addon sppb-addon-text-block sppb-text-center ">
						<h3 class="sppb-addon-title" style="color:#<?php echo $rs ['theme']?>;margin-top:10px;margin-bottom:30px;">GALLERY</h3>
							<div class="sppb-addon-content"></div>
						</div>
						<div class="sppb-addon flex desaturate ">
							<div class="slick-carousel-402 clearfix img-thumbnail">
							
							<?php
							$resd = $link->query("SELECT * FROM gallery WHERE sort='home'");
							while ($rowd = $resd->fetch_assoc()):
							?>
								
								<div class="img-thumbnail"><a href="<?php echo $rowd ['pic']; ?>"><img style="width:185px;height:160px;" alt="<?php echo $rs ['seo']; ?>" src="<?php echo $rowd ['small_pic']; ?>"></a></div>
							
							<?php 
							endwhile;
							?>

							</div>
						</div>
					</div>
