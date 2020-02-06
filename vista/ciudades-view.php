<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>VER CIUDADES</h2>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-default">AGREGAR</a>
  <a href="index.php" class="btn btn-default">VOLVER</a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="modelo/agregarCiudad.php">
  <div class="form-group">
    <label for="name">Ciudad</label>
    <input type="text" class="form-control" name="ciudad" required>
  </div>
  

  <button type="submit" class="btn btn-default">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php //include "php/tabla.php"; ?>

<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Ciudad</th>
			</tr>
		</thead>

		<?php
			
			foreach ($matrizCiudad as $registro) {
				echo "<tr><td>" . $registro["ciudad"] . "</td>";
			?>
			<td style="width:150px;">
			<a href="vista/editarCiudad.php?id=<?php echo $registro["idCiudad"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $registro["idCiudad"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $registro["idCiudad"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="modelo/eliminarCiudad.php?id="+<?php echo $registro["idCiudad"];?>;

			}

		});
		</script>
	</td>
</tr>

<?php
			}
			

		?>
	</table>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>