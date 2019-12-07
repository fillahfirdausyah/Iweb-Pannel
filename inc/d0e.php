<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d0.php'">
</head>

<?php
include "../config.php";

$query = "UPDATE post SET 
tgl = '$_POST[tgl]',
name = '$_POST[name]',
name_col = '$_POST[name_col]',
judul = '$_POST[judul]',
sdes = '$_POST[sdes]',
des = '$_POST[des]',
des_color = '$_POST[des_color]',
pic = '$_POST[pic]',
width = '$_POST[width]',
height = '$_POST[height]',
stat = '$_POST[stat]',
sort = '$_POST[sort]'

WHERE id='$_POST[id]' ";

if( $link->query($query) ) {
	echo "Data Tersimpan";
}else{
	echo "Data tidak tersimpan";
}

$link->close();


?>