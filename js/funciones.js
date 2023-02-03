function agregardatos(cedula,nombre,apellido,direccion,telefono) 
{
    cadena= "cedula=" + cedula +  
            "&nombre=" + nombre + 
            "&apellido=" + apellido +
            "&direccion=" + direccion +           
            "&telefono=" + telefono ;
            
                         
    $.ajax({
      type:"POST",      
      url:"php/agregardatos.php",
      data:cadena,
      success:function (r)
      {
          
          if (r=1) {
          $('#tabla').load('tablaclientes/tablaclientes.php');	
          alertify.success("agregado con exito :)");	
          }else {	
                alertify.error("Fallo el servidor :(");	             
                }
          
      }
      
    
    });

}

function agregaform(datos) {
    
     d=datos.split('||');    
      $('#cedulau').val(d[0]);
      $('#nombreu').val(d[1]);
      $('#apellidou').val(d[2]);
      $('#direccionu').val(d[3]);
      $('#telefonou').val(d[4]);       
}

function agregaform2(datos) {
    
     d=datos.split('||');    
      $('#codigou').val(d[0]);
      $('#serieu').val(d[1]);
      $('#fechau').val(d[2]);
      $('#tipou').val(d[3]);     
      
      $('#fallau').val(d[4]);     
      $('#modelou').val(d[5]);    
      $('#marcau').val(d[6]);    
      $('#empleadou').val(d[7]);         
}

function actualizaDatos(datos) {
   
      cedula=$('#cedulau').val();
      nombre=$('#nombreu').val();
      apellido=$('#apellidou').val();
      direccion=$('#direccionu').val();
      telefono=$('#telefonou').val();   
         
    cadena= "cedula=" + cedula +  
            "&nombre=" + nombre + 
            "&apellido=" + apellido +
            "&direccion=" + direccion +           
            "&telefono=" + telefono ;                     	         	
    $.ajax({
      type:"POST", 
      data:cadena,  
         
      URL:"php/actualizaDatos.php",
      
         success:function(result) 
         {
               if (result == 1) 
               {
               $('#tabla').load('tablaclientes/tablaclientes.php');	
               alertify.success("Actualisado con exito :)");	
               }else {	
                     alertify.error("Fallo el servidor :(");	             
                     }            
         }                             
    }); 
}


function preguntarSiNo(cedula) {
   alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
                  function(){ eliminarDatos(cedula)  }
                , function(){ alertify.error('Cancel')});     
}

function eliminarDatos(cedula) 
{
 cadena="cedula=" +cedula;
        $.ajax({
        	    type:"POST",
        	    URL:"php/eliminarDatos.php",  	
        	    data:cadena,
  	          success:function (r) 
  	          {
  	            if(r==1){
  	            $('#tabla').load('tablaclientes/tablaclientes.php');
  	            alertify.success("Eliminado con exito!");
  	            }else {	
                     alertify.error("Fallo el servidor :(");	             
                    }    	           	         
  	        }
        }); 
 
}

