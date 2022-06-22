<?php
include ("conexion.php");

if (isset($_POST['send_encuesta'])) {      
    if (strlen($_POST['cod_lider']) >= 1 && strlen($_POST['encuesta']) >= 1)  {
        $id_lider= trim($_POST["cod_lider"]);
        $pregunta= trim($_POST["encuesta"]);

        $consulta="INSERT INTO ENCUESTA(ID_LIDER, PREGUNTA) 
                    VALUES ('$id_lider','$pregunta')";

        $resultado= mysqli_query($mysql,$consulta);
        if($resultado) {
            ?>
            <h3>Encuesta registrado correctamente</h3>
            <script src="appForoScript.js">
                mostrar("votaciones");
            </script>
            <?php
        } else {
            ?>
            <h3>Ha ocurrido un error al registrar la encuesta</h3>
            <?php
        }
    } else {
        ?>
        <h3>Por favor complete todos los campos</h3>
        <?php
    }
}
?>