<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d6.php'">
</head>

<?php
include "../config.php";

$query = "UPDATE pengguna SET 
username = '$_POST[username]',
password = '$_POST[password]',
stores = '$_POST[stores]',
a = '$_POST[a]',
b = '$_POST[b]',
c = '$_POST[c]',
d = '$_POST[d]',
e = '$_POST[e]',
f = '$_POST[f]',
g = '$_POST[g]',
h = '$_POST[h]',
i = '$_POST[i]',
j = '$_POST[j]',
k = '$_POST[k]',
l = '$_POST[l]',
m = '$_POST[m]',
n = '$_POST[n]',
o = '$_POST[o]',
p = '$_POST[p]',
q = '$_POST[q]'

WHERE id='$_POST[id]' ";

if( $link->query($query) ) {
	echo "Data Tersimpan";
}else{
	echo "Data tidak tersimpan";
}

$link->close();


?>