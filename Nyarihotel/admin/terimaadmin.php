<?php
$username = $_POST['username'];
$password = $_POST['password'];

require'koneksi.php';

$baru = new Database();
$baru->masukadmin($username, $password); 

?>