<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>REPORTE 2</h2>

 
<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>VIGAS DE ACERO (Kg)</th>
				<th>ARENA (Kg)</th>
				<th>CEMENTO (Kg)</th>
				<th>LADRILLO (Kg)</th>
				<th>CIUDAD DESTINO</th>
				<th>DISTANCIA</th>
				<th>COSTO DE TRANSPORTE</th>
			</tr>
		</thead>

		<?php
			
			foreach ($matrizReporte2 as $registro) {
				echo "<tr><td>" . $registro["VigasAcero"] . "</td>";
				echo "<td>" . $registro["Arena"] . "</td>";
				echo "<td>" . $registro["Cemento"] . "</td>";
				echo "<td>" . $registro["Ladrillo"] . "</td>";
				echo "<td>" . $registro["ciudad"] . "</td>";
				echo "<td>" . $registro["distancia"] . "</td>";
				echo "<td>" . $registro["costo"] . "</td>";
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