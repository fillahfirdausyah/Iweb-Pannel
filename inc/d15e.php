<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d15.php'">
</head>

<?php
include "../config.php";

$query = "UPDATE cashflow SET 
username = '$_POST[username]', 
note = '$_POST[note]', 
money = '$_POST[money]'

WHERE id='$_POST[id]' ";

if( $link->query($query) ) {
	echo "Data Tersimpan";
}else{
	echo "Data tidak tersimpan";
}

$link->close();



?>