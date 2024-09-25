<?php
$servername = "localhost";
$dBUsername = "root";
$dBPasssword = "";
$dBName = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPasssword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
?>