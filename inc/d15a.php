
<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d15.php'">
</head>

<?php
include('../config.php');


// keamanan saat mereka input
$username = mysqli_real_escape_string($link, $_POST['username']);
$date = mysqli_real_escape_string($link, $_POST['date']);
$dt = mysqli_real_escape_string($link, $_POST['dt']);
$time = mysqli_real_escape_string($link, $_POST['time']);
$trx = mysqli_real_escape_string($link, $_POST['trx']);
$note = mysqli_real_escape_string($link, $_POST['note']);
$money = mysqli_real_escape_string($link, $_POST['money']);
$mt = mysqli_real_escape_string($link, $_POST['mt']);
$yr = mysqli_real_escape_string($link, $_POST['yr']);
$codx = mysqli_real_escape_string($link, $_POST['codx']);



 
// memasukan query
$sql = "INSERT INTO cashflow ( 
username, 
date, 
dt, 
time, 
trx, 
note, 
money, 
mt, 
yr,
codx
) 
VALUES  
( 
'$username',
'$date', 
'$dt', 
'$time', 
'$trx', 
'$note', 
'$money', 
'$mt', 
'$yr',
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