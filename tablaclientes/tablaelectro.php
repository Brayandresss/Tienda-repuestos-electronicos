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
                  <td>Código</td>
                  <td>Serie</td>
                  <td>Fecha</td>
                  <td>Tipo</td>
                  <td>Falla</td>
                  <td>Modelo</td>
                  <td>marca</td>
                  <td>CI cliente</td>
       
                  <td>Editar</td>
                  <td>Eliminar</td>                  
                </tr>  
                
           <?php
                 include("../php/conn.php"); //$dbconn 
                 $sql="SELECT * FROM electrodomestico ";
                 $resul=pg_query($dbconn,$sql);
                 
                 
            while($ver=pg_fetch_row($resul)) 
            {
            $datos=$ver[0]."||".
                   $ver[1]."||".
                   $ver[2]."||".
                   $ver[3]."||".
                   $ver[4]."||".
                   $ver[5]."||".     
                   $ver[6]."||".                                                    
                   $ver[7];                	
           ?>
                <tr>
                  <td> <?php echo $ver[0] ?> </td>
                  <td> <?php echo $ver[1] ?></td>
                  <td> <?php echo $ver[2] ?></td>	
                  <td> <?php echo $ver[3] ?></td>
                  <td> <?php echo $ver[4] ?></td>
                  <td> <?php echo $ver[5] ?></td>	
                  <td> <?php echo $ver[6] ?></td>
                  <td> <?php echo $ver[7] ?></td>                  
                  
                  <td>
                   <button class="btn btn-warning  glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" 
                   onclick="agregaform2('<?php echo $datos ?>')">
                   </button>
                  </td>
                  <td>
                   <button class="btn btn-danger glyphicon glyphicon-remove"> </button>	
                  </td>
                </tr>            
            <?php
            }
            ?>
                            
              </table>
            </div>