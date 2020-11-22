<?php  $mysqli = new mysqli('localhost', 'root', '', 'proyecto'); ?>

<form name="formdepartamento" id="formdepartamento">
		
		<input type="text" name="id" hidden>

		<label for="nombre">Nombre Departamento</label>
		<br>
		<input type="text" name="nombre"><br>

		<label for="paisid" name="paisid">Pais</label><br>
		<select name="paisid" id="paisid" >
			<option value="0">Seleccionar</option>
				<?php
          		$query = $mysqli -> query ("SELECT * FROM tbl_pais");
          		while ($valores = mysqli_fetch_array($query)) {
            		echo '<option value="'.$valores[pai_id].'">'.$valores[pai_nombre].'</option>';
          		}
        		?>
		</select> <br><br>
		<input type="button" value="Grabar" id="btnguardar" onclick="InsertDpto();">

</form>