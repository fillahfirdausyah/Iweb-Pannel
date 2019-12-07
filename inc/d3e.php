<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d3.php'">
</head>

<?php
include "../config.php";

$query = "UPDATE slide SET 
name = '$_POST[name]',
des = '$_POST[des]',
pic = '$_POST[pic]',
name_color = '$_POST[name_color]',
des_color = '$_POST[des_color]',
sort = '$_POST[sort]',
stat = '$_POST[stat]'

WHERE id='$_POST[id]' ";

if( $link->query($query) ) {
	echo "Data Tersimpan";
}else{
	echo "Data tidak tersimpan";
}

$link->close();


?>