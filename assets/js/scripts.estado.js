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

function BorrarEstado(id)
{
    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea eliminar este tipo de programa de formación?',
        buttons: {
            confirm: function() {
                $.alert('Se ha eliminado correctamente');

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
                    ajax.send("ctrl=estado&acti=eliminar&id="+id);
                },
                cancel: function() {
                $.alert('Has cancelado la eliminación');
            }
        }
    });

}

function InsertarEstado()
{
    var result = document.getElementById('tview');

    var nombre 	= document.formestado.nombre.value;
    

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
    ajax.send("ctrl=estado&acti=insertar&nombre="+nombre);

    document.getElementById('formestado').reset();
}



function EditarEstado(id,nombre){

    document.formestado.id.value		= id;
    document.formestado.nombre.value 	= nombre;

    document.getElementById("btnguardar").innerHTML = "Actualizar";
}

function UpdateEstado(){

    var result = document.getElementById('tview');

    var nombre 	= document.formestado.nombre.value;
    var id 		= document.formestado.id.value;

    document.getElementById('formestado').reset();

    const ajax = new XMLHttpRequest(); 
    ajax.open("POST","main.php",true); 
    ajax.onreadystatechange = function (){
                                            if( ajax.readyState == 4 ) 
                                            {
                                                if( ajax.status == 200 ) 
                                                {
                                                    result.innerHTML = ajax.responseText;
                                                    


                                                }
                                                else { console.log("Ups, Me equivoque;"); }
                                            }
                                         };
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    ajax.send("ctrl=estado&acti=actualizar&nombre="+nombre+"&id="+id);

   

}
function CancelarEstado() {

    document.getElementById('formestado').reset();

    document.getElementById("btnguardar").innerHTML = "Crear";

}