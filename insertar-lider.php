<?php
include ("conexion.php");

if (isset($_POST['send'])) {      
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['grupo']) >= 1 && strlen($_POST['voto']) == 1)  {
        $id_lider= trim($_POST["codigo"]);
        $nombre= trim($_POST["nombre"]);
        $grupo= trim($_POST["grupo"]);
        $voto= trim($_POST["voto"]);

        $consulta="INSERT INTO LIDER(ID_LIDER,NOMBRE,GRUPO,VOTO) 
                    VALUES('$id_lider','$nombre','$grupo','$voto')";

        $resultado= mysqli_query($mysql,$consulta);
        if($resultado) {
            ?>
            <h3>Lider registrado correctamente</h3>
            <?php
            header('Location: sindex.php');
            die();
        } else {
            ?>
            <h3>Ha ocurrido un error al registrar al lider</h3>
            <?php
        }
    } else {
        ?>
        <h3>Por favor complete todos los campos</h3>
        <?php
    }
}
?>