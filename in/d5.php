<?php 
include ("../sec/6.php"); 
include("d5s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container"> 
<div class="content img thumbnail">
<?php include ("../sec/amenu.php"); ?>
		<h3 >All Gallery </h3>
		<button class="button loading-pulse lighten success" onclick="location='d5z.php';"> AKTIF </button>
		<button class="button loading-pulse lighten danger" onclick="location='d5x.php';"> NON-AKTIF </button>
		<br/>
		<br/>
		<button class="button loading-pulse lighten primary" onclick="location='d5a.php';" >Add Gallery</button>

		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>Image</th>
				<th>Position</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM gallery");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<td><img src="<?php echo $rw['small_pic']?>" width='100px' height='100px'/></td>
				<td><?php echo $rw['sort']?></td>
				<td>
				<a href="d5e.php?u=<?php echo $rw['codx'] ?>"><span class="fa fa-pencil" aria-hidden="true"></span></a>
				<a onclick="return confirm('Are you want deleting data')" href="d5d.php?u=<?php echo $rw['codx'] ?>"><span class="fa fa-trash" ></span></a>
				</td>
			</tr>
	
		<?php
		endwhile;
		?>				
					
		</tbody>       
		</table>
    </div>
	
		

<!-- Bootstrap Table Js -->
<script src="../mod/bootstrap_table/js/jquery.min.js"></script>
<script src="../mod/bootstrap_table/js/bootstrap.min.js"></script>
<script src="../mod/bootstrap_table/js/metisMenu.min.js"></script>
<script src="../mod/bootstrap_table/js/jquery.dataTables.min.js"></script>
<script src="../mod/bootstrap_table/js/dataTables.bootstrap.min.js"></script>		

         


</div>
<?php include ("../lib/lib2.php"); ?>
</div><!--end wrap-->

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
</script>
	
</body>
</html>
