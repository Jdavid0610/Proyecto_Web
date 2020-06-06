<?php
    include('core/core.php');
    varificarSesion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas Audiovisuales</title>
    <link id = "estilo" rel="stylesheet" href="./assets/Css/P_Page.CSS">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>
<body class="body" onload="onLoad()">
    <header class="header">
        <div class="header__div">
            <img src="assets\img\header.png" id = "H" class="header__img" >
            <a href="./" class="header__p">Audio Visuales</a>
        </div>
        <a class="logout" href="salir.php" >Salir</a>
    </header>
    <div class = "container">

        <h1 class="title">Mis Reservas</h1>

        <div class="buttom">
            <button class="accordion">Historial de Reservas</button>
            <div class="panel">
                <section class="carrusel">
                    <div id="divHistorial" class="carrusel__container">
                        
                        
                    </div>
                </section>
            </div>
        </div>
        <!--cajas modales de los Articulos-->
        
        
        <!--fin de las cajas modales de los Articulos-->
        <div id ="divReservasActivas"class="buttom">
            <button class="accordion">Reservas Activas</button>
            <div class="panel">
                <section class="carrusel">
                    <div id="divMisReservas" class="carrusel__container">
                        <buttom id="Reservar" class="carrusel__item_r" onclick="location.href='Reservar.php'">
                            <img class="carrusel__item__info-btn"src="assets\icons\mas.png" alt="">
                            <div class="carrusel__item__info">
                            </div>
                        </buttom>        
                    </div>
                </section>
            </div>
        </div>   
    </div>
    <script src="assets/Js/functions.js"></script>
    <script src="assets/Js/Accordion.js"></script>
    <footer class="footer">
        <p class="footer_title">Autor: Julian David Ortiz Alviar</p>
    </footer>
</body>
</html>