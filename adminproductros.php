<!DOCTYPE HTML>
<html>

  <head long="es" >
   
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="alertify/css/themes/default.css">
    
    <script  src="js/jquery-3.3.1.min.js"> </script>
    <script  src="bootstrap/js/bootstrap.js"> </script>  
    <script  src="alertify/alertify.js"> </script> 
    
   
    <script type="text/javascript" src="js/funciones.js"> </script>  
    <script type="text/javascript" src="js/login.js"> </script>  
    <link rel="stylesheet" href="css/adminproductos.css"> 
    <link rel="stylesheet" href="css/salir.css">
        
    
    <title>El repuesto</title>
    <meta charset="UTF-8">  



    <script>
      function solonumeros(e){
       	
         key=e.keyCode || e.which;
         teclado=String.fromCharCode(key);
         numeros="1234567890";	
  	      especiales="8-37-46";//array
  	      teclado_especial=false;
  	      
         for(var i in especiales) 
         {
         	 
         	 if (key==especiales[i]) {
             teclado_especial=true;         	 
         	 } 
         }           	 
         	 if(numeros.indexOf(teclado)==-1 && !teclado_especial){
             return false;         	 
         	 } 
                 	      
       }  
    </script>

  </head>

 <body > 
<div> 

        <div id="open_close"> Administrador</div>  
        <form id="login" action="menu.php" method = "post">
            <input type="submit" value="Salir" id="Salir" >    
        </form> 
        	
   <section class="title">
   <h1> Electrónica el repuestos (Administrador) </h1>       
   </section>


   
   <nav class="navegacion" >

		<ul class="menu">

			<li class="first-item">
				<a  href="adminCIienteIngreso.php">
					<img src="img/us.jpg" alt="" class="imagen">
					<span class="text-item">Clientes</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="adminelectro.php">
					<img src="img/p3.jpg" alt="" class="imagen">
					<span class="text-item">Electrodomésticos</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="#">
					<img src="img/servicios.jpg" alt="" class="imagen">
					<span class="text-item">Productos</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="adminrepuestos.php">
					<img src="img/p2.jpg" alt="" class="imagen">
					<span class="text-item">Repuestos</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="adminempleados.php">
					<img src="img/p2.jpg" alt="" class="imagen">
					<span class="text-item">Empleados</span>
					<span class="down-item"></span>
				</a>
			</li>

		</ul>

   </nav>   
</div>	
 
    
     <div id="general">      
      
         <div id="menudiv">
         
         <div id="menu2">
            <ul>
               
            <li id="ingresos"> <a href="#" > Ingresos </a>  </li>
            <li id="consultas"> <a href="#"> Consultas </a></li>
            <li id="lista"> <a href="#">Lista</a> </li>
            <li id=""> <a href="php/pdfproductos.php">Imprimir lista</a> </li>                    	
           </ul>     
        </div>
        
        </div> 
     
       <div id="contenido">
       <h3 class="h3">Ingreso de un nuevo poducto</h3>
      <form action="<?php echo $_SERVER['PHP_SELF']?>" method = "post" >
         <table border="0px">
             <tr>
             <td width="30%">  Codigo: </td>  
             <td>
             	<input type="text" name="codigo" size="20" maxlength="4"  REQUIRED> 
             
             </td>         
             </tr> 
           
             <tr>
             <td>  Nombre: </td>  
             <td>
             	<input type="text" name="nombre" size="20" maxlength="30"  REQUIRED> 
             </td>         
             </tr>  
                          <tr>
             <td>  Cantidad: </td>  
             <td>
             	<input type="number" name="cantidad" size="20" maxlength="3"  REQUIRED
             	onkeypress="return solonumeros(event)"> 
             </td>         
             </tr> 
           
             <tr>
             <td>  Precio:  </td>  
             <td>
             <input type="number" name="precio" size="20" maxlength="3"  REQUIRED
             onkeypress="return solonumeros(event)">
             </td>         
             </tr>         
 
             <tr>
             <td>  Unidad:  </td>  
             <td>
             <input type="text" name="unidad" size="20" maxlength="3"  REQUIRED
             onkeypress="return solonumeros(event)">
             </td>         
             </tr>  
             
             <tr>
             <td>  Proveedor:  </td>  
             <td>
             
                         <select name="proveedor">
                         
             	                   <?php
             	                   include("php/conn.php"); //$dbconn 
             	                   $resultados = pg_query($dbconn, "SELECT ci_prove,empresa FROM proveedores ");
                                  while($consulta = pg_fetch_array($resultados)) 	
                                  {                  
                                  ?>             	     
             	                   <option value="<?php echo $consulta['ci_prove'];  ?>"> <?php echo $consulta['empresa'];  ?>/<?php echo $consulta['ci_prove'];  ?> / </option>
             	                   <?php
             	                   
             	                   }
             	                   ?>
                             </select> 
             
             </td>         
             </tr>               
                                                  
         </table>
      
         <center>
          <input class="guardar"type="submit" value="GUARDAR" name="guardar" > 
        </center> 
       </form>
     
      </div>      
     
      <div id="contenido2">
      
          <div class="container">
                 
                 <div id="tabla">
                 </div> <!– fin id tabla — >  
       
                <script type="text/javascript" >
                 $(document).ready(function () {
             	     $('#tabla').load('tablaclientes/tablaproductos.php');
                 });
                </script> 
                		            
          </div>    <!– fin container — > 
        </div> <!– fin contenido2 — > 
      


