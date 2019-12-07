<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d16.php'">
</head>

<?php
include('../config.php');
?>

<?php
// keamanan saat mereka input
$codx = mysqli_real_escape_string($link, $_POST['codx']);
$name = mysqli_real_escape_string($link, $_POST['name']);
$unit = mysqli_real_escape_string($link, $_POST['unit']);
$price = mysqli_real_escape_string($link, $_POST['price']);
$profit = mysqli_real_escape_string($link, $_POST['profit']);
$qty = mysqli_real_escape_string($link, $_POST['qty']);
$stores = mysqli_real_escape_string($link, $_POST['stores']);
$pic = mysqli_real_escape_string($link, $_POST['pic']);
 
// memasukan query
$sql = "INSERT INTO product 
( 
codx, 
name,
unit,
price,
profit,
qty,
stores, 
pic
) 

VALUES
( 
'$codx',
'$name',
'$unit',
'$price',
'$profit',
'$qty',
'$stores', 
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