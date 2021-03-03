<?php
$url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']. "/login.php";
echo $url;

print_r($_SERVER);