<?php 
	
	    include("conn.php"); //$dbconn 
       $sql="SELECT * FROM cliente ";
       $resul=pg_query($dbconn,$sql);
 ?>
<br><br>
<div class="row">
	<div class="col-sm-8"></div>
	<div class="col-sm-4">
		<label>Buscador</label>
		<select id="buscadorvivo" class="form-control input-sm">
			<option value="0">Seleciona uno</option>
			<?php
				  while($ver=pg_fetch_row($resul)): 
			 ?>
				<option value="<?php echo $ver[0] ?>">
					<?php echo $ver[1]." ".$ver[2] ?>
				</option>

			<?php endwhile; ?>

		</select>
	</div>
</div>


	<script type="text/javascript">
		$(document).ready(function(){
			$('#buscadorvivo').select2();

			$('#buscadorvivo').change(function(){
				$.ajax({
					type:"post",
					data:'valor=' + $('#buscadorvivo').val(),
					url:'php/crearsession.php',
					success:function(r){
						$('#tabla').load('componentes/tabla.php');
					}
				});
			});
		});
	</script>