<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d5.php'">
</head>

<?php
include "../config.php";

$query = "UPDATE gallery SET 
tgl = '$_POST[tgl]',
name = '$_POST[name]',
name_col = '$_POST[name_col]',
small_pic = '$_POST[small_pic]',
pic = '$_POST[pic]',
wt = '$_POST[wt]',
ht = '$_POST[ht]',
sort = '$_POST[sort]',
small_des = '$_POST[small_des]',
des_color = '$_POST[des_color]',
page = '$_POST[page]'

WHERE id='$_POST[id]' ";

if( $link->query($query) ) {
	echo "Data Tersimpan";
}else{
	echo "Data tidak tersimpan";
}

$link->close();


?>