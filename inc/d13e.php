<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d13e.php'">
</head>

<?php
include "../config.php";

$query = "UPDATE setting SET 
shadow_btn = '$_POST[shadow_btn]',
shadow_box = '$_POST[shadow_box]',
shadow_slide = '$_POST[shadow_slide]'

WHERE id='$_POST[id]' ";

if( $link->query($query) ) {
	echo "Data Tersimpan";
}else{
	echo "Data tidak tersimpan";
}

$link->close();


?>