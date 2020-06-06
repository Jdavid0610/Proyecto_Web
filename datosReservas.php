<?php
include('core/core.php');
$reservas=ReservasUsuario();

$json = array();

foreach($reservas as $r){
    //var_dump($r);
    $json[]= array(
        'Usuario'=>$r->Usuario,
        'Codigo_Item'=>$r->Codigo_Item,
        'Fecha'=>$r->Fecha,
        'Hora_Inicio'=>$r->Hora_Inicio,
        'Hora_Fin'=>$r->Hora_Fin,
        'Activa'=>$r->Activa
    );
}
$jsonstring=json_encode($json);

echo $jsonstring;

?>