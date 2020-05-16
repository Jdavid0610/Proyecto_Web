<?php
    include('core/core.php');
    $mensaje=" ";
    if($_POST){
       if(validarUsuario($_POST)){
            echo "<script>window.location='./index.php';</script>";
            exit();
       }else{
           $mensaje="Usuario o contraseña no valido";
       }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
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
                <label class="label" for="">Usuario</label>
                <input class="input" name="usuario" type="text">
                <label class="label" for="">Contraseña</label>
                <input class="input" name="contrasena" type="password">
                <div class="error">
                    <?php echo $mensaje?>
                </div>
                <button class="enviar" type="submit">Entrar</button>
            </form>
            <div class = "links">
                <a class="registrar" href="Registro.php">Registrate</a>
                <p>|</p>
                <a class="registrar" href="Recuperar.php">Olvidaste tu contraseña</a>
            </div>
        </div>
        <script src ="assets/Js/login.js"></script>
    </body>
</html>