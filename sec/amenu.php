<?php 
include("../config.php");
?>
<br/>
<br/>
<br/>

<?php 
$qharis = "SELECT * FROM pengguna WHERE username = '" .$_SESSION['log1']. "'";
$rharis = mysqli_query ($link,$qharis);
$rw = mysqli_fetch_array($rharis);
?>
 
<input type="hidden" id="1" value="<?php echo $rw ['a']; ?>">
<input type="hidden" id="2" value="<?php echo $rw ['b']; ?>">
<input type="hidden" id="3" value="<?php echo $rw ['c']; ?>">
<input type="hidden" id="4" value="<?php echo $rw ['d']; ?>">
<input type="hidden" id="5" value="<?php echo $rw ['e']; ?>">
<input type="hidden" id="6" value="<?php echo $rw ['f']; ?>">
<input type="hidden" id="7" value="<?php echo $rw ['g']; ?>">
<input type="hidden" id="8" value="<?php echo $rw ['h']; ?>">
<input type="hidden" id="9" value="<?php echo $rw ['i']; ?>">
<input type="hidden" id="10" value="<?php echo $rw ['j']; ?>">
<input type="hidden" id="11" value="<?php echo $rw ['k']; ?>">
<input type="hidden" id="12" value="<?php echo $rw ['l']; ?>">
<input type="hidden" id="13" value="<?php echo $rw ['m']; ?>">
<input type="hidden" id="14" value="<?php echo $rw ['n']; ?>">
<input type="hidden" id="15" value="<?php echo $rw ['o']; ?>">
<input type="hidden" id="16" value="<?php echo $rw ['p']; ?>">
<input type="hidden" id="17" value="<?php echo $rw ['q']; ?>">
<input type="hidden" id="18" value="<?php echo $rw ['r']; ?>">

<script>
$(document).ready(function () {
  
    var text1 = $("#1").val();
	var text2 = $("#2").val();
	var text3 = $("#3").val();
	var text4 = $("#4").val();
    var text5 = $("#5").val();
	var text6 = $("#6").val();
	var text7 = $("#7").val();
	var text8 = $("#8").val();
	var text9 = $("#9").val();
	var text10 = $("#10").val();
	var text11 = $("#11").val();
	var text12 = $("#12").val();
	var text13 = $("#13").val();
	var text14 = $("#14").val();
	var text15 = $("#15").val();
	var text16 = $("#16").val();
	var text17 = $("#17").val();
	var text18 = $("#18").val();
	
	
        if (text1 == "0") {
            document.getElementById('m1').hidden = true;
        } else if (text1 == "1"){
            document.getElementById('m1').hidden = false;
        }
		
		 if (text2 == "0") {
            document.getElementById('m2').hidden = true;
        } else if (text2 == "1"){
            document.getElementById('m2').hidden = false;
        }

		 if (text3 == "0") {
            document.getElementById('m3').hidden = true;
        } else if (text3 == "1"){
            document.getElementById('m3').hidden = false;
        }
		
		 if (text4 == "0") {
            document.getElementById('m4').hidden = true;
        } else if (text4 == "1"){
            document.getElementById('m4').hidden = false;
        }
		
		 if (text5 == "0") {
            document.getElementById('m5').hidden = true;
        } else if (text5 == "1"){
            document.getElementById('m5').hidden = false;
        }
		
		 if (text6 == "0") {
            document.getElementById('m6').hidden = true;
        } else if (text6 == "1"){
            document.getElementById('m6').hidden = false;
        }
		
		 if (text7 == "0") {
            document.getElementById('m7').hidden = true;
        } else if (text7 == "1"){
            document.getElementById('m7').hidden = false;
        }
		
		 if (text8 == "0") {
            document.getElementById('m8').hidden = true;
        } else if (text8 == "1"){
            document.getElementById('m8').hidden = false;
        }
		
		if (text9 == "0") {
            document.getElementById('m9').hidden = true;
        } else if (text9 == "1"){
            document.getElementById('m9').hidden = false;
        }
		
		if (text10 == "0") {
            document.getElementById('m10').hidden = true;
        } else if (text10 == "1"){
            document.getElementById('m10').hidden = false;
        }
		
		if (text11 == "0") {
            document.getElementById('m11').hidden = true;
        } else if (text11 == "1"){
            document.getElementById('m11').hidden = false;
        }
		
		if (text12 == "0") {
            document.getElementById('m12').hidden = true;
        } else if (text12 == "1"){
            document.getElementById('m12').hidden = false;
        }
		
		if (text13 == "0") {
            document.getElementById('m13').hidden = true;
        } else if (text13 == "1"){
            document.getElementById('m13').hidden = false;
        }
		
		if (text14 == "0") {
            document.getElementById('m14').hidden = true;
        } else if (text14 == "1"){
            document.getElementById('m14').hidden = false;
        }
		
		if (text15 == "0") {
            document.getElementById('m15').hidden = true;
        } else if (text15 == "1"){
            document.getElementById('m15').hidden = false;
        }
		
		if (text16 == "0") {
            document.getElementById('m16').hidden = true;
        } else if (text16 == "1"){
            document.getElementById('m16').hidden = false;
        }
		
		if (text17 == "0") {
            document.getElementById('m17').hidden = true;
        } else if (text17 == "1"){
            document.getElementById('m17').hidden = false;
        }
		
		if (text18 == "0") {
            document.getElementById('m18').hidden = true;
        } else if (text18 == "1"){
            document.getElementById('m18').hidden = false;
        }
		
		
});

