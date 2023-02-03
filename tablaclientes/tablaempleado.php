
         <div class="row"  > 
             <div class="col-sm-12">
            
              <table class="table table-hover table-condensed table-bordered">
                 <caption>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo" > 
                    Agregar nuevo 
                      <span class="glyphicon glyphicon-plus"></span>                 
                    </button>
                 </caption> 
                <tr>
                  <td>Cedula</td>
                  <td>Nombre</td>
                  <td>Apellido</td>
                  <td>Dirección</td>
                  <td>Teléfono</td>
                  <td>Cargo</td>
                  <td>Contraseñan</td>                  
                 
               
                  <td>Editar</td>
                  <td>Eliminar</td>                  
                </tr>  
                
           <?php
           

                 include("../php/conn.php"); //$dbconn 
                 $sql="SELECT * FROM empleado";
                 $resul=pg_query($dbconn,$sql);
        
           
                 
            while($ver=pg_fetch_row($resul)) 
            {
            $datos=$ver[0]."||".
                   $ver[1]."||".
                   $ver[2]."||".
                   $ver[3]."||".
                   $ver[4]."||".
                   $ver[5];
                 
           ?>
                <tr>
                  <td> <?php echo $ver[0] ?> </td>
                  <td> <?php echo $ver[1] ?></td>
                  <td> <?php echo $ver[2] ?></td>	
                  <td> <?php echo $ver[3] ?></td>
                  <td> <?php echo $ver[4] ?></td>
                  <td> <?php echo $ver[5] ?></td>
                  <td> <?php echo $ver[6] ?></td>                  
                  <td>
                   <button class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
                   Editar
                   </button>
                  </td>
                  <td>
                   <button class="btn btn-danger" onclick="preguntarSiNo('<?php echo $ver[0] ?>')">Elininar</button>	
                  </td>
                </tr>            
            <?php
            }
            ?>
                            
              </table>
            </div>