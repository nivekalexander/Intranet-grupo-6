function Ficha(id) {

    var result = document.getElementById('');
    const ajax = new XMLHttpRequest();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                result.innerHTML = ajax.responseText;
            } else {
                console.log("Ups, Me equivoque;");
            }
        }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=x&acti=x&id=" + id);

}

function BuscarPrograma(){

    var result = document.getElementById("tview");

    var materialapoyo=document.getElementById("materialapoyobuscar").value;

    
    const ajax = new XMLHttpRequest();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                result.innerHTML = ajax.responseText;
            } else {
                console.log("Ups, Me equivoque;");
            }
        }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=grupos&acti=buscar&id="+materialapoyo);
    

}
