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


function BorrarNoticia(id,url)
{
    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea eliminar esta noticia?',
        buttons: {
            Confirmar: function () {
                $.alert('Se ha eliminado correctamente');

                    var result = document.getElementById('tview');

                    const ajax = new XMLHttpRequest(); 
                    ajax.open("POST","main.php",true); 
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
                    ajax.send("ctrl=noticia&acti=eliminar&id="+id+"&url="+url);
            },
            Cancelar: function () {
                $.alert('Has cancelado la eliminación');
            }
        }
    });
    
}


function InsertNoticia(){
    
    var paquete = new FormData();
    paquete.append('archivo',$('#file-news')[0].files[0]);

    var destino = "main.php?ctrl=noticia&acti=insertar";
    $.ajax({
        url: destino,        
        type: 'POST',
        contentType: false,
        data: paquete,
        processData: false,
        cache: false,
        success: function(resultado){
            document.getElementById('tview').innerHTML = resultado;
        },
        error: function(){
            alert('Algo anda mal');
        }
    });
    document.formnoticia.reset();
}

var urlEdit;

function EditarNoticia(id,url)
{
    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea editar esta noticia?',
        buttons: {
            Confirmar: function () {
                urlEdit = url;
                document.formnoticia.idnews.value = id;
                document.getElementById("subir-news").innerHTML = "Actualizar";
                //document.getElementById("subir-news").setAttribute("onclick", "UpdateNoticia();");
                $("#noticiaModal").modal("show");
            },
            Cancelar: function () {
                $.alert('Has cancelado la edición');
            }
        }
    });

            
}


function UpdateNoticia()
{

    var result = document.getElementById('tview');
    var id     = document.formnoticia.idnews.value;

    var paquete = new FormData();
    paquete.append('archivo',$('#file-news')[0].files[0]);

    var destino = "main.php?ctrl=noticia&acti=actualizar&id="+id+"&url="+urlEdit;
    $.ajax({
        url: destino,        
        type: 'POST',
        contentType: false,
        data: paquete,
        processData: false,
        cache: false,
        success: function(resultado){
            document.getElementById('tview').innerHTML = resultado;
        },
        error: function(){
            alert('Algo anda mal');
        }
    });
    $('#noticiaModal').modal('hide');
    document.formnoticia.reset();

    document.getElementById("subir-news").innerHTML = "Subir";
    //document.getElementById("subir-news").setAttribute("onclick", "InsertNoticia();");
    urlEdit = "";
}

/*
                             
function CancelarNoticia()
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
*/