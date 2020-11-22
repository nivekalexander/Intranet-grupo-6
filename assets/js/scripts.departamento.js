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

	function BorrarDpto(id)
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
		ajax.send("ctrl=departamento&acti=eliminar&id="+id);
	}

	function InsertDpto()
	{
		var result = document.getElementById('tview');

		var nombr 	= document.formdepartamento.nombre.value;
		var paisid  = document.getElementById('paisid').value;	

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
		ajax.send("ctrl=departamento&acti=insertar&nombre="+nombr+"&paisid="+paisid);

		document.getElementById('formdepartamento').reset();
	}



function EditarDpto(id,nombre,paisid){

		document.formdepartamento.id.value		= id;
		document.formdepartamento.nombre.value 	= nombre;
		document.getElementById('paisid').value  = paisid;

		document.getElementById("btnguardar").value = "Actualizar";
;		document.getElementById("btnguardar").setAttribute("onclick", "UpdateDpto();");
	}

function UpdateDpto(){

		var result = document.getElementById('tview');

		var nombre	= document.formdepartamento.nombre.value;
		var paisid  = document.getElementById('paisid').value;
		var id 		= document.formdepartamento.id.value;

		document.getElementById('formdepartamento').reset();

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
		ajax.send("ctrl=departamento&acti=actualizar&nombre="+nombre+"&paisid="+paisid+"&id="+id);

		document.getElementById("btnguardar").setAttribute("onclick", "InsertDpto();");

}