</script>

<header class="app-bar fixed-top navy" data-role="appbar">
    <div class="container">
        <a href="ds.php" class="app-bar-element branding"><img src="../public/img/i.png" style="height: 28px; display: inline-block; margin-right: 10px;"> Isesware Isystem v.4.5</a>

        <ul class="app-bar-menu small-dropdown">
			<li>
                <a class="button primary loading-pulse light" href="ds.php" >Home</a>
            </li>
            <li>
                <a href="#" class="dropdown-toggle">Website</a>
                <ul class="d-menu" data-role="dropdown" data-no-close="true">
                    <div id="m1"><li><a href="d0.php">Post</a></li></div>
					<div id="m2"><li><a href="d1.php">Pages</a></li></div>
                    <div id="m3"><li><a href="d2.php">Product</a></li></div>
                    <div id="m4"><li><a href="d3.php">Slide</a></li></div>
                    <div id="m5"><li><a href="d4.php">Business</a></li></div>
					<div id="m6"><li><a href="d5.php">Gallery</a></li></div>
					<div id="m7"><li><a style="background-color:#694F04" href="#">User Security</a></li></div>
					<div id="m8"><li><a href="d7e.php">Setting</a></li></div>
                    <div id="m9"><li><a href="d8.php">Comment</a></li></div>
                    <div id="m10"><li><a href="d9e.php">Security</a></li></div>
					<div id="m11"><li><a href="d10e.php">Directory</a></li></div>	
				</ul>
            </li>

            <li>
                <a href="#" class="dropdown-toggle">Program</a>
                <ul class="d-menu" data-role="dropdown" data-no-close="true">
					<div id="m12"><li><a href="d11e.php">Upload</a></li></div>
					<div id="m13"><li><a href="d12e.php">Background Image</a></li></div>
					<div id="m14"><li><a href="d13e.php">Shadow</a></li></div>
					<div id="m15"><li><a href="d14e.php">Access User</a></li></div>
					<div id="m16"><li><a style="background-color:#000000" href="#">Cash Flow</a></li></div>
					<div id="m17"><li><a style="background-color:#0B0B61" href="d16.php">Master Product</a></li></div>
					<div id="m18"><li><a style="background-color:#0B0B61" href="d17.php">Sales</a></li></div>
					<div ><li><a style="background-color:#0B0B61" href="d15.php">Hold Trx</a></li></div>
					<div ><li><a style="background-color:#0B0B61" href="d15.php">Report</a></li></div>
					<div ><li><a style="background-color:#0B0B61" href="d15.php">Stores</a></li></div>
                </ul>
            </li>
			
			<li>
                <a class="button danger loading-pulse light" href="../logout.php" >Logout</a>
            </li>
        </ul>

        <span class="app-bar-pull"></span>

    </div>
</header>

<br/>
<br/>
<br/>
<br/>
