<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="appForoCSS.css">
        <title>App Foro</title>
    </head>
    <body>
        <div id="paginaCrearEncuesta">
            <p>Código: #12345</p>
            <button>Crear nueva votación</button>
            <form method="post">
                <label for="cod_lider">Cod lider</label><br>
                <input id="cod_lider" type="text" name="cod_lider">
                <label for="encuesta">Ingrese el nombre de la votación:</label><br>
                <input id="encuesta" type="text" name="encuesta">
                <input id="send_encuesta" type="submit" name="send_encuesta">
            </form>
            <?php
            include("insertar-encuesta.php");
            ?>
        </div>
        <div id="votaciones" hidden class="container">
            <div class="flex votacion columnas_2">
                <div class="">
                    <h3>Uno</h3>
                    <h3>Dos</h3>
                    <h3>Tres</h3>
                    <h3>Cuatro</h3>
                </div>
                <div class="">
                    <h3>Personas que votaron: 63</h3>
                    <h3>Personas que faltan votar: 22</h3>
                </div>
            </div>
            <div class="votacion">
                <button>Cerrar Encuesta</button>
            </div>
        </div>
    </body>
</html>