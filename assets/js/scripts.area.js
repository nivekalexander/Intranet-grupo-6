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

	function BorrarArea(id)
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
		ajax.send("ctrl=area&acti=eliminar&id="+id);
	}

	function InsertArea()
	{
		var result = document.getElementById('tview');

		var nombr 	= document.formarea.nombre.value;
		var sede  = document.getElementById('sede').value;	


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
		ajax.send("ctrl=area&acti=insertar&nombre="+nombr+"&sede="+sede);

		document.getElementById('formarea').reset();
	}



function EditarArea(id,nombre,sede){

		document.formarea.id.value		= id;
		document.formarea.nombre.value 	= nombre;
		document.getElementById('sede').value  = sede;

		document.getElementById("btnguardar").value = "Actualizar";
;		document.getElementById("btnguardar").setAttribute("onclick", "UpdateArea();");
	}

function UpdateArea(){

		var result = document.getElementById('tview');

		var nombre	= document.formarea.nombre.value;
		var sede  = document.getElementById('sede').value;
		var id 		= document.formarea.id.value;

		document.getElementById('formarea').reset();

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
		ajax.send("ctrl=area&acti=actualizar&nombre="+nombre+"&sede="+sede+"&id="+id);

		document.getElementById("btnguardar").setAttribute("onclick", "InsertArea();");

}