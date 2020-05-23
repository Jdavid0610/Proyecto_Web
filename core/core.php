<?php
include('models/db.php');
session_start();

function varificarSesion(){
    if(!isset($_SESSION['reserva_usr'])){
        echo "<script> window.location='login.php';</script>";
        exit();
    }else{
        echo "<script> window.location='index.php';</script>";
        exit();
    }
}

function validarUsuario($usuario,$contrasena){
    try{
        $manager = new MongoDB\Driver\Manager ('mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass%20Community&ssl=false');
        $filter = ['Usuario' => $usuario, 'Contrasena'=>$contrasena];
        $options = [];
        $query = new \MongoDB\Driver\Query($filter, $options);
        $row = $manager->executeQuery('BDReservas.Usuarios', $query);
        var_dump($row);
        foreach($row as $r){
           var_dump($r);
        }
        /*$usuarios=$manager->selectCollection('BDReservas','Usuarios');
        $usrs=$usuarios->find($data);
        $usr=$usrs->getNext();
        if($usr){
            $_SESSION['reseva_usr']=$usr;
            return true;
        }else{
            return false;
        }*/
    }catch(Exception $e){
        die('Error db(connect)'.$e->getMessage());
    }
}

function crearUsuario($data){
    try{
        $manager = new MongoDB\Driver\Manager ('mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass%20Community&ssl=false');
       
    }catch(Exception $e){
        die('Error db(connect)'.$e->getMessage());
    }
}

?>
