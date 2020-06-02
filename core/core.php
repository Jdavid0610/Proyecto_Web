<?php
include('models/db.php');

session_start();

function validarUsuario($usuario,$contrasena){
    try{
        $manager = new MongoDB\Driver\Manager ('mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass%20Community&ssl=false');
        $filter = ['Usuario' => $usuario, 'Contrasena'=>$contrasena];
        $options = [];
        $query = new \MongoDB\Driver\Query($filter, $options);
        $row = $manager->executeQuery('BDReservas.Usuarios', $query);
        
        
        foreach($row as $r){
           if($r->Usuario==$usuario&&$r->Contrasena==$contrasena){
                
                $_SESSION['reserva_usr']=$r;
                return true;
           }else{
                return false;
           }
        }
    }catch(Exception $e){
        die('Error db(connect)'.$e->getMessage());
    }
}

function varificarSesion(){
    $aux=false;
    if(!isset($_SESSION['reserva_usr'])){   
        echo "<script> window.location='./login.php';</script>";
    }
}

function usuarioActivo(){
    $ru=false;
    if(isset($_SESSION['reserva_usr'])){
        $ru=$_SESSION['reserva_usr'];
    }
    return $ru;
}
function validarContrasena($contrasena1,$contrasena2){
    if($contrasena1==$contrasena2){
        return true;
    }else{
        return false;
    }
}
function validarCorreo($correo){
    $existe = false;
    $manager = new MongoDB\Driver\Manager ('mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass%20Community&ssl=false');
    $filter = ['Correo' => $correo];
    $options = [];
    $query = new \MongoDB\Driver\Query($filter, $options);
    $row = $manager->executeQuery('BDReservas.Usuarios', $query);
    foreach($row as $r){
        if($r->Correo==$correo){
            $existe = true;
        }
    }
    return $existe;
}
function validarNombreUsuario($usuario){
    $existe=false;
    $manager = new MongoDB\Driver\Manager ('mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass%20Community&ssl=false');
    $filter = ['Usuario' => $usuario];
    $options = [];
    $query = new \MongoDB\Driver\Query($filter, $options);
    $row = $manager->executeQuery('BDReservas.Usuarios', $query);
    foreach($row as $r){
        if($r->Usuario==$usuario){
            $existe = true;
        }
    }
    return $existe;
}
function crearUsuario($usuario,$contrasena,$correo,$nombre){
    try{
        $manager = new MongoDB\Driver\Manager ('mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass%20Community&ssl=false');
        $doc = array(
            "Nombre" => $nombre,
            "Usuario" => $usuario,
            "Contrasena" => $contrasena,
            "Moroso" => false,
            "Correo" => $correo
        ); 
    }catch(Exception $e){
        die('Error db(connect)'.$e->getMessage());
    }
}
?>
