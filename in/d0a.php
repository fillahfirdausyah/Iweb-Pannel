<?php 
include ("../sec/1.php"); 
include("d0s.php");
?>

<!DOCTYPE html>

	
<?php include ("../lib/liba.php"); ?>

	<style>
        .login-form {
            width: 20rem;
            height: 35.75rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
	</style>


<body> 



<div class="content" align="center">  
<?php include ("../sec/amenu.php"); ?>

</head>

<br/>
<br/>
<br/>
<br/>

<div class="login-form padding20 block-shadow">
        <form action="../inc/d0a.php" method="post">

			<div align="center">
            <h1 class="text-light"><small><h3>ADD POST</h3></small></h1>
			<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
			<input type="hidden" name="codx" value="gafs<?php echo print rand(1, 1000000); ?>435gf<?php echo date("mY");?>jh455<?php echo date("Ym");?>gffdas435<?php echo date("hisa"); ?>fds" >
			</div>
            <hr class="thin"/>
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="name">Name :</label>
                <input type="text" placeholder="isi name post.." name="name" value="" size="25" >
            </div>
            <br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="title">Title :</label>
                <input type="text" placeholder="isi title post.." name="judul" value="" size="25" >
            </div>
            <br />
            <br />
			<div class="input-control password full-size" data-role="input">
                <label for="sdes">Short Description :</label>
                <textarea name="sdes" rows="5" cols="26">
				</textarea> 
            </div> 
            <br />
            <br />
			<br />
            <br />
			<br />
			<br />
            <div class="input-control password full-size" data-role="input">
                <label for="picture">Pictures :</label>
                <input type="text" placeholder="isi picture link.." name="pic" value="" size="25" >
            </div>
			<br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="picture">Position :</label>
                <select name="stat">
					<option value="off">---</option>
					<option value="home">home - Berada di Page Content Bentuk List Atau Sesuai Ukuran</option>
					<option value="post">post + sort - Berada di Page Menu Ketika Klik Bentuk Postingan List harus tambah sort nama page nya</option>
					<option value="images">images - Berada di Content Bentuk Image</option>
					<option value="image">image + sort - Berada di Page Menu Ketika Klik Bentuk Images harus tambah sort nama page nya</option>
				</select>
            </div>
			<br />
            <br />
			<div class="input-control full-size" data-role="input">
                <label for="menu">Sort :</label>
                <input type="text" placeholder="isi sort page.." name="sort" value="" size="25" >
            </div>
			<br />
            <br />
            <div >
                <button type="submit" class="button primary loading-cube light">Enter</button>
               </form>
            </div>
</div>

</div><!--end wrap-->

</body>
</html>
