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
<body class="body" onload="">
    <header class="header">
        <div class="header__div">
            <img src="assets\img\header.png" id = "H" class="header__img" >
            <a href="./" class="header__p">Audio Visuales</a>
        </div>
        <a class="logout" href="salir.php" >Salir</a>
    </header>
    <div class = "container">

        <h1 class="title">Reservar</h1>

        <div class="buttom">
            <button class="accordion">Articulos Disponibles</button>
            <div class="panel">
                <section class="carrusel">
                    <div id="divHistorial" class="carrusel__container">
                        <buttom class="carrusel__item" onclick="location.href='ReservaExtencion.php'">
                            <br>
                            <img class="carrusel__item__info-img"src="assets\img\cable_extencion.png" alt="">
                            <div class="carrusel__item__info">
                                <p class="carrusel__item__info-title">Extencion</p>
                            </div>
                        </buttom>    
                        <buttom class="carrusel__item" onclick="location.href='ReservaParlante.php'">
                            <br><br><br>
                            <img class="carrusel__item__info-img"src="assets\img\parlante.png" alt="">
                            <div class="carrusel__item__info">
                                <p class="carrusel__item__info-title">Parlante</p>
                            </div>
                        </buttom>
                        <buttom class="carrusel__item" onclick="location.href='ReservaPortatil.php'">
                            <br><br>
                            <img class="carrusel__item__info-img"src="assets\img\portatil.png" alt="">
                            <div class="carrusel__item__info">
                                <p class="carrusel__item__info-title">Portatil</p>
                            </div>
                        </buttom>
                        <buttom class="carrusel__item" onclick="location.href='ReservaVideoBeam.php'">
                            <img class="carrusel__item__info-img"src="assets\img\videobeam.png" alt="">
                            <div class="carrusel__item__info">
                                <p class="carrusel__item__info-title">Video Beam</p>
                            </div>
                        </buttom>
                        <buttom class="carrusel__item" onclick="location.href='ReservaUTP.php'">
                            <img class="carrusel__item__info-img"src="assets\img\cable.png" alt="">
                            <div class="carrusel__item__info">
                                <p class="carrusel__item__info-title">Cable UTP</p>
                            </div>
                        </buttom>
                    </div>
                </section>
            </div>
        </div>
    <script src="assets/Js/functions.js"></script>
    <script src="assets/Js/Accordion.js"></script>
    <footer class="footer">
    <p class="footer_title" >Autor: Julian David Ortiz Alviar, Roberto Estrada Nieto, Santiago Gomez Viafara</p>
    </footer>
</body>
</html>