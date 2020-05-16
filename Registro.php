<?php


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reserva de Audiovisuales</title>
        <link rel="stylesheet" href="./assets/Css/login.css">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    </head>
    <body class="body">
        <div class="contenedor"> 
            <img class="login_img" src="resourses/img.jpg"></img>
            <form class="contenedor" method="post" action="">
                <label class="label" for="">Correo</label>
                <input class="input" type="text">
                <label class="label" for="">Usuario</label>
                <input class="input" type="text">
                <label class="label" for="">Contraseña</label>
                <input class="input" type="password">
                <label class="label" for="">Confirmar Contraseña</label>
                <input class="input" type="password">
                <div class="error">
                    
                </div>
                <button class="enviar" type="submit">Registrarse</button>
            </form>
        </div>
        <script src ="assets/Js/Registro.js"></script>
    </body>
</html>