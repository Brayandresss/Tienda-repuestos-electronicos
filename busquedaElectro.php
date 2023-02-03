<!DOCTYPE HTML>
<html>

  <head long="es" >
    <link rel="stylesheet" href="css/busquedaelctro.css">
     <link rel="stylesheet" href="css/login.css">
   <link rel="stylesheet" href="css/contenedores.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"> </script>
    <script type="text/javascript" src="js/login.js"> </script>    
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="alertify/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="select2/css/select2.css">    
    
    
    <script  src="js/jquery-3.3.1.min.js"> </script>
    <script  src="bootstrap/js/bootstrap.js"> </script>  
    <script  src="alertify/alertify.js"> </script> 
  
    
    <title>menu1</title>
    <meta charset="UTF-8">  

    <script type="text/javascript" >
       function openVentana(){
       $(".ventana").slideDown("slow");   	
       }  
       
       function closeVentana(){
       $(".ventana").slideUp("fast");   	
       } 
    </script>      
    

  </head>

 <body > 
<div> 

        <div id="open_close"> Iniciar sesión   </div>  
        <form id="login" action="php/validacion_datos.php" method = "post" >
 
            <label> Usuario </label>
            <input type="text" id="nombre" placeholder="Usuario" name="usuario" REQUIRED>
            <label> Contraseña </label>
            <input type="password" id="pass" placeholder="Contraseña" name="contrasena" REQUIRED>
            <input type="submit" value="Enviar" id="Enviar" >
    
        </form> 
        	
   <section class="title">
   <h1> Electrónica el repuesto </h1>       
   </section>


   
   <nav class="navegacion" >

		<ul class="menu">


			</li>
			<li class="first-item">
				<a href="menu.php">
					<img src="img/home.jpg" alt="" class="imagen">
					<span class="text-item">Inicio</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="productos.php">
					<img src="img/us.jpg" alt="" class="imagen">
					<span class="text-item">Productos</span>
					<span class="down-item"></span>
				</a>
			</li>

		</ul>
   </nav>
 <br>
 
  
   <div class="container">
    <?php   
    error_reporting(E_ALL);
    error_reporting(E_ERROR |  E_PARSE);
    //ini_set('display_errors', 1);

      $ci=$_POST['ci'];     
      if(isset($_POST['buscar']))
      {
        include("php/conn.php"); //$dbconn
        $resultados= pg_query($dbconn, "SELECT nombre, apellido
                                        FROM cliente 
                                        WHERE ci = '$ci'");
                                        
        while($resultados = pg_fetch_array($resultados)){
        //echo "".$resultados['nombre']."".$resultados['apellido'];
        } 	
	     pg_close($dbconn);    

      }
     
   ?>
   
       <div class="row"  > 
             <div class="col-sm-12">
             <h3>Electrodomésticos</h3>
            
          <table class="table table-hover table-condensed table-bordered">
                <tr>
                  <td>Nombre</td>
                  <td>Falla</td>
                  <td>Estado</td>
                  <td>Entregado</td>
                  <td>Informe técnico</td>
                   <td>Precio</td>
                  <td>repuesto</td>                  
                </tr>  
                
           <?php
           include("php/conn.php"); //$dbconn                           
	        $sql="SELECT e.tipo_electrodomestico,e.falla,i.estado,i.entrega,i.informe_tecnico ,i.precio,r.nombre FROM electrodomestico 	AS e
	                                        join informe_reparacion as i on e.cod_electro=i.cod_electro
 	                                        join repuesto as r on i.cod_rep=r.cod_rep
	                                        WHERE e.ci = '$ci'";                 
                                               
           $resul=pg_query($dbconn,$sql);
                                  
            while($ver=pg_fetch_row($resul)) 
            {
           ?>
                <tr>
                  <td> <?php echo $ver[0] ?> </td>
                  <td> <?php echo $ver[1] ?></td>
                  <td> <?php echo $ver[2] ?></td>	
                  <td> <?php echo $ver[3] ?></td>
                  <td> <?php echo $ver[4] ?></td>
                  <td> <?php echo $ver[5] ?></td>	
                  <td> <?php echo $ver[6] ?></td>
               
                  
                </tr>            
            <?php
            }
              pg_close($dbconn);   
            ?>          
            </table>
        </div>  
   </div>  <!– fin container — >    
 
             
</div>	
</body>
</html>