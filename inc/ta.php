<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/index.php'">
</head>

<?php
include('../config.php');
?>

<?php
// keamanan saat mereka input
$name = mysqli_real_escape_string($link, $_POST['name']);
$des = mysqli_real_escape_string($link, $_POST['des']);
$sort = mysqli_real_escape_string($link, $_POST['sort']);
 
// memasukan query
$sql = "INSERT INTO testi 
( 
name, 
des,
sort
) 

VALUES
( 
'$name', 
'$des',
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