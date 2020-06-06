<?php
include('core/core.php');

$items=DatosItems();

$json = array();

foreach($items as $i){
    if($i->Tipo=="Cable"){
        $json[]= array(
            'Tipo'=> $i->Tipo,
            'Codigo'=>$i->Codigo,
            'Tipo_Cable'=>$i->Tipo_Cable,
            'Disponible'=>$i->Disponible
        );
    }else{
        $json[]= array(
            'Tipo'=> $i->Tipo,
            'Codigo'=>$i->Codigo,
            'Marca'=>$i->Marca,
            'Modelo'=>$i->Modelo,
            'Disponible'=>$i->Disponible
        );
    }
}
$jsonstring=json_encode($json);
echo $jsonstring;
?>