<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d5.php'">
</head>

<?php
include('../config.php');
?>

<?php
// keamanan saat mereka input
$codx = mysqli_real_escape_string($link, $_POST['codx']);
$tgl = mysqli_real_escape_string($link, $_POST['tgl']);
$pic = mysqli_real_escape_string($link, $_POST['pic']);
 
// memasukan query
$sql = "INSERT INTO gallery 
(  
codx,
tgl,
pic
) 

VALUES
( 
'$codx',
'$tgl',
'$pic'
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