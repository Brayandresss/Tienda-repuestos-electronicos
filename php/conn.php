<?php
 
$conn_string = "host='localhost' port='5433' dbname='electronicaa2' user='postgres' password='postgres'";
 
$dbconn = pg_connect($conn_string);
 
if(!$dbconn) {
echo "Error: No se ha podido conectar a la base de datos\n".pg_last_error();
} else {
  echo "";
}
 
?>



