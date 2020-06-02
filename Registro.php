<?php
    include('core/core.php');
    $mensaje=" ";
    if($_POST){
        if($_POST["contrasena"]=="" || $_POST["contrasena2"]=="" || $_POST["correo"]==""||$_POST["nombre"]==""){
            $mensaje="Porfavor llene todos los campos";
        }else if(validarContrasena($_POST["contrasena"],$_POST["contrasena2"])){
            if(validarCorreo($_POST["correo"])){
                $mensaje="El Correo que digito ya tiene una cuenta";
                if(validarNombreUsuario($_POST["usuario"])){
                    $mensaje="Nombre de Usuario no disponible";
                }else{
                    if(crearUsuario($_POST["usuario"],$_POST["contrasena"],$_POST["correo"],$_POST["nombre"])){
                        echo "<script>window.location='./';</script>";
                        exit();
                    }
                }
            }else{
                if(validarNombreUsuario($_POST["usuario"])){
                    $mensaje="Nombre de Usuario no disponible";
                }else{
                    if(crearUsuario($_POST["usuario"],$_POST["contrasena"],$_POST["correo"],$_POST["nombre"])){
                        echo "<script>window.location='./';</script>";
                        exit();
                    }
                }
            }
        }else{
            $mensaje="Las contraseñas no coinciden";
        }
        
    }

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
            <img class="login_img" src="assets\img\img.jpg"></img>
            <form class="contenedor" method="post" action="" autocomplete="off">
                <input class="input" placeholder="Correo" type="text" name="correo">
                <input class="input" placeholder="Nombre Completo" type="text"name="nombre">
                <input class="input" placeholder="Usuario" type="text"name="usuario">
                <input class="input" placeholder="Contraseña" type="password"name="contrasena">
                <input class="input" placeholder="Confirmar Contraseña" type="password"name="contrasena2">
                <div class="error">
                    <?php echo $mensaje?>
                </div>
                <button class="enviar" type="submit">Registrarse</button>
            </form>
        </div>
        <script src ="assets/Js/Registro.js"></script>
    </body>
</html>