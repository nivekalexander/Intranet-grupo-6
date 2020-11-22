<?php  $mysqli = new mysqli('localhost', 'root', '', 'proyecto'); ?>


<form name="formpersona" id="formpersona">
		
		<input type="text" name="id" hidden>

		<label for="titulo">Nombre</label><br>
		<input type="text" name="nombre"><br>
				
		<label for="descrp">Apellido</label><br>
		<input type="text" name="apellido"><br>
				

		<label for="direccion">Dirección</label><br>
		<input type="text" name="direccion"><br>
				
		<label for="correo">Correo</label><br>
		<input type="text" name="correo"><br>

		<label for="tipDoc" name="documento">Tipo Documento</label><br>
		<select name="tipDoc" id="tipDoc" >
			<option value="0">Seleccionar</option>
				<?php
          		$query = $mysqli -> query ("SELECT * FROM tbl_tipdocusu_tbl_usuario");
          		while ($valores = mysqli_fetch_array($query)) {
            		echo '<option value="'.$valores[tipDc_id].'">'.$valores[tipDc_tipIdntfccn].'</option>';
          		}
        		?>
		</select> <br>

		<label for="numero" name="documento">Numero</label><br>	
		<select name="numero" id="numero" >
			<option value="0">Seleccionar</option>
				<?php
          		$query = $mysqli -> query ("SELECT * FROM tbl_telefono");
          		while ($valores = mysqli_fetch_array($query)) {
            		echo '<option value="'.$valores[tel_id].'">'.$valores[tel_numero].'</option>';
          		}
        		?>
		</select> <br><br>
				
		<input id="btnguardar" type="button" value="Grabar" onclick="InsertPersona();">

</form>