<!DOCTYPE HTML>
<html>

  <head long="es" >
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
 
    <link rel="stylesheet" href="css/adminempleados.css"> 
    <link rel="stylesheet" href="css/salir.css">
    
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="alertify/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="select2/css/select2.css">    
    
    
    <script  src="js/jquery-3.3.1.min.js"> </script>
    <script type="text/javascript" src="js/login.js"> </script>  
    <script  src="bootstrap/js/bootstrap.js"> </script>  
    <script  src="alertify/alertify.js"> </script> 
    <script type="text/javascript" src="js/funciones.js"> </script>  
<script src="select2/js/select2.js"></script>   
    <title>El repuesto</title>
    <meta charset="UTF-8">  

  </head>

 <body > 
 

<div> 
        <div id="open_close"> Administrador</div>  
        <form id="login" action="menu.php" method = "post">
            <input type="submit" value="Salir" id="Salir" >    
        </form> 
        	
   <section class="title">
   <h1> Electrónica el repuestos </h1>       
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
				<a href="adminproductros.php">
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
 



   <div class="contenedor">  
     <div id="general">      
      
         <div id="menudiv">
         
         <div id="menu2">

					 <ul>
               
            <li id="ingresos"> <a href="#" > Ingresos </a>  </li>
            <li id="consultas"> <a href="#"> Consultas </a></li>
            <li id="lista"> <a href="#">Lista de empleados</a> </li>
                                	
           </ul> 
               
        </div>
        
        </div> 
     
       <div id="contenido">
         <h3 class="h3">Ingreso de un nuevo Empleados</h3>
        <img src="img/cliente.png" width="248" height="248" class="cliente">	   
       
       <form action="<?php echo $_SERVER['PHP_SELF']?>" method = "post" >
         <table border="0px">
             <tr>
             <td width="23%">  Cedula: </td>  
             <td>
             	<input type="text" name="cedula" size="30" REQUIRED > 
             
             </td>         
             </tr> 
           
             <tr>
             <td>  Nombre: </td>  
             <td>
             	<input type="text" name="nombre" size="30" REQUIRED > 
             </td>         
             </tr>  
                          <tr>
             <td>  Apellido: </td>  
             <td>
             	<input type="text" name="apellido" size="30" REQUIRED > 
             </td>         
             </tr> 
           
             <tr>
             <td>  Dirección:  </td>  
             <td>
             <input type="text" name="direccion" size="30" REQUIRED >
             </td>         
             </tr>         
 
             <tr>
             <td>  Teléfono:  </td>  
             <td>
             <input type="number" name="telefono" size="30" REQUIRED >
             </td>         
             </tr>     
             
             <tr>
             <td>  cargo:  </td>  
             <td>
             <input type="text" name="telefono" size="30" REQUIRED >
             </td>         
             </tr>  
            
             <tr>
             <td>  contraseña:  </td>  
             <td>
             <input type="text" name="telefono" size="30" REQUIRED >
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
                <h2 >Lista de Empleados</h2>
                 <div id="tabla">
                 </div> <!– fin id tabla — >  
       
                <script type="text/javascript" >
                 $(document).ready(function () {
             	     $('#tabla').load('tablaclientes/tablaempleado.php');
             	      $('#buscador').load('php/buscador.php');
                 });
                </script> 
                		            
          </div>    <!– fin container — > 
        </div> <!– fin contenido2 — > 
      
      </div> <!-- contenedor -->  
      
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
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
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
   $(document).ready(function() {
     $('#guardarnuevo').click(function () {
        cedula=$('#cedula').val();
        nombre=$('#nombre').val();
        apellido=$('#apellido').val();
        direccion=$('#direccion').val();
        telefono=$('#telefono').val();
        
        agregardatos(cedula,nombre,apellido,direccion,telefono);   	
      });
                  
     $('#actualizadatos').click(function () {
        actualizaDatos();	
      });
      
      
   });
 </script>

 <?php
  

if(isset($_POST['guardar'])){
  	
       $cedulap= $_POST['cedula'];
       $nombrep= $_POST['nombre'];
       $apellidop= $_POST['apellido'];
       $direccionp= $_POST['direccion'];	
       $telefonop= $_POST['telefono'];

       include("php/conn.php"); //$dbconn 
       $crear="select insertar_cliente('$cedulap','$nombrep','$apellidop','$direccionp','$telefonop')";

       pg_query($dbconn,$crear);
       pg_close($dbconn);		
   }

if(isset($_POST['consulta'])){
  	
echo "consulta";
   }


?>

