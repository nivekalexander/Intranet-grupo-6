<?php  $mysqli = new mysqli('localhost', 'root', '', 'proyecto'); ?>

<form name="formarea" id="formarea">
		
		<input type="text" name="id" hidden>

		<label for="nombre">Nombre Area</label>
		<br>
		<input type="text" name="nombre"><br>

		<label for="sede" name="sede">Sede</label><br>
		<select name="sede" id="sede" >
			<option value="0">Seleccionar</option>
				<?php
          		$query = $mysqli -> query ("SELECT * FROM tbl_sede");
          		while ($valores = mysqli_fetch_array($query)) {
            		echo '<option value="'.$valores[sed_id].'">'.$valores[sed_nombre].'</option>';
          		}
        		?>
		</select> <br><br>
		<input type="button" value="Grabar" id="btnguardar" onclick="InsertArea();">

</form>