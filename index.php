<?php
    include_once('core/core.php');
    varificarSesion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas Audiovisuales</title>
    <link id = "estilo" rel="stylesheet" href="./assets/Css/P_Page.CSS">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>
<body class="body">
    <header class="header">
        <img src="./resourses/logo.png" id = "H" class="header__img" > 
    </header>
    <div class = "container">
        <div class="buttom">
            <button class="accordion">Historial de Reservas</button>
            <div class="panel">
                <section class="carrusel">
                    <div class="carrusel__container">
                        <div class="carrusel__item">
                                <img class="carrusel__item__info-img"src="./resourses/" alt="">
                                <div class="carrusel__item__info">
                                    <br><br><br><br><br><br><br>

                                    <button id="myBtn" class="carrusel__item__info-boton">Mas...</button>
                                </div>
                        </div>
                        <div class="carrusel__item">
                            <img class="carrusel__item__info-img"src="./resourses/" alt="">
                            <div class="carrusel__item__info">
                                <br><br><br><br><br><br><br>
                                
                                <button id="myBtn1" class="carrusel__item__info-boton">Mas...</button>
                            </div>
                        </div>
                        <div class="carrusel__item">
                            <img class="carrusel__item__info-img"src="./resourses/" alt="">
                            <div class="carrusel__item__info">
                                <br><br><br><br><br><br><br>
                                
                                <button id="myBtn2" class="carrusel__item__info-boton">Mas...</button>
                            </div>
                        </div>
                        <div class="carrusel__item">
                            <img class="carrusel__item__info-img"src="./resourses/" alt="">
                            <div class="carrusel__item__info">
                                <br><br><br><br><br><br><br>    

                                <!-- Trigger/Open The Modal -->
                                <button id="myBtn3" class="carrusel__item__info-boton">Mas...</button>
                            </div>
                        </div>
                        <div class="carrusel__item">
                            <img class="carrusel__item__info-img"src="./resourses/" alt="">
                            <div class="carrusel__item__info">
                                <br><br><br><br><br><br><br> 

                                <!-- Trigger/Open The Modal -->
                                <button id="myBtn4" class="carrusel__item__info-boton">Mas...</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!--cajas modales de los integrantes del equipo de desarrollo-->
        
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
                <div class="modal-content">
                    <div>
                        <img class="carrusel__item__info-img"src="./resourses/" alt="">
                    </div>
                    <div style="margin-left: 50px;">
                        
                    </div>
                    <div style="margin-left: 50px;">
                        
                        
                    </div>
                    <span id="close" class="close">&times;</span>

                </div>
        </div>
        <div id="myModal1" class="modal">
            <!-- Modal content -->
                <div class="modal-content">
                    <div>
                        <img class="carrusel__item__info-img"src="./resourses/" alt="">
                    </div>
                    <div style="margin-left: 50px;">
                        
                    </div>
                    <div style="margin-left: 50px;">
                        
                    </div>
                    <span id="close1" class="close">&times;</span>
                </div>
        </div>
        <div id="myModal2" class="modal">
            <!-- Modal content -->
                <div class="modal-content">
                    <div>
                        <img class="carrusel__item__info-img"src="./resourses/" alt="">
                    </div>
                    <div style="margin-left: 50px;">
                        
                    </div>
                    <div style="margin-left: 50px;">
                        
                    </div>
                    <span id="close2" class="close">&times;</span>
                </div>
        </div>
        <div id="myModal3" class="modal">
            <!-- Modal content -->
                <div class="modal-content">                    
                    <div>
                        <img class="carrusel__item__info-img"src="./resourses/" alt="">
                    </div>
                    <div style="margin-left: 50px;">
                        
                    </div>
                    <div style="margin-left: 50px;">
                        
                    </div>
                    <span id="close3" class="close">&times;</span>
                </div>
        </div>
        <div id="myModal4" class="modal">
            <!-- Modal content -->
                <div class="modal-content">
                    <div>
                        <img class="carrusel__item__info-img"src="./resourses/" alt="">
                    </div>
                    <div style="margin-left: 50px;">
                        
                    </div>
                    <div style="margin-left: 50px;">
                        
                    </div>
                    <span id="close4" class="close">&times;</span>
                </div>
        </div>
        
        <!--fin de las cajas modales del equipo de desarrollo-->
        <div class="buttom">
            <button class="accordion">Reservas</button>
            <div class="panel">
                <section class="carrusel">
                    <div class="carrusel__container">
                        <div class="carrusel__item_p">
                            <img class="carrusel__item_p-img" src="./resourses/">
                            <div class="carrusel__item__info">
                                <p class="carrusel__item__info-title"></p>
                            </div>
                        </div>
                        <div class="carrusel__item_p">
                            <img class="carrusel__item_p-img" src="./resourses/">
                            <div class="carrusel__item__info">
                                <p class="carrusel__item__info-title"></p>
                            </div>
                        </div>
                        <div class="carrusel__item_p">
                            <img class="carrusel__item_p-img" src="./resourses/">
                            <div class="carrusel__item__info">
                                <p class="carrusel__item__info-title"></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>   
    </div>
    <script src="assets/Js/Accordion.js"></script>
    <script src="assets/Js/PopUP.js"></script>
    <footer class="footer">
        <p class="footer_title">Autor: Julian David Ortiz Alviar</p>
    </footer>
</body>
</html>