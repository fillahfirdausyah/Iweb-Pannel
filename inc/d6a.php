<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d6.php'">
</head>

<?php
include('../config.php');
?>

<?php
// keamanan saat mereka input
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$stores = mysqli_real_escape_string($link, $_POST['stores']);
$codx = mysqli_real_escape_string($link, $_POST['codx']);
 
// memasukan query
$sql = "INSERT INTO pengguna 
(  
username,
password,
stores,
codx
) 

VALUES
( 
'$username',
'$password',
'$stores',
'$codx'
)";
//"NAMA TABLE DALAM DATABASE" (fname,lname,emaila) ------- (Nama Variable)

if(mysqli_query($link, $sql )){
    echo "Berhasil Menyimpan.";
} else{
    echo "Masalah: Tidak Bisa Mengeksekusi $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>