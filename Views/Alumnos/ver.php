<div class="container">
<?php
	if(mysqli_num_rows($datos) > 0){
 ?>
	<table class="table table-striped">
		<thead class=" thead-dark">
		<tr>
			<th scope="col">alumno alumno</th>
			<th scope="col">Unidad 1</th>
			<th scope="col">Unidad 2</th>
			<th scope="col">Unidad 3</th>
			<th scope="col">Unidad 4</th>
			<th scope="col">Eliminar</th>
		</tr>

		</thead>
		<tbody>
			<?php
			while ($fila=mysqli_fetch_assoc($datos)) {
			  ?>
			<tr>
				<td scope="col"><?php echo $fila['nombre']; ?></td>
				<td scope="col">rr</td>
				<td scope="col">un</td>
				<td scope="col">un3</td>
				<td scope="col">un</td>

				<td scope="col"><a class="btn btn-outline-danger" href="<?php echo URL?>Calificaciones/eliminar/<?php echo $fila['id_usuario']?>">eliminar</a></td>

			</tr> <?php } ?>
		</tbody>

	</table>
<?php } ?>
</div>
