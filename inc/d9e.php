<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d9e.php'">
</head>

<?php
ini_set('display_errors',0);

include "../config.php";

$query = "UPDATE sec SET 
name = '$_POST[name]',
baru = '$_POST[baru]'

WHERE id='$_POST[id]' ";


$q = "SELECT * FROM sec WHERE id='1'";
$r = mysqli_query ($link,$q);
$rs = mysqli_fetch_array ($r);

$sebelum = $_POST[name];
$sesudah = $_POST[baru];

rename("../$sebelum","../$sesudah");

if( $link->query($query) ) {
	echo "Data Tersimpan";
}else{
	echo "Data tidak tersimpan";
}

$link->close();


?>