<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d12e.php'">
</head>

<?php
include "../config.php";

$query = "UPDATE setting SET 
bg_thumb = '$_POST[bg_thumb]',
bg_ads = '$_POST[bg_ads]',
bg_btn = '$_POST[bg_btn]'

WHERE id='$_POST[id]' ";

if( $link->query($query) ) {
	echo "Data Tersimpan";
}else{
	echo "Data tidak tersimpan";
}

$link->close();


?>