<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "teskop";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$connection) {
    die("Koneksi dengan database gagal: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
}