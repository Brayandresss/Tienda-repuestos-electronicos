         <div class="row"  > 
             <div class="col-sm-12">
             <h2>Lista de productos </h2>
            
              <table class="table table-hover table-condensed table-bordered">
                <tr>
                  <td>Código</td>
                  <td>Nombre</td>
                  <td>Cantidad</td>
                  <td>Precio</td>
                  <td>Unidad</td>
                  <td>Proveedor</td>
                  <td>Editar</td>
                  <td>Eliminar</td> 
                </tr>  
                
           <?php
                 include("../php/conn.php"); //$dbconn 
                 $sql="SELECT cod_prod,nombre,cantidad,precio,unidad,ci_prove FROM productos ";
                 $resul=pg_query($dbconn,$sql);
                 
            while($ver=pg_fetch_row($resul)) 
            {
           ?>
                <tr>
                  <td>  <?php echo $ver[0] ?> </td>
                  <td>  <?php echo $ver[1] ?> </td>
                  <td>  <?php echo $ver[2] ?> </td>
                  <td>  <?php echo $ver[3] ?> </td>
                  <td>  <?php echo $ver[4] ?> </td>
                  <td>  <?php echo $ver[5] ?> </td>
                               
                  <td>
                   <button class="btn btn-danger glyphicon glyphicon-remove"> </button>	
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