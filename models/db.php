<?php

class database{	
	

	function connectMongoDB(){
		try {
            /* No olvidad cambiar la cadena de conexión de acuerdo a su BD: */
			$manager = new MongoDB\Driver\Manager ('mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass%20Community&ssl=false');
		 	return $manager;
		} catch (Exception $e) {
			die('Error db(connect) '.$e->getMessage());
		}
	}
}

?>