<?php

$hostname="bmv6pnmffz2eyz3a1qac-mysql.services.clever-cloud.com";
$database="bmv6pnmffz2eyz3a1qac";
$username="ush9i2i2xjg4qrt2";
$password="iYydDXAnp0PIYtTDlhFE";

$mysql=new mysqli($hostname, $username, $password, $database);
if($mysql->connect_errno) {
    echo "No se pudo acceder";
} else {
    echo "Conexión exitosa";
}