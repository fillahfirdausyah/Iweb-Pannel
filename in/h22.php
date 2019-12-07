
<link rel="stylesheet" href="../public/css/turbotabs.css" type="text/css" />
<link rel="stylesheet" href="../public/css/owl.carousel.css" type="text/css" />
<link rel="stylesheet" href="../public/css/wc-box-public.css" type="text/css" />
<link rel="stylesheet" href="../public/css/woocommerce-layout.css" type="text/css" />
<link rel="stylesheet" href="../public/css/woocommerce-smallscreen.css" type="text/css" />
<link rel="stylesheet" href="../public/css/woocommerce.css" type="text/css" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&#038;subset=latin,latin-ext" type="text/css"/>
<link rel="stylesheet" href="../public/css/style.css" type="text/css" />
<link rel="stylesheet" href="../public/css/shortcodes.css" type="text/css" />
<link rel="stylesheet" href="../public/css/shortcodes_responsive.css" type="text/css" />
<script type="text/javascript" src="../public/js/jquery.js"></script>
<script type="text/javascript" src="../public/js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="../public/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="../public/js/jquery.prettyPhoto.init.js"></script>
<script type="text/javascript" src="../public/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../public/js/turbotabs.js"></script>
<script type="text/javascript" src="../public/js/wc-box-public.js"></script>
<script type="text/javascript" src="../public/js/ezmodal.min.js"></script>
<script type="text/javascript" src="../public/js/modernizr.custom.js"></script>


	<div >

<div >
				
					<div class="entry-content">
					
				
				
<h3 style="text-align: center;">Product</h3>
<p style="text-align: center;">    

	    <!-- - - - - - -  - - - HORIZONTAL TAB - - - - - -  - - - - - -->
	<script type="text/javascript">
	jQuery(document).ready(function(){
	jQuery('.wcbox_slider_134').turbotabs({			

		width : "100%",
		animation :'Scale',
		navAlign : 'center',
		mode: 'horizontal', // accordion ,horizontal
		headingTextColor : ''
	}); 
	jQuery(".wcbox_slider_134 .owlw").owlCarousel(
		{
			

			loop:false,
			dots: false,
			nav: true,
			items:5,
			margin:10,
			
			autoplay: true, // type false | if you don't want auto play
			autoplayTimeout: 4000, // 1 sec = 1000
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			responsive:{
			0:{
				items:1			},
			480:{
				items:1			},
			768:{
				items:3				
			},
			980:{
				items:5			}
		},
			
	  
		}
	);	
	}); 
	</script>
	
	<style type="text/css">
	.wcbox_slider_134 .tt_tabs {		
		margin: 0 !important;
		padding: 0 !important;
		
		}

	.wcbox_slider_134 .cl-effect-21 .t_name 
	{color:#2e2e2e;}

	.wcbox_slider_134 .wcbox_box_onsale , .wcbox_slider_134 .cl-effect-21 .active .t_name
	
	{		color:#fff !important ;}

	
	.wcbox_slider_134 .cl-effect-21 .t_name::before ,
	.wcbox_slider_134 .cl-effect-21 .t_name::after,
	.wcbox_slider_134 .wcbox_box_onsale
	{
		background:#6b13e9;
	}
	.wcbox_slider_134 .cl-effect-21 .active
	{
		background:#6b13e9;
	}
	.wcbox_slider_134 .wcbox-quick-view
	{
		background:rgba(107,19,233,0.52);
	}
	.wcbox_slider_134 .wcbox-quick-view:before
	{
		color:#fff;
	}
	.wcbox_slider_134 h3{color:;}
	.wcbox_slider_134 .woocommerce .star-rating span:before{color: !important;}
	
	</style>
	
	
    <div class="wcbox_slider_134">
            <div class="tt_container">
								 <div class=" tt_tab">
					<div class="woocommerce">
					
					<ul class="products owlw">

<?php
$res = $link->query("SELECT * FROM product WHERE sort='home'");
while ($row = $res->fetch_assoc()):
$harga = $row ['price'];
?>
					
<li class="product woocommerce wcbox_carousel_product">
	<div class="col-xs-12" >																
		<div class="wcbox_image">
			<img src="<?php echo $row ['pic'] ?>" style="width:230px;height:230px;" alt="<?php echo $rs ['seo']; ?>"/>
			<?php echo $row ['onsales'] ?>
		</div>
		
		<a href="p.php?u=<?php echo $row['page'] ?>" style="color:#<?php echo $rs ['theme']?>;">
			<b><?php echo $row ['name'] ?></b><br\>
			<br><small><?php echo $row ['des']; ?></small><br\>
			<br><b> <?php echo "Rp " .number_format($harga). ",-"; ?></b>	
		</a>	
		
		
	</div>
	<!--
	<div class="col-xs-12">
		<a class="button">Order</a>	
	</div>
	-->	
</li>	

<?php 
endwhile;
?>	
				
						</ul>
					</div>
						
				</div>		
							     	
            </div>	

    </div><!-- #myTab -->


			</div> <!-- .et_pb_text -->
				
			

				     	
            </div>	

    </div><!-- #myTab -->
    <!-- Query in Query--> 

<p style="text-align: center;">
	
	