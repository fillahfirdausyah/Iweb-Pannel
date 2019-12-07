<!DOCTYPE html>
<html lang="en">

<head>


	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">


    <!-- Bootstrap Core CSS -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../public/css/shop-homepage.css" rel="stylesheet">


</head>


<br/>
<br/>

			
<body>
    <!-- Page Content -->
	<div class="container">
		<div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
                            <?php echo $rs ['slide_top_indi']; ?>
                            <div style="box-shadow: 3px 3px 5px #<?php echo $rs ['shadow_slide'] ?>;" class="carousel-inner <?php echo $rs ['slide_top_stat']; ?>">
                                
							<?php
							$resm = $link->query("SELECT * FROM slide WHERE sort='hometop'");
							while ($rowm = $resm->fetch_assoc()):
							?>
								<div class="item <?php echo $rowm ['stat']; ?>">
                                    <img class="slide-image" src="<?php echo $rowm ['pic']; ?>" alt="<?php echo $rs ['seo']; ?>" style="width:<?php echo $rs ['slide_top_width']; ?>px;height:<?php echo $rs ['slide_top_height']; ?>px;" >
                                </div>
							
							<?php 
							endwhile;
							?>	
							
                            </div>
							
                            
                        </div>
        </div>
	</div>
	
    <div class="container">

        <div class="row">
			
			<div class="col-md-3" >
                <p class="lead"><?php echo $rs ['side_menu'] ?></p>
                <div class="list-group">
				
				<?php
							$resg = $link->query("SELECT * FROM page WHERE side='on'");
							while ($rowg = $resg->fetch_assoc()):
				?>
				
                    <a style="background-image:url(<?php echo $rs ['bg_btn'] ?>);box-shadow: 3px 3px 5px #<?php echo $rs ['shadow_btn'] ?>;" href="p.php?u=<?php echo $rowg['name'] ?>" class="list-group-item"><?php echo $rowg ['name']; ?></a>
					
				<?php 
					endwhile;
				?>	
				
                </div>
				
				<?php
							$resk = $link->query("SELECT * FROM gallery WHERE sort='ads'");
							while ($rowk = $resk->fetch_assoc()):
				?>
				
				<div style="background-image:url(<?php echo $rs ['bg_ads'] ?>);box-shadow: 3px 3px 5px #<?php echo $rs ['shadow_box'] ?>;" align="center" class="thumbnail">
                            <div style="background-image:url(<?php echo $rs ['bg_ads'] ?>);" class="thumbnail">
							<div class="img-thumbnail">
							<img src="<?php echo $rowk ['small_pic']; ?>" alt="<?php echo $rs ['seo']; ?>" style="width:<?php echo $rowk ['wt']; ?>px;height:<?php echo $rowk ['ht']; ?>px;">
                            </div>
							<div class="caption" align="center">
                                <h4><a href="p.php?u=<?php echo $rowk['page'] ?>"><?php echo $rowk ['name']; ?></a></h4>
                                <div style="background-image:url(<?php echo $rs ['bg_ads'] ?>);" class="thumbnail">
								<p><?php echo $rowk ['small_des']; ?></p>
								</div>
                            </div>
							</div>
                </div>
				
				<?php 
					endwhile;
				?>
				
				<div class="thumbnail">
				<font size="1"><label>Tags :</label></font> <font size="1"><a href="<?php echo $rs ['site']; ?>"><?php echo $rs ['seo']; ?></a></font> 
				</div>
			</div>
			
            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
                            <?php echo $rs ['slide_indi']; ?>
                            <div style="box-shadow: 3px 3px 5px #<?php echo $rs ['shadow_slide'] ?>;" class="carousel-inner <?php echo $rs ['slide_stat']; ?>">
                                
							<?php
							$resh = $link->query("SELECT * FROM slide WHERE sort='homes'");
							while ($rowh = $resh->fetch_assoc()):
							?>
								<div class="item <?php echo $rowh ['stat']; ?>">
                                    <img class="slide-image" src="<?php echo $rowh ['pic']; ?>" alt="<?php echo $rs ['seo']; ?>" style="width:<?php echo $rs ['slide_width']; ?>px;height:<?php echo $rs ['slide_height']; ?>px;" >
                                </div>
							
							<?php 
							endwhile;
							?>	
							
                            </div>
							
                            
                        </div>
                    </div>

                </div>
				
				<br/>
				<br/>
                <div class="row">
				
								<?php
								$resl = $link->query("SELECT * FROM post WHERE stat='images'");
								while ($rowl = $resl->fetch_assoc()):
								?>
								
								<div class="col-md-4">
								  <div style="background-image:url(<?php echo $rs ['bg_thumb'] ?>);box-shadow: 3px 3px 5px #<?php echo $rs ['shadow_box'] ?>;" class="thumbnail">
									<a href="p.php?u=<?php echo $rowl['sort'] ?>" target="_blank">
									  <img src="<?php echo $rowl['pic'] ?>" alt="<?php echo $rs ['seo']; ?>" style="width:<?php echo $rowl ['width'] ?>px;height:<?php echo $rowl ['height'] ?>px;">
									  <div class="caption">
										<p><?php echo $rowl ['sdes']; ?></p>
									  </div>
									</a>
								  </div>
								</div>
								
								<?php 
								endwhile;
								?>

				
				<?php
				$resi = $link->query("SELECT * FROM product WHERE sort='homes' ORDER BY id DESC");
				while ($rowi = $resi->fetch_assoc()):
				$harga = $rowi ['price'];
				?>
				
                    <div class="col-sm-4 col-lg-4 col-md-4" >
                        <div class="thumbnail" style="box-shadow: 3px 3px 5px #<?php echo $rs ['shadow_box'] ?>;">
                            <img src="<?php echo $rowi ['pic'] ?>" style="width:320px;height:150px;" alt="<?php echo $rs ['seo']; ?>">
                            <div class="caption thumbnail">
                                <h4 class="pull-right"><?php echo "Rp " .number_format($harga). ",-"; ?></h4>
                                <h4><a href="p.php?u=<?php echo $rowi['page'] ?>"><h5><?php echo $rowi ['name'] ?></h5></a>
                                </h4>
                                <p><?php echo $rowi ['des']; ?></p>
                            </div>
							
							<font size="1"><label>Tags :</label></font> <font size="1"><a href="<?php echo $rs ['site']; ?>"><?php echo $rs ['seo']; ?></a></font> 
                        </div>	
						
                    </div>
				
				<?php 
				endwhile;
				?>
				
				<?php
				$resj = $link->query("SELECT * FROM gallery WHERE sort='new' ORDER BY id DESC");
				while ($rowj = $resj->fetch_assoc()):
				?>
				
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo $rowj ['small_pic'] ?>" style="width:270px;height:110px;" alt="<?php echo $rs ['seo']; ?>">
                            <div class="caption ">
                                <h5 class="pull-right"><?php echo $rowj['tgl'] ?></h5>
                                <h4><a href="p.php?u=<?php echo $rowj['page'] ?>"><h4><?php echo $rowj ['name'] ?></h4></a>
                                </h4>
                                <p><?php echo $rowj ['small_des']; ?></p>
                            </div>
                        </div>
                    </div>
				
				<?php 
				endwhile;
				?>
				

                </div>
				
				<div class="row carousel-holder">

                <?php
				$resk = $link->query("SELECT * FROM post WHERE stat='home'");
				while ($rowk = $resk->fetch_assoc()):
				?>
				
                    <div class="panel panel-default col-md-12">
						<h4><a style="color:#000000;" href="p.php?u=<?php echo $rowk['name'] ?>"><?php echo $rowk ['judul']; ?></a></h4>
                        <div >
                         <img class="thumbnail " src="<?php echo $rowk ['pic'] ?>" align="left" style="width:<?php echo $rowk ['width'] ?>px;height:<?php echo $rowk ['height'] ?>px;" alt="<?php echo $rs ['seo']; ?>">   
                            <div class="caption thumbnail">
                                <h4><a href="#"><h5><?php echo $rowk ['tgl'] ?></h5></a></h4>
                                <p ><?php echo $rowk ['sdes']; ?></p> 
								<a style="color:#000000;" href="p.php?u=<?php echo $rowk['name'] ?>"> Read More ..</a>
                            </div>
							<font size="1"><label>Tags :</label></font> <font size="1"><a href="<?php echo $rs ['site']; ?>"><?php echo $rs ['seo']; ?></a></font> 
                        </div>	
                    </div>
				
				<?php 
				endwhile;
				?>   

                </div>
				

            </div>
			
        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../public/js/bootstrap.min.js"></script>

</body>



</html>
