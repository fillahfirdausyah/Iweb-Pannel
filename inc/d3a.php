<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d3.php'">
</head>

<?php
include('../config.php');
?>

<?php
// keamanan saat mereka input
$codx = mysqli_real_escape_string($link, $_POST['codx']);
$name = mysqli_real_escape_string($link, $_POST['name']);
$pic = mysqli_real_escape_string($link, $_POST['pic']);
 
// memasukan query
$sql = "INSERT INTO slide 
( 
codx,
name, 
pic
) 

VALUES
( 
'$codx', 
'$name', 
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