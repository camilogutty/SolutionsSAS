<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>REPORTE 3</h2>

 
<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>VEHICULO #</th>
				<th>NOMBRE</th>
				<th>APELLIDOS</th>
				<th>IDENTIFICACIÓN</th>
				<th>CAPACIDAD</th>
				<th>FECHA VENCIMIENTO SOAT</th>
				<th>FECHA VENCIMIENTO TECNOMECÁNICA</th>
			</tr>
		</thead>

		<?php
			
			foreach ($matrizReporte3 as $registro) {
				echo "<tr><td>" . $registro["idVehiculo"] . "</td>";
				echo "<td>" . $registro["Nombre"] . "</td>";
				echo "<td>" . $registro["Apellidos"] . "</td>";
				echo "<td>" . $registro["Identificacion"] . "</td>";
				echo "<td>" . $registro["capacidad"] . "</td>";
				echo "<td>" . $registro["fechaVenSoat"] . "</td>";
				echo "<td>" . $registro["fechaVenTecno"] . "</td>";
			?>
			
	
</tr>

<?php
			}
			

		?>
	</table>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>