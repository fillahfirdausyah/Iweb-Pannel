<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d14e.php'">
</head>

<?php
include "../config.php";

$query = "UPDATE pengguna SET 
username = '$_POST[username]',
password = '$_POST[password]'

WHERE id='$_POST[id]' ";

if( $link->query($query) ) {
	echo "Data Tersimpan";
}else{
	echo "Data tidak tersimpan";
}

$link->close();


?>