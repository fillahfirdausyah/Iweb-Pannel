<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d1.php'">
</head>

<?php
include "../config.php";

$query = "UPDATE page SET 
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
down = '$_POST[down]',
ul = '$_POST[ul]',
stat = '$_POST[stat]',
sort = '$_POST[sort]',
side = '$_POST[side]',
cm = '$_POST[cm]'

WHERE id='$_POST[id]' ";

if( $link->query($query) ) {
	echo "Data Tersimpan";
}else{
	echo "Data tidak tersimpan";
}

$link->close();


?>