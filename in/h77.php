<div style="padding:10px;" data-sppb-wow-duration="100ms" data-sppb-wow-delay="200ms">
						<div class="sppb-addon sppb-text-center ">
						<h3 class="sppb-addon-title" style="color:#<?php echo $rs ['theme']?>;margin-top:10px;margin-bottom:20px;">IKLAN</h3>
							<div class="sppb-addon-content"></div>
						</div>
						<div class="sppb-addon ">
							<div class="slick-carousel-402 ">
							
							<?php
							$resf = $link->query("SELECT * FROM gallery WHERE sort='iklan'");
							while ($rowf = $resf->fetch_assoc()):
							?>
								
								<div ><a href="<?php echo $rowf ['pic']; ?>"><img style="width:200px;height:185px;" alt="<?php echo $rs ['seo']; ?>" src="<?php echo $rowf ['small_pic']; ?>"><p><div align="center"><strong style="color:#<?php echo $rs ['theme']?>;"><?php echo $rowf ['name']; ?></strong></div><br /></a></div>
							
							<?php 
							endwhile;
							?>

							</div>
						</div>
</div>