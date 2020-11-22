<form name="formanuncio" id="formanuncio" onSubmit="event.preventDefault();">
		
		<input type="text" name="id" hidden>

		<label for="titulo">Titulo</label><br>
		<input type="text" name="titulo" id="titulo"><br>
				
		<label for="descrp">Descripcion</label><br>
		<input type="text" name="descrp" id="descrp"><br>
				
		<label for="fchcre">Fecha Creacion</label><br>
		<input type="date" name="fchcre" id="fchcre"><br>
				
		<label for="fchfin">Fecha Fin</label><br>
		<input type="date" name="fchfin" id="fchfin"><br>
				
		<label for="usuid">id Usuario</label><br>
		<input type="text" name="usuid" id="usuid"><br>

		<label for="ficid">Ficha id</label><br>
		<input type="text" name="ficid" id="ficid"><br>

		<input id="btnguardar" type="button" value="Grabar" onclick="InsertAnuncio();">

</form>