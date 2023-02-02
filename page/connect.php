<?php

$server = "localhost";

// $username = "wsmifaid_simbah";
$username = "root";

// $password = "Polije1234";
$password = "";

// $db = "wsmifaid_simbah";
$db = "db_invitation";

$koneksi = mysqli_connect($server, $username, $password, $db);
//  or die(mysqli_error($koneksi));

if (!$koneksi) {
  die("koneksi gagal");
}
