<?php

$link = mysqli_connect
     ("localhost", "root", "", "iweb");
    // "HOST"    , "USERNAME", "PASSWORD",  "DB"

	// Check connection
if($link === false){
    die("Masalah: Tidak bisa Koneksi ke Database. " . mysqli_connect_error());
}

?>