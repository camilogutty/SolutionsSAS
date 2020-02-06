<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>REPORTE 1</h2>

 
<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>NOMBRE</th>
				<th>APELLIDOS</th>
				<th>DOCUMENTO</th>
				<th>VIGAS DE ACERO (Kg)</th>
				<th>ARENA (Kg)</th>
				<th>CEMENTO (Kg)</th>
				<th>LADRILLO (Kg)</th>
			</tr>
		</thead>

		<?php
			
			foreach ($matrizReporte1 as $registro) {
				echo "<tr><td>" . $registro["Nombre"] . "</td>";
				echo "<td>" . $registro["Apellidos"] . "</td>";
				echo "<td>" . $registro["Identificacion"] . "</td>";
				echo "<td>" . $registro["VigasAcero"] . "</td>";
				echo "<td>" . $registro["Arena"] . "</td>";
				echo "<td>" . $registro["Cemento"] . "</td>";
				echo "<td>" . $registro["Ladrillo"] . "</td>";
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