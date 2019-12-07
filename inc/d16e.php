<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d16.php'">
</head>

<?php
include "../config.php";

$query = "UPDATE product SET 
name = '$_POST[name]',
unit = '$_POST[unit]',
price = '$_POST[price]',
profit = '$_POST[profit]',
qty = '$_POST[qty]',
pic = '$_POST[pic]'

WHERE id='$_POST[id]' ";

if( $link->query($query) ) {
	echo "Data Tersimpan";
}else{
	echo "Data tidak tersimpan";
}

$link->close();


?>