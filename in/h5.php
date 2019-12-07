<div class="sppb-addon-container sppb-wow fadeIn" style="padding:10px;" data-sppb-wow-duration="100ms" data-sppb-wow-delay="200ms">
						<div class="sppb-addon sppb-addon-text-block sppb-text-center ">
						<h3 class="sppb-addon-title" style="color:#<?php echo $rs ['theme']?>;margin-top:10px;margin-bottom:20px;">NEWS</h3>
							<div class="sppb-addon-content"></div>
						</div>
						<div class="sppb-addon flex desaturate ">
							<div class="slick-carousel-402 clearfix">
							
							<?php
							$rese = $link->query("SELECT * FROM gallery WHERE sort='news'");
							while ($rowe = $rese->fetch_assoc()):
							?>
								
								<div class="img-thumbnail"><a href="p.php?u=<?php echo $rowe['page'] ?>"><img style="width:200px;height:185px;" alt="<?php echo $rs ['seo']; ?>" src="<?php echo $rowe ['small_pic']; ?>"><p><strong style="color:#<?php echo $rowe ['name_col']; ?>;"><?php echo $rowe ['name']; ?></strong><br />
<div style="color:#<?php echo $rowe ['des_color']; ?>;"><?php echo $rowe ['small_des']; ?></div>
</a></div>
							
							<?php 
							endwhile;
							?>

							</div>
						</div>
</div>