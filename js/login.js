$(document).ready(function(){

     $("#login").hide();
       
     $("#open_close").click(function(){
  	     
  	     $("#login").slideToggle();
     });
     
     
     
     $("#contenido").hide();
     $("#contenido2").hide();     
   
     
     
      $("#ingresos").click(function(){
  	   
  	   $("#contenido").slideToggle();
  	   $("#contenido2").hide();
  	    $("#contenido3").hide();
  	     $("#contenido4").hide();
     });
     
     
      $("#consultas").click(function(){
  	     
  	     $("#contenido3").slideToggle(); 
       $("#contenido4").slideToggle();   	     
  	      $("#contenido").hide();
  	      $("#contenido2").hide();
   
     });      
       
      $("#lista").click(function(){
  	     
  	     $("#contenido2").slideToggle();
  	     $("#contenido").hide();
  	     $("#contenido3").hide();
  	      $("#contenido4").hide();
     }); 
     
            
      $("#buscar").click(function(){
  	     
  	     $("#contenido3").slideToggle();
  	     $("#contenido3").slideToggle();
  	     $("#contenido").hide();
  	     $("#contenido2").hide();
  	     
     });     
     
})
