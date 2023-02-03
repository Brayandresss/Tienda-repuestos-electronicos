<?php
  	     	
  	     	
$conn_string = "host='localhost' port='5433' dbname='electronicaa2' user='postgres' password='postgres'";
 
$dbconn = pg_connect($conn_string);
 
if(!$dbconn) {
echo "Error: No se ha podido conectar a la base de datos\n".pg_last_error();
} else {
  echo "*";
}  	     	
  	     	
       $cedulap= $_POST['cedula'];
       $nombrep= $_POST['nombre'];
       $apellidop= $_POST['apellido'];
       $direccionp= $_POST['direccion'];
       $telefonop= $_POST['telefono'];
       
       echo $cedulap;

       $sql=pg_query("select actualizar_cliente('$cedulap','$nombrep','$apellidop','$direccionp','$telefonop')");

       echo $result = pg_query($dbconn,$sql);
       ///pg_close($dbconn);

?>

