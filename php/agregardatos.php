<?php

  	
       $cedulap= $_POST['cedula'];
       $nombrep= $_POST['nombre'];
       $apellidop= $_POST['apellido'];
       $direccionp= $_POST['direccion'];
       $telefonop= $_POST['telefono'];

     
       include("conn.php"); //$dbconn 
       $crear="select insertar_cliente('$cedulap','$nombrep','$apellidop','$direccionp','$telefonop')";

        echo $result =  pg_query($dbconn,$crear);
       //pg_close($dbconn);

?>