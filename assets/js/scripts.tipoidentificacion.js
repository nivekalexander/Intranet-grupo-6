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


function BorrarTipoidentificacion(id)
{
    var result = document.getElementById('tview');

    const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
    ajax.open("POST","main.php",true); // Se usa el Controlador General y su Accion
    ajax.onreadystatechange = function (){
                                            if( ajax.readyState == 4 ) // Estado 4 es DONE = TERMINADO
                                            {
                                                if( ajax.status == 200 ) // Estado 200 es SUCCESS = CORRECTO
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
    ajax.send("ctrl=tipoidentificacion&acti=eliminar&id="+id);
}


function InsertTipoidentificacion()
{
    var result = document.getElementById('tview');

    var tipo   = document.formtipoidentificacion.tipo.value;
   
    document.getElementById("formtipoidentificacion").reset();

    const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
    ajax.open("POST","main.php",true); // Se usa el Controlador General y su Accion
    ajax.onreadystatechange = function (){
                                            if( ajax.readyState == 4 ) // Estado 4 es DONE = TERMINADO
                                            {
                                                if( ajax.status == 200 ) // Estado 200 es SUCCESS = CORRECTO
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
    ajax.send("ctrl=tipoidentificacion&acti=insertar&tipo="+tipo);
}





function EditarTipoidentificacion(id,tipo)
{
    document.formtipoidentificacion.tipo.value 		= tipo;
    document.formtipoidentificacion.id.value 			= id;

    

    document.getElementById("btnguardar").value = "Actualizar";
    document.getElementById("btnguardar").setAttribute("onclick", "UpdateTipoidentificacion();");
    // Cambiar la propiedad DEL FORMULARIO desde javascript de ONSUBMIT() ONCLICK() CAMBIE  -> UPDATEUSUARIO() al boton guardar
    

}


function UpdateTipoidentificacion()
{

    var result = document.getElementById('tview');

    var tipo 		= document.formtipoidentificacion.tipo.value;
    var id 			= document.formtipoidentificacion.id.value;

    

    const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
    ajax.open("POST","main.php",true); // Se usa el Controlador General y su Accion
    ajax.onreadystatechange = function (){
                                            if( ajax.readyState == 4 ) // Estado 4 es DONE = TERMINADO
                                            {
                                                if( ajax.status == 200 ) // Estado 200 es SUCCESS = CORRECTO
                                                {
                                                    result.innerHTML = ajax.responseText;
                                                    document.getElementById("btnguardar").value = "Guardar";
                                                    // limpiar el formulario
                                                    // document.getElementById("formusuario") --> onlick --> insertusuario()

                                                }
                                                else { console.log("Ups, Me equivoque;"); }
                                            }
                                         };
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    
    ajax.send("ctrl=tipoidentificacion&acti=actualizar&tipo="+tipo+"&id="+id);


    document.getElementById("btnguardar").setAttribute("onClick", "InsertTipoidentificacion();");

    document.getElementById("formtipoidentificacion").reset();
}