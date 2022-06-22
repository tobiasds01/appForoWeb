<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="appForoCSS.css">
        <title>App Foro</title>
    </head>
    <body>
        <h1>Ingresá tus datos de líder:</h1>
        <div id="formularioDeIngreso">
            <form method="post">
                <!--Datos del líder-->
                <label for="nombre">Nombre:</label>
                <input id="nombre" type="text" name="nombre"><br>
                <label for="apellido">Apellido:</label>
                <input id="apellido" type="text" name="apellido"><br>
                <label for="grupo">Grupo:</label>
                <input id="grupo" type="text" name="grupo"><br>
                <label for="codigo">Código de lider:</label>
                <input id="codigo" type="number" name="codigo"><br>
                <!--¿Vota el líder?-->
                <label>¿El líder vota?</label>
                <input id="si" type="radio" name="vota"><label for="si">Si</label>
                <input id="no" type="radio" name="vota"><label for="no">No</label>
                <!--Enviar-->
                <label for="voto">Voto:</label>
                <input id="voto" type="text" name="voto"><br>
                <input id="send" type="submit" name="send">
            </form>
            <?php
            include("insertar-lider.php");
            ?>
        </div>
    </body>
</html>