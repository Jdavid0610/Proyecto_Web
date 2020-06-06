<?php
include('models/db.php');

session_start();
$log="";

function validarUsuario($usuario,$contrasena){
    try{
        $manager = new MongoDB\Driver\Manager ('mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass%20Community&ssl=false');
        $filter = ['Usuario' => $usuario, 'Contrasena'=>$contrasena];
        $options = [];
        $query = new \MongoDB\Driver\Query($filter, $options);
        $row = $manager->executeQuery('BDReservas.Usuarios', $query);
        
        
        foreach($row as $r){
           if($r->Usuario==$usuario&&$r->Contrasena==$contrasena){
                $log=$usuario;
                $_SESSION['reserva_usr']=$r->Usuario;
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
        $bulk = new MongoDB\Driver\BulkWrite;
        $user_insert=$bulk->insert($doc);
        $result=$manager->executeBulkWrite('BDReservas.Usuarios',$bulk);
        $_SESSION['reserva_usr']=$doc->Usuario;
        echo "<script>window.location='./';</script>";
        return true;

    }catch(Exception $e){
        die('Error db(connect)'.$e->getMessage());
    }
}

function ReservasUsuario(){
    $log=$_SESSION['reserva_usr'];
    $manager = new MongoDB\Driver\Manager ('mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass%20Community&ssl=false');
    $filter = ['Usuario' => $log];
    $options = [];
    $query = new \MongoDB\Driver\Query($filter, $options);
    $row = $manager->executeQuery('BDReservas.Reservas', $query);
    return $row;
}

function DatosItems(){
    $manager = new MongoDB\Driver\Manager ('mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass%20Community&ssl=false');
    $filter = [];
    $options = [];
    $query = new \MongoDB\Driver\Query($filter, $options);
    $row = $manager->executeQuery('BDReservas.Items', $query);
    return $row;
}

function Reservar($data){
    $log=$_SESSION['reserva_usr'];
    $manager = new MongoDB\Driver\Manager ('mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass%20Community&ssl=false');
    $filter = [];
    $options = [];
    $query = new \MongoDB\Driver\Query($filter, $options);
    $row = $manager->executeQuery('BDReservas.Reservas', $query);
    $items = DatosItems();
    $encontrado=false;
    if($data->Tipo=="Cable"){
        foreach($items as $i){
            if($i->Tipo_Cable==$data->Tipo_Cable){
                foreach($row as $r){
                    if($r->Codigo_Item==$i->Codigo){
                        $encontrado=true;
                        if($r->Fecha==$data->Fecha&&$r->Hora_Inicio==$data->Hora_Inicio){
                            return "No se pudo realizar la reserva para ".$data->Fecha." a las ".$data->Hora_Inicio." Hasta ".$data->Hora_Fin;
                        }else{
                            $doc = array(
                                "Usuario" => $log,
                                "Codigo_Item" => $i->Codigo,
                                "Fecha" => $data->Fecha,
                                "Hora_Inicio" => $data->Hora_Inicio,
                                "Hora_Fin" => $data->Hora_Fin,
                                "Activa" => true
                            );
                            $bulk = new MongoDB\Driver\BulkWrite;
                            $reserva_insert=$bulk->insert($doc);
                            $result=$manager->executeBulkWrite('BDReservas.Reservas',$bulk);
    
                            return "Reserva satisfactoria para ".$data->Fecha." a las ".$data->Hora_Inicio." Hasta ".$data->Hora_Fin." ";
                        }
                    }
                }
                if($encontrado==false){
                    $doc = array(
                        "Usuario" => $log,
                        "Codigo_Item" => $i->Codigo,
                        "Fecha" => $data->Fecha,
                        "Hora_Inicio" => $data->Hora_Inicio,
                        "Hora_Fin" => $data->Hora_Fin,
                        "Activa" => true
                    );
                    $bulk = new MongoDB\Driver\BulkWrite;
                    $reserva_insert=$bulk->insert($doc);
                    $result=$manager->executeBulkWrite('BDReservas.Reservas',$bulk);
    
                    return "Reserva satisfactoria para ".$data->Fecha." a las ".$data->Hora_Inicio." Hasta ".$data->Hora_Fin." ";
                }
            }
        }
    }else{
        foreach($items as $i){
            if($i->Tipo==$data->Tipo){
                foreach($row as $r){
                    if($r->Codigo_Item==$i->Codigo){
                        $encontrado=true;
                        if($r->Fecha==$data->Fecha&&$r->Hora_Inicio==$data->Hora_Inicio){
                            return "No se pudo realizar la reserva para ".$data->Fecha." a las ".$data->Hora_Inicio." Hasta ".$data->Hora_Fin;
                        }else{
                            $doc = array(
                                "Usuario" => $log,
                                "Codigo_Item" => $i->Codigo,
                                "Fecha" => $data->Fecha,
                                "Hora_Inicio" => $data->Hora_Inicio,
                                "Hora_Fin" => $data->Hora_Fin,
                                "Activa" => true
                            );
                            $bulk = new MongoDB\Driver\BulkWrite;
                            $reserva_insert=$bulk->insert($doc);
                            $result=$manager->executeBulkWrite('BDReservas.Reservas',$bulk);
    
                            return "Reserva satisfactoria para ".$data->Fecha." a las ".$data->Hora_Inicio." Hasta ".$data->Hora_Fin." ";
                        }
                    }
                }
                if($encontrado==false){
                    $doc = array(
                        "Usuario" => $log,
                        "Codigo_Item" => $i->Codigo,
                        "Fecha" => $data->Fecha,
                        "Hora_Inicio" => $data->Hora_Inicio,
                        "Hora_Fin" => $data->Hora_Fin,
                        "Activa" => true
                    );
                    $bulk = new MongoDB\Driver\BulkWrite;
                    $reserva_insert=$bulk->insert($doc);
                    $result=$manager->executeBulkWrite('BDReservas.Reservas',$bulk);
    
                    return "Reserva satisfactoria para ".$data->Fecha." a las ".$data->Hora_Inicio." Hasta ".$data->Hora_Fin." ";
                }
            }
        }
    }
}
?>