<div id="contenido3">

  <div>
    <center>
        <h1 class="h1busqueda">Consultas de productos </h1> 
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method = "post">    
              <input class="inputbusqueda" type="text" name="nombre" placeholder="Ingrese un nombre" 
                maxlength="20"  REQUIRED>
              <input  class="inputbusqueda" type="submit" name="buscar" value="buscar" >
        </form>  
    </center>               
  </div>       
      
    <?php   
    error_reporting(E_ALL);
error_reporting(E_ERROR |  E_PARSE);
ini_set('display_errors', 1);

      $nombre=$_POST['nombre']; 

   ?>
   
       <div class="row"  > 
             <div class="col-sm-12">
         
          <table class="table table-hover table-condensed table-bordered">
                <tr>
                  <td>Nombre</td>
                  <td>Cantidad</td>
                  <td>Precio</td>
                  <td>Unidad</td>
                               
                </tr>  
                
           <?php
           include("php/conn.php"); //$dbconn                           
	        $sql="SELECT nombre ,cantidad,precio,unidad,ci_prove FROM productos WHERE nombre='$nombre' ";
	                                                                    
           $resul=pg_query($dbconn,$sql);
                                  
            while($ver=pg_fetch_row($resul)) 
            {
            	
            	$ci=$ver[4];
           ?>
                <tr>
                  <td> <?php echo $ver[0] ?> </td>
                  <td> <?php echo $ver[1] ?></td>
                  <td> <?php echo $ver[2] ?></td>	
                  <td> <?php echo $ver[3] ?></td>
               
                  
                  <td>
                  </td>	                  
                  
                </tr>            
            <?php
            }
              pg_close($dbconn);   
            ?>          
            </table>
        </div>  
   </div>  <!– fin container //////////////////— >    
</div>    <!– fin container3 — >  



<div id="contenido4">
       <div class="row"  > 
             <div class="col-sm-12">
             <h3>proveedores  </h3>
            
          <table class="table table-hover table-condensed table-bordered">
                <tr>
                  <td>Empresa</td>
                  <td>Dirección</td>
                  <td>telefono</td>                 
                </tr>  
                
           <?php
           
           include("php/conn.php"); //$dbconn                           
	        $sql="SELECT empresa,direccion,telefono FROM proveedores WHERE ci_prove='$ci' ";
	                                                                
           $resul=pg_query($dbconn,$sql);
                                  
            while($ver=pg_fetch_row($resul)) 
            {
           ?>
                <tr>
                  <td> <?php echo $ver[0] ?> </td>
                  <td> <?php echo $ver[1] ?></td>
                  <td> <?php echo $ver[2] ?></td>	

                  
                </tr>            
            <?php
            }
              pg_close($dbconn);   
            ?>          
            </table>
        </div>  
   </div>  <!– fin container — >    
</div>    <!– fin container4 — >  




      
<!-- modal pra registros nuevos -->      
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="
myModalLabel" >
  <div class="modal-dialog modal-sm" role="document" >
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span
        aria-hidden="true"> &times;</span>  </button>
        <h4 class="modal-title" id="myModalLabel">Agregar</h4>        
        
      </div>

      <div class="modal-body">
       <label>Cedula:</label>
       <input type="text" name="" id="cedula" class="form-control input-sm">
       <label>Nombre:</label>
       <input type="text" name="" id="nombre" class="form-control input-sm">
       <label>Apellido:</label>
       <input type="text" name="" id="apellido" class="form-control input-sm">
       <label>Dirección</label>
       <input type="text" name="" id="direccion" class="form-control input-sm">
       <label>Teléfono</label>
       <input type="text" name="" id="telefono" class="form-control input-sm">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo"
        >Agregar
        </button>
        
      </div>

    </div>
  </div>
</div>                
        

<!-- modal pra edicion de datos -->      
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="
myModalLabel" >
  <div class="modal-dialog modal-sm"  role="document" >
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span
        aria-hidden="true"> &times;</span>  </button>
        <h4 class="modal-title" id="myModalLabel">Actualizar</h4>        
        
      </div>

      <div class="modal-body">
       <input type="text" hidden="" id="idpersona" name="">
       <label>Cedula:</label>
       <input type="text" name="" id="cedulau" class="form-control input-sm">
       <label>Nombre:</label>
       <input type="text" name="" id="nombreu" class="form-control input-sm">
       <label>Apellido:</label>
       <input type="text" name="" id="apellidou" class="form-control input-sm">
       <label>Dirección</label>
       <input type="text" name="" id="direccionu" class="form-control input-sm">
       <label>Teléfono</label>
       <input type="text" name="" id="telefonou" class="form-control input-sm">       
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
      
      </div>

    </div>
  </div>
</div>                
        
       


</div> <!-- general -->   
       
</body>
</html>

 <script type="text/javascript" >
   $(document).ready(function () {
     $('#guardarnuevo').click(function () {
        cedula=$('#cedula').val();
        nombre=$('#nombre').val();
        apellido=$('#apellido').val();
        direccion=$('#direccion').val();
        telefono=$('#telefono').val();
        
        agregardatos (cedula,nombre,apellido,direccion,telefono);   	
       	
     });
   });
 
 </script>

 <?php
  

if(isset($_POST['guardar'])){
  	
$cedulap= $_POST['codigo'];
$nombrep= $_POST['nombre'];
$apellidop= $_POST['cantidad'];
$direccionp= $_POST['precio'];
$telefonop= $_POST['unidad'];
$proveedorp= $_POST['proveedor'];


       include("php/conn.php"); //$dbconn 
       $crear="select incertar_productos('$cedulap','$nombrep','$apellidop','$direccionp','$telefonop','$proveedorp')";

       pg_query($dbconn,$crear);
       pg_close($dbconn);		
   }


?>
