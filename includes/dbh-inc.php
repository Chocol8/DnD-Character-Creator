<?php
$servername = "localhost";
$dbuname = "root";
$dbpassword = "";
$dbname = "DND";

$conn = mysqli_connect($servername, $dbuname, $dbpassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
