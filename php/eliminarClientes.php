<?php

  	
       $cedula= $_POST['cedula'];

     
       include("conn.php"); //$dbconn 
       $sql="DELETE from cliente where id='$cedula'";

        echo $result =  pg_query($dbconn,$sql);
       //pg_close($dbconn);

?>