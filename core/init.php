<?php

$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "conactlist";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
