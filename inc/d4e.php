<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d4.php'">
</head>

<?php
include "../config.php";

$query = "UPDATE business SET 
name = '$_POST[name]',
des = '$_POST[des]',
pic = '$_POST[pic]'

WHERE id='$_POST[id]' ";

if( $link->query($query) ) {
	echo "Data Tersimpan";
}else{
	echo "Data tidak tersimpan";
}

$link->close();


?>