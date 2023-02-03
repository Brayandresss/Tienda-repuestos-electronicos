<!DOCTYPE HTML>
<html>

  <head long="es" >
    <link rel="stylesheet" href="css/estiloproducto.css">
    <link rel="stylesheet" href="css/busqueda.css">
     <link rel="stylesheet" href="css/login.css">
   
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"> </script>
    <script type="text/javascript" src="js/login.js"> </script>    
    
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >   
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="alertify/css/themes/default.css">
    
    <script  src="bootstrap/js/bootstrap.js"> </script>  
   
    
    <title>El repuesto</title>
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

			<li class="first-item">
				<a href="menu.php">
					<img src="img/home.jpg" alt="" class="imagen">
					<span class="text-item">Inicio</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="#">
					<img src="img/web.jpg" alt="" class="imagen">
					<span class="text-item">Productos</span>
					<span class="down-item"></span>
				</a>
			</li>

		</ul>

   </nav>
  <br>

       
          <div class="container">
                 
                 <div id="tabla">
                 </div> <!– fin id tabla — >  
       
                <script type="text/javascript" >
                 $(document).ready(function () {
             	     $('#tabla').load('tablaclientes/tablainfoproductos.php');
                 });
                </script> 
                		            
          </div>    <!– fin container — >     
       
   
</div>	
</body>
</html>