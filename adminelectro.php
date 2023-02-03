<!DOCTYPE HTML>
<html>

  <head long="es" >
 
    <link rel="stylesheet" href="css/adminelectro.css"> 
    <link rel="stylesheet" href="css/salir.css">
    
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="alertify/css/themes/default.css">
    
    <script  src="js/jquery-3.3.1.min.js"> </script>
    <script type="text/javascript" src="js/login.js"> </script>  
    <script  src="bootstrap/js/bootstrap.js"> </script>  
    <script  src="alertify/alertify.js"> </script> 
    <script type="text/javascript" src="js/funciones.js"> </script>  
    
    <title>menu1</title>
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
 
    
     <div id="general">      
      
         <div id="menudiv">
         
         <div id="menu2">
            <ul>
               
            <li id="ingresos"> <a href="#" > Ingresos </a>  </li>
            <li id="consultas"> <a href="#"> Consultas </a></li>
            <li id="lista"> <a href="#">Lista de electrodomesticos</a> </li>
                           	
           </ul>     		
        </div>
        
        </div> 
     
       <div id="contenido">
      	<h3 class="h3">Ingreso de un nuevo electrodoméstico</h3>
      <form action="<?php echo $_SERVER['PHP_SELF']?>" method = "post" >
         <table border="0px">
 
             <tr>
             <td>  Cedula del cliente:  </td>  
             <td>
             <input type="text" name="cliente" size="30" maxlength="10"  REQUIRED
             onkeypress="return solonumeros(event)"  onblur="agregaform()"  >
             </td>         
             </tr>
                          
             <tr>
             <td width="30%">  Codigo: </td>  
             <td>
             	<input type="text" name="codigo" size="30" maxlength="10"  REQUIRED> 
             
             </td>         
             </tr> 
           
             <tr>
             <td>  Número de serie: </td>  
             <td>
             	<input type="number" name="serie" size="30" maxlength="10"  REQUIRED> 
             </td>         
             </tr>  
                          <tr>
             <td>  Fecha: </td>  
             <td>
             <input type="date" name="fecha" size="30">
             </td>         
             </tr> 
           
             <tr>
             <td>  Tipo  electrodoméstico:  </td>  
             <td>
             <input type="text" name="tipo" size="30" maxlength="30"  REQUIRED>
             </td>         
             </tr>  	           
                 
             <tr>
             <td>  Falla:  </td>  
             <td>
             <input type="text" name="falla" size="30" maxlength="30"  REQUIRED>
             </td>         
             </tr>         
 
             <tr>
             <td>  Modelo:  </td>  
             <td>
             <input type="text" name="modelo" size="30" maxlength="20"  REQUIRED>
             </td>         
             </tr>    
             
             <tr>
             <td>  Marca:  </td>  
             <td>
             <input type="text" name="marca" size="30" maxlength="20"  REQUIRED>
             </td>         
             </tr>   

                
             <tr>
             <td>  Nombre del empleado:  </td>
             
             <td>
             
                         <select name="empleado">
                         
             	                   <?php
             	                   include("php/conn.php"); //$dbconn 
             	                   $resultados = pg_query($dbconn, "SELECT ci_empleado,nombre FROM empleado ");
                                  while($consulta = pg_fetch_array($resultados)) 
                                  {                  
                                  ?>             	     
             	                   <option value="<?php echo $consulta['ci_empleado'];  ?>"> <?php echo $consulta['nombre'];  ?>/<?php echo $consulta['ci_empleado'];  ?> / </option>
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
                  <h2>Tabla de electrodomésticos</h2>
                 <div id="tabla">
                 </div> <!– fin id tabla — >  
       
                <script type="text/javascript" >
                 $(document).ready(function () {
             	     $('#tabla').load('tablaclientes/tablaelectro.php');
                 });
                </script> 
                		            
          </div>    <!– fin container — > 
        </div> <!– fin contenido2 — > 
      
      
<div id="contenido3">


  <div>
    <center>
        <h1 class="h1busqueda">Consultas de Electrodomesticos </h1> 
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method = "post">    
              <input class="inputbusqueda" type="text" name="codigo" placeholder="Ingrese su número de orden" 
                maxlength="6"  REQUIRED>
              <input  class="inputbusqueda" type="submit" name="buscar" value="buscar" >
        </form>  
    </center>               
  </div>       
      
    <?php   
   error_reporting(E_ALL);
error_reporting(E_ERROR |  E_PARSE);
ini_set('display_errors', 1);

      $codigo = $_POST["codigo"];     
   ?>
   
       <div class="row"  > 
             <div class="col-sm-12">  
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
	        $sql="SELECT e.tipo_electrodomestico,e.falla,i.estado,i.entrega,i.informe_tecnico ,i.precio,r.nombre ,e.ci FROM electrodomestico 	AS e
	                                        join informe_reparacion as i on e.cod_electro=i.cod_electro
 	                                        join repuesto as r on i.cod_rep=r.cod_rep
	                                        WHERE e.cod_electro = '$codigo'";                 
                                               
           $resul=pg_query($dbconn,$sql);
                                  
            while($ver=pg_fetch_row($resul)) 
            {
            	$ci=$ver[7];
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
   
    
</div>    <!– fin container3 — >  



<div id="contenido4">
  
       <div class="row"  > 
       <h3>cliente</h3>
             <div class="col-sm-12">
         
          <table class="table table-hover table-condensed table-bordered">
                <tr>
                  <td>Cédula</td>
                  <td>Nombre</td>
                  <td>Apellido</td>
                  <td>Dirección</td>
                  <td>Telefono</td>                 
                </tr>  
                
           <?php
           include("php/conn.php"); //$dbconn                           
	        $sql="SELECT * FROM cliente WHERE ci='$ci' ";
	                                                                    
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
      
       <label>Codigo:</label>
       <input type="text" name="" id="codigou" class="form-control input-sm">
       <label>Serie:</label>
       <input type="text" name="" id="serieu" class="form-control input-sm">
       <label>Fecha</label>
       <input type="text" name="" id="fechau" class="form-control input-sm">
       <label>tipo</label>
       <input type="text" name="" id="tipou" class="form-control input-sm">
       <label>Falla</label>
       <input type="text" name="" id="fallau" class="form-control input-sm">       
       <label>Modelo</label>
       <input type="text" name="" id="modelou" class="form-control input-sm">       
       <label>Marca</label>
       <input type="text" name="" id="marcau" class="form-control input-sm">       
       <label>Empleado</label>
       <input type="text" name="" id="empleadou" class="form-control input-sm">
              
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
  	
      $cedulap= $_POST['cedula'];
      
      include("php/conn.php"); //$dbconn       
      $resultados= pg_query($dbconn, "SELECT * FROM cliente	WHERE ci='$cedulap'");
                          
      $filas=pg_num_rows($resultados);
           
      if($filas > 0) {
      	             
        $codigop= $_POST['codigo'];
        $seriep= $_POST['serie'];
        $fechap= $_POST['fecha'];
        $tipo= $_POST['tipo'];

        $fallap= $_POST['falla'];
        $modelop= $_POST['modelo'];
        $marcap= $_POST['marca'];
        $clientep= $_POST['cliente'];
        $empleadop= $_POST['empleado'];
        include("php/conn.php"); //$dbconn 
       $crear="select insertar_electrodomestico('$codigop','$seriep','$fecha','$tipo','$fallap','$modelop','$marcap')";          
       pg_query($dbconn,$crear);
                 
      }
      else {  	
  	      	 echo "<script>
                  alert('la  cédula ingresada no existe (registre un nuevo clientes)  ');
                  </script>"; 
 
     }
}


?>
