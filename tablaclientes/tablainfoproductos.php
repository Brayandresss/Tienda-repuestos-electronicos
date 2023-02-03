         <div class="row"  > 
             <div class="col-sm-12">
             <h2>Lista de productos </h2>
            
              <table class="table table-hover table-condensed table-bordered">
                <tr>
                  <td>Nombre</td>
                  <td >Precio</td>
                </tr>  
                
           <?php
                 include("../php/conn.php"); //$dbconn 
                 $sql="SELECT nombre,precio FROM productos ";
                 $resul=pg_query($dbconn,$sql);
                 
             while($ver=pg_fetch_row($resul)) 
            {
           ?>
                <tr>
                  <td>  <?php echo $ver[0] ?> </td>
                  <td> $ <?php echo $ver[1] ?></td>
 

                </tr>            
            <?php
            }
            ?>
                            
              </table>
            </div>