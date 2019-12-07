<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d0.php'">
</head>

<?php
include('../config.php');
?>

<?php
// keamanan saat mereka input
$codx = mysqli_real_escape_string($link, $_POST['codx']);
$name = mysqli_real_escape_string($link, $_POST['name']);
$judul = mysqli_real_escape_string($link, $_POST['judul']);
$sdes = mysqli_real_escape_string($link, $_POST['sdes']);
$pic = mysqli_real_escape_string($link, $_POST['pic']);
$stat = mysqli_real_escape_string($link, $_POST['stat']);
$sort = mysqli_real_escape_string($link, $_POST['sort']);
 
// memasukan query
$sql = "INSERT INTO post 
( 
codx, 
name, 
judul,
sdes,
pic,
stat,
sort
) 

VALUES
( 
'$codx', 
'$name', 
'$judul',
'$sdes',
'$pic',
'$stat',
'$sort'
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