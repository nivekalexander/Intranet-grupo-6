	function ObjAjax()
	{
		var xmlhttp=false;
 		try 	   {			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");	  } 
		catch (e)  { try 	  {	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); }
 					catch (E) {	xmlhttp = false;  } }
 		if (!xmlhttp && typeof XMLHttpRequest!='undefined') 
  				   {			xmlhttp = new XMLHttpRequest();     	          }
		return xmlhttp;
	}

	function BorrarTelefono(id)
	{
		var result = document.getElementById('tview');

		const ajax = new XMLHttpRequest(); 
		ajax.open("POST","main.php",true); 
		ajax.onreadystatechange = function (){
												if( ajax.readyState == 4 ) 
												{
													if( ajax.status == 200 )
													{

														result.innerHTML = ajax.responseText;

													}
													else
													{
														console.log("Ups, Me equivoque;");
													}
												}
											 };

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("ctrl=telefono&acti=eliminar&id="+id);
	}

	function InsertTelefono()
	{
		var result = document.getElementById('tview');

		var numero 	= document.formtelefono.numero.value;
		var id 		= document.formtelefono.id.value;

		const ajax = new XMLHttpRequest(); 
		ajax.open("POST","main.php",true); 
		ajax.onreadystatechange = function (){
												if( ajax.readyState == 4 ) 
												{
													if( ajax.status == 200 ) 
													{

														result.innerHTML = ajax.responseText;

													}
													else
													{
														console.log("Ups, Me equivoque;");
													}
												}
											 };

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("ctrl=telefono&acti=insertar&numero="+numero);

		document.getElementById('formtelefono').reset();
	}



function EditarTelefono(id,nombre){

		document.formtelefono.id.value		= id;
		document.formtelefono.numero.value 	= nombre;
		document.getElementById("btnguardar").value = "Actualizar";

		document.getElementById("btnguardar").setAttribute("onclick", "UpdateTelefono();");
	}

function UpdateTelefono(){

		var result = document.getElementById('tview');

		var numero 	= document.formtelefono.numero.value;
		var id 		= document.formtelefono.id.value;

		document.getElementById('formtelefono').reset();

		const ajax = new XMLHttpRequest(); 
		ajax.open("POST","main.php",true); 
		ajax.onreadystatechange = function (){
												if( ajax.readyState == 4 ) 
												{
													if( ajax.status == 200 ) 
													{
														result.innerHTML = ajax.responseText;
														document.getElementById("btnguardar").value = "Guardar";


													}
													else { console.log("Ups, Me equivoque;"); }
												}
											 };
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("ctrl=telefono&acti=actualizar&numero="+numero+"&id="+id);

		document.getElementById("btnguardar").setAttribute("onclick", "InsertTelefono();");

}