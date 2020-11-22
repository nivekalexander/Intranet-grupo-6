<?php  $mysqli = new mysqli('localhost', 'root', '', 'proyecto'); ?>

<form name="formsede" id="formsede">
		
		<input type="text" name="id" hidden>

		<label for="nombre">Nombre Sede</label>
		<br>
		<input type="text" name="nombre"><br>

		<label for="ciudad" name="ciudad">Ciudad</label><br>
		<select name="ciudad" id="ciudad" >
			<option value="0">Seleccionar</option>
				<?php
          		$query = $mysqli -> query ("SELECT * FROM tbl_ciudad");
          		while ($valores = mysqli_fetch_array($query)) {
            		echo '<option value="'.$valores[ciu_id].'">'.$valores[ciu_nombre].'</option>';
          		}
        		?>
		</select> <br><br>
		<input type="button" value="Grabar" id="btnguardar" onclick="InsertSede();">

</form>