<?php 
include ("../sec/18.php"); 
include("d16s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body > 


<div class="container"> 
<div class="content img thumbnail">
<?php include ("../sec/amenu.php"); ?>
		<h3 >Point Of Sales </h3>
		
		<div>
		<div align="right"><label for="sum" ><h1><strong style="color:#05124B" ><?php echo "Rp " .number_format($total_bill). ",-"; ?></strong></h1></label></div>
		<?php 
		$tgl = date('d/m/Y');
		echo "Tanggal : " .$tgl ; 
		?>	
		<br> <a>Cashier :</a>
		<?php echo ($_SESSION['log1']."<br />"); ?>
		</div>
		
		<?php include ("pos_view.php"); ?>

		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>Name</th>
				<th>Qty</th>
				<th>Price </th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM sales WHERE cashier='" .$_SESSION['log1']. "' AND sto='" .$_SESSION['stores']. "' AND stat='open' AND trx='$trx'");
		while ($rw = $res->fetch_assoc()):
		$harga = $rw ['price'];
		$qty = $rw ['qty'];
		$total = $rw ['total'];
		?>

			<tr align="center">
				<td>
				<?php echo $rw['name'] ?>
				<a class="label label-primary"><?php echo $rw['unit'] ?></a>
				</td>
				<td>
				<a class="label label-primary"><?php echo $rw['qty'] ?></a>
				</td>
				<td>
				<?php echo "Rp " .number_format($harga). ",-"; ?>
				</td>
				<td>
				<a href="d17d.php?u=<?php echo $rw['codx'] ?>"><span class="fa fa-times" aria-hidden="true"></span></a>
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
