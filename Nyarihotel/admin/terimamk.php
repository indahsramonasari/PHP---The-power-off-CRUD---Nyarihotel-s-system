<?php

$KODE_MK = $_POST['KODE_MK'];
$MATKUL =  $_POST['MATKUL'];
$SKS = $_POST['SKS'];
require 'koneksi.php';

$baru = new Database();
$baru-->masukmk($KODE_MK, $MATKUL, $SKS);


?>