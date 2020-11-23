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


function BorrarNoticia(id)
{
    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea eliminar este noticia?',
        buttons: {
            confirm: function () {
                $.alert('Se ha eliminado correctamente');

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
                    ajax.send("ctrl=noticia&acti=eliminar&id="+id);
            },
            cancel: function () {
                $.alert('Has cancelado la eliminación');
            }
        }
    });
    
}


function Insertnoticia()
{
    var result = document.getElementById('tview');

    var titulo   = document.formnoticia.titulo.value;
    var descrp   = document.formnoticia.descrp.value;
    var fchcre   = document.formnoticia.fchcre.value;
    var fchfin   = document.formnoticia.fchfin.value;
    var usuid    = document.formnoticia.usuid.value;
    var ficid    = document.formnoticia.ficid.value;

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
    ajax.send("ctrl=noticia&acti=insertar&titulo="+titulo+"&descrp="+descrp+"&fchcre="+fchcre+"&fchfin="+fchfin+"&usuid="+usuid+"&ficid="+ficid);

    document.getElementById('formnoticia').reset();
}





function Editarnoticia(id,titulo,descrp,fchcre,fchfin,usuid,ficid)
{

    document.formnoticia.id.value 	  = id;
    document.formnoticia.titulo.value = titulo;
    document.formnoticia.descrp.value = descrp;
    document.formnoticia.fchcre.value = fchcre;
     document.formnoticia.fchfin.value = fchfin;
    document.formnoticia.usuid.value  = usuid;
    document.formnoticia.ficid.value  = ficid;
    
    document.getElementById("btnguardar").value = "Actualizar";
    document.getElementById("btnguardar").setAttribute("onclick", "Updatenoticia();");
    
    // Cambiar la propiedad DEL FORMULARIO desde javascript de ONSUBMIT() ONCLICK() CAMBIE  -> UPDATEUSUARIO() al boton guardar
}


function Updatenoticia()
{

    var result = document.getElementById('tview');

    var titulo  = document.formnoticia.titulo.value;
    var descrp  = document.formnoticia.descrp.value;
    var fchcre  = document.formnoticia.fchcre.value;
    var fchfin  = document.formnoticia.fchfin.value;
    var usuid   = document.formnoticia.usuid.value;
    var ficid   = document.formnoticia.ficid.value;
    var id   	= document.formnoticia.id.value;

    document.getElementById('formnoticia').reset();

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
    ajax.send("ctrl=noticia&acti=actualizar&titulo="+titulo+"&descrp="+descrp+"&fchcre="+fchcre+"&fchfin="+fchfin+"&usuid="+usuid+"&ficid="+ficid+"&id="+id);

    document.getElementById("btnguardar").setAttribute("onclick", "Insertnoticia();");
    document.getElementById('formnoticia').reset();								 
}
                             
function Cancelarnoticia()
{
    var result = document.getElementById('tview');

    document.getElementById('formnoticia').reset();

    const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
    ajax.open("POST","main.php",true); // Se usa el Controlador General y su Accion
    ajax.onreadystatechange = function (){
                                            if( ajax.readyState == 4 ) // Estado 4 es DONE = TERMINADO
                                            {
                                                if( ajax.status == 200 ) // Estado 200 es SUCCESS = CORRECTO
                                                {
                                                    result.innerHTML = ajax.responseText;
                                                    

                                                    // limpiar el formulario
                                                    // document.getElementById("formusuario") --> onlick --> insertusuario()

                                                }
                                                else { console.log("Ups, Me equivoque;"); }
                                            }
                                         };
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");							 
}