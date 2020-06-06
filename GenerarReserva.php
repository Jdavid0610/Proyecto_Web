<?php
    include('core/core.php');
    $reserva=json_decode($_POST["reserva"],false);
    $respuesta=Reservar($reserva);
    echo $respuesta;
?>