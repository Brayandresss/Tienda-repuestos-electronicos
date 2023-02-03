<?php      
      $usuario = $_POST["usuario"];  
      $contrasena = $_POST["contrasena"];    
      session_start();
      include("conn.php"); //$dbconn 
      
      $resultados= pg_query($dbconn, "SELECT * FROM empleado 
                          WHERE nombre='$usuario' AND contrasena='$contrasena'");
                          

      $filas=pg_num_rows($resultados);
           
      if($filas > 0) {
            $data = pg_fetch_array($resultados);
            $_SESSION['active']= true;
                  $_SESSION['usuario'] = $data['nombre'];
                  $_SESSION['cargo'] = $data['cargo'];

            header("location:../adminCIienteIngreso.php");     
      }
      else {
      
                  echo"<script type=\"text/javascript\">alert('Ingrese3 bien sus datos'); window.location='../menu.php';</script>";
     
      }         
    pg_free_result($resultados);
      
      pg_close($dbconn);
?>





