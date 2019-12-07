<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d2.php'">
</head>

<?php
include "../config.php";

$query = "UPDATE product SET 
name = '$_POST[name]',
des = '$_POST[des]',
pic = '$_POST[pic]',
price = '$_POST[price]',
page = '$_POST[page]',
onsales = '$_POST[onsales]',
sort = '$_POST[sort]'

WHERE id='$_POST[id]' ";

if( $link->query($query) ) {
	echo "Data Tersimpan";
}else{
	echo "Data tidak tersimpan";
}

$link->close();


?>