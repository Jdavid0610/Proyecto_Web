<?php
include('models/db.php');
session_start();

function varificarSesion(){
    if(!isset($_SESSION['reserva_usr'])){
        echo "<script> window.location='login.php';</script>";
        exit();
    }else{
        echo "<script> window.location='index.php';</script>";
    }
}

function validarUsuario($data){
    try{
        $manager = new MongoDB\Driver\Manager ('mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass%20Community&ssl=false');
        $usuarios=$manager->selectCollection('BDReservas','Usuarios');
        $usrs=$usuarios->find($data);
        $usr=$usrs->getNext();
        if($usr){
            $_SESSION['reseva_usr']=$usr;
            return true;
        }else{
            return false;
        }
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
