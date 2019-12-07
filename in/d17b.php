<head>
	<META HTTP-EQUIV="REFRESH" 
	CONTENT="0; URL='../in/o1.php'">
</head>

<?php
include('../config.php');

// keamanan saat mereka input
$sku = mysqli_real_escape_string($link, $_POST['sku']);
$trx = mysqli_real_escape_string($link, $_POST['trx']);
$prd = mysqli_real_escape_string($link, $_POST['prd']);
$pic = mysqli_real_escape_string($link, $_POST['pic']);
$unit = mysqli_real_escape_string($link, $_POST['unit']);
$item = mysqli_real_escape_string($link, $_POST['item']);
$qty = mysqli_real_escape_string($link, $_POST['qty']);
$price = mysqli_real_escape_string($link, $_POST['price']);
$profit = mysqli_real_escape_string($link, $_POST['profit']);
$cashier = mysqli_real_escape_string($link, $_POST['cashier']);
$sto = mysqli_real_escape_string($link, $_POST['sto']);
$dt = mysqli_real_escape_string($link, $_POST['dt']);
$mt = mysqli_real_escape_string($link, $_POST['mt']);
$yr = mysqli_real_escape_string($link, $_POST['yr']);
$total = $price * $qty;
$net_profit = $qty * $profit;
$kurang = $item - $qty;
$stat = 'open';


// memasukan query
$sql = "INSERT INTO sales ( 
sku,
trx,
prd,
pic,
unit, 
qty, 
price,
profit,
cashier,
sto,
dt,
mt,
yr,
total,
net_profit,
stat
) 
VALUES ( 
'$sku',
'$trx',
'$prd',
'$pic',
'$unit', 
'$qty', 
'$price',
'$profit',
'$cashier',
'$sto',
'$dt',
'$mt',
'$yr',
'$total',
'$net_profit',
'$stat'
 )";

if ($qty > $item) {
	echo "Data tidak tersimpan";
} else {
	mysqli_query($link, $sql );
	$query = "UPDATE products SET qty = '$kurang' WHERE serial='$_POST[sku]'";
	mysqli_query($link, $query );
}
 
// close connection
mysqli_close($link);
?>