<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "conexion.php";
    $id_lider=$_POST["ID_LIDER"];
    $nombre=$_POST["NOMBRE"];
    $grupo=$_POST["GRUPO"];
    $voto=$_POST["VOTO"];

    $consulta="insert into USUARIO(ID_LIDER,NOMBRE,GRUPO,VOTO) 
                values('".$id_lider."','".$nombre."','".$grupo."','".$voto."')";

    $resultado=$mysql->query($consulta);
    if($resultado==true) {
        echo "Se registró al usuario";
    } else {
        echo "Error al registrar al usuario";
    }
}