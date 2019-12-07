<section id="sp-bottom">
<div class="container">
	<div class="row">
	<div id="sp-bottom1" class="col-sm-6 col-md-3">
		<div class="sp-column ">
			<div class="sp-module ">
				<div class="sp-module-content">
					<div class="custom" ><p><img src="<?php echo $rs ['logo'] ?>" alt="<?php echo $rs ['seo']; ?>" width="300" height="300" /></p></div>
				</div>
				<div class="sp-module-content">
					<?php echo $rs ['widget'] ?>
				</div>
			</div>
		</div>
	</div>

	<div id="sp-bottom2" class="col-sm-6 col-md-3">
		<div class="sp-column ">
			<div class="sp-module ">
				<div class="sp-module-content">
					<div class="custom"  >
						<p>Phone : <a style="color:#<?php echo $rs ['txt'] ?>"><?php echo $rs ['phone'] ?></a></p>
						<p>Email : <a style="color:#<?php echo $rs ['txt'] ?>"><?php echo $rs ['email'] ?></a></p>
						<p>Website : <a style="color:#<?php echo $rs ['txt'] ?>" href="http://<?php echo $rs ['phone'] ?>"><?php echo $rs ['site'] ?></a></p>
						<p>Rekening : <a style="color:#<?php echo $rs ['txt'] ?>"><?php echo $rs ['rekening'] ?></a></p>
						<hr />
						<p><strong style="color:#<?php echo $rs ['txt'] ?>" ><?php echo $rs ['full_name'] ?></strong></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="sp-bottom3" class="col-sm-6 col-md-3">
		<div class="sp-column ">
			<div class="sp-module" >
				<iframe src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/<?php echo $rs ['facebook']; ?>&amp;width=183&amp;height=285&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23FFF&amp;stream=false&amp;header=false"  style="border:0; background-color:#FFF; overflow:hidden; width:180px; height:230px;" ></iframe>
			</div>
		</div>
	</div>

	<div id="sp-bottom4" class="col-sm-6 col-md-3">
		<div class="sp-column ">
			<div class="sp-module ">
				<div class="sp-module-content">
				<div class="custom"  >
				
					<p><iframe class="sppb-embed-responsive-item" src="//www.youtube.com/embed/<?php echo $rs ['video']; ?>" width="250" height="170" ></iframe>
					<br><?php echo $rs ['video_des']?></br>
					</p>
				
				</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>

</section>