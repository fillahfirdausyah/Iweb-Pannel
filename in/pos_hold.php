		
		<!-- Cari Data -->
		<link href="../public/jscari/jquery-ui.css" rel="stylesheet">
		<script src="../public/jscari/jquery-1.10.2.js"></script>
		<script src="../public/jscari/jquery-ui.js"></script>
		
		
		<script> $(function() { $( "#products" ).autocomplete({ source: 'pos_cari.php' });}); </script>
			
	<div align="center">	
	<?php include('pos_tarik.php') ?>

	
	<script src="../public/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">  
	<?php echo $jsArray; ?>
	function changeValue(id)
	{
		document.getElementById('nama_prod').value = prdName[id].namap;
		document.getElementById('pic_prod').value = prdName[id].picp;
		document.getElementById('unit_prod').value = prdName[id].unitp;
		document.getElementById('serial_prod').value = prdName[id].serip;
		document.getElementById('qty_prod').value = prdName[id].qtyp;
		document.getElementById('harga_prod').value = prdName[id].hargap;
		document.getElementById('profit_prod').value = prdName[id].profitp;
		document.getElementById('val4').focus();
	};
	</script>
	
	<form action="../inc/h1t.php" method="post">
		<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#000000" width="100%">
											<tr>
												<td style="background-color:#ffffff">PROCESS</td>
												<td style="background-color:#ffffff">TRX</td>
												<td style="background-color:#ffffff">CODE</td>
												<td style="background-color:#ffffff">PRODUCT NAME</td>
												<td style="background-color:#ffffff">UNIT</td>
												<td style="background-color:#ffffff">QTY</td>
												<td style="background-color:#ffffff">INPUT</td>
												<td style="background-color:#ffffff">PRICE</td>
											</tr>
									<tbody> 
											<tr>
												<input type="hidden" name="cashier" value="<?php echo $_SESSION ['log1']; ?>" >
												<input type="hidden" name="sto" value="<?php echo $_SESSION ['logs']; ?>" >
												<input type="hidden" name="dt" value="<?php echo date("d/m/Y"); ?>">
												<input type="hidden" name="mt" value="<?php echo date("m"); ?>">
												<input type="hidden" name="yr" value="<?php echo date("Y"); ?>">
												<input type="hidden" name="profit" id="profit_prod" value="">
												<td style="background-color:#ffffff"><button id="val2" type="submit"/>Add Item</button></td>
												<td style="background-color:#ffffff"><input name="trx" type="text" value="<?php echo $rsb ['trx']; ?>" size="7" style="color:#000000" readonly></td>
												<td style="background-color:#ffffff"><input type="text" name="sku" id="serial_prod" size="7" style="color:#000000" readonly></td>
												<input type="hidden" name="pic" id="pic_prod" size="7" style="color:#000000" readonly>
												<td style="background-color:#ffffff"><input type="text" name="prd" id="nama_prod" size="15" style="color:#000000" readonly></td>
												<td style="background-color:#ffffff"><input type="text" name="unit" id="unit_prod" size="7" style="color:#000000" readonly></td>
												<td style="background-color:#ffffff"><input type="text" name="item" size="7" style='color:#000000' id="qty_prod" readonly></td>
												<td style="background-color:#ffffff"><input type="text" name="qty" size="7" style='color:#000000' id="val4" ></td>
												<td style="background-color:#ffffff"><input type="text" name="price" id="harga_prod" size="7" style='color:#000000' readonly></td>
											</tr>
									</tbody>
		</table>
	</form>
	 </div>

	 
	

	<!-- -->