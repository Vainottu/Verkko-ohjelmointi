<?php

$servername = "localhost";
$mysqluser = "kauppias";
$mysqlpassword = "K11@o#n{,V}?";
$databasename = "verkkokauppa";

$con = new mysqli($servername, $mysqluser, $mysqlpassword, $databasename);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>