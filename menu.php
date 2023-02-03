<!DOCTYPE HTML>
<html>

  <head long="es" >
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/busqueda.css">
     <link rel="stylesheet" href="css/login.css">
   
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"> </script>
    <script type="text/javascript" src="js/login.js"> </script>    
    
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

        <div id="open_close"> Iniciar sesión   </div>  
        <form id="login" action="php/validacion_datos.php" method = "post" >
 
            <label> Usuario </label>
            <input type="text" id="nombre" placeholder="Usuario" name="usuario" pattern="[A-Za-z0-9_-]{1,30}" REQUIRED>
            <label> Contraseña </label>
            <input type="password" id="pass" placeholder="Contraseña" name="contrasena" pattern="[A-Za-z0-9_-]{1,30}"  REQUIRED>
            <input type="submit" value="Enviar" id="Enviar" >
    
        </form> 
        	
   <section class="title">
   <h1> Electrónica el repuesto </h1>       
   </section>


   
   <nav class="navegacion" >

		<ul class="menu">
			<li class="first-item">
				<a href="#">
					<img src="img/home.jpg" alt="" class="imagen">
					<span class="text-item">Inicio</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="productos.php">
					<img src="img/web.jpg" alt="" class="imagen">
					<span class="text-item">Productos</span>
					<span class="down-item"></span>
				</a>
			</li>

		</ul>

   </nav>
   
     
 <br>
 <div class="slider">
     <ul>
         <li> <img src="img2/ee1.jpg" alt=""> </li>        
         <li> <img src="img2/ee2.jpg" alt=""> </li>      
         <li> <img src="img2/ee5.jpg" alt=""> </li>
         <li> <img src="img2/ee4.jpg" alt=""> </li>                              
     </ul>           
  </div> 
   
  <div>
    <center>
        <h1 class="h11"> información acerca de su equipo </h1> 
        <form action="busquedaElectro.php" method = "post">    
              <input class="inputbusqueda" type="text" name="ci" placeholder="Ingrese su número de cédula" 
               onkeypress="return solonumeros(event)" maxlength="10"  REQUIRED>
              <input class="inputbusqueda" type="submit" name="buscar" value="buscar" >
        </form>  
    </center>               
  </div> 
       



</div>	
</body>
</html>