<?php  $mysqli = new mysqli('localhost', 'root', '', 'proyecto'); ?>

<form name="formciudad" id="formciudad">
		
		<input type="text" name="id" hidden>

		<label for="nombre">Nombre Ciudad</label>
		<br>
		<input type="text" name="nombre"><br>

		<label for="departament" name="departament">Departamento</label><br>
		<select name="departament" id="departament" >
			<option value="0">Seleccionar</option>
				<?php
          		$query = $mysqli -> query ("SELECT * FROM tbl_departamento");
          		while ($valores = mysqli_fetch_array($query)) {
            		echo '<option value="'.$valores[dep_id].'">'.$valores[dep_nombre].'</option>';
          		}
        		?>
		</select> <br><br>
		<input type="button" value="Grabar" id="btnguardar" onclick="InsertCiudad();">

</form>