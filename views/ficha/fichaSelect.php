<?php 
if(isset($respuesta)){
	echo "<div class='alert alert-danger' role='alert'>
			El usuario ya existe
		  </div>";
}
?>

<div class="table-responsive">
	<table id="tableficha" class="table table-striped">
	<!-- Cabecera de la Tabla -->
	<thead class="thead-dark">
		<tr>
			
            <th  scope="col">Codigo</th>
            <th  scope="col">Fecha Creacion</th>
            <th  scope="col">Fecha Fin</th>
            <th  scope="col">Jornada</th>
            <th  scope="col">Modalidad</th>
            <th  scope="col">Oferta</th>
            <th  scope="col">Programa De Formacion</th>
			<th  scope="col">Editar</th>
			<th  scope="col">Eliminar</th>

		</tr>
	</thead>

	<!-- Cuerpo de la Tabla -->
	<tbody>
		<?php foreach ( $this->ficha->Select() as $filas ): ?>
				
			<?php  $grupal = "'".$filas->fic_codigo."','".$filas->fic_feccrn."','".$filas->fic_fecfn."','".$filas->fic_tijid."','".$filas->fic_modid."','".$filas->fic_tofid."','".$filas->fic_pfoid."'"; ?>

			<tr>
				
                <td scope="row"><?php echo $filas->fic_codigo;?></td>
                <td scope="row"><?php echo $filas->fic_feccrn;?></td>
                <td scope="row"><?php echo $filas->fic_fecfn;?></td>
                <td scope="row"><?php echo $filas->tij_nombre;?></td>
                <td scope="row"><?php echo $filas->mod_nombre;?></td>
                <td scope="row"><?php echo $filas->tof_nombre;?></td>
                <td scope="row"><?php echo $filas->pfo_nompro;?></td>


				<td scope="row"><button class="btn-rounded btn" data-toggle="modal" data-target="#modalficha" data-dismiss="modal" onclick="EditarFicha(<?php echo $grupal; ?>)">Editar</button></td>
				<td scope="row"><button class="btn-rounded btn" onclick="BorrarFicha(<?php echo $filas->fic_codigo;?>);">Eliminar</button></td>

			</tr>
				
		<?php endforeach; ?>
	</tbody>
	</table>
</div>