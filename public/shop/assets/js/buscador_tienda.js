

let SERVIDOR_PRODUCCION = 'http://mydibu.com/shop-general';
let SERVIDOR_LOCAL      =  'http://localhost:8000/shop-general';

$(document).ready(initJs());

function initJs() {

    let btnFiltrar   = document.getElementById("btnFiltrar");
    let inputFiltrar = document.getElementById("inputFiltrar");

    btnFiltrar.addEventListener("click",function (e) {

        e.preventDefault();

        let inputFiltrar = document.getElementById("inputFiltrar");

        let value = inputFiltrar.value;

        SERVIDOR_LOCAL = SERVIDOR_LOCAL + '?q='+value ;

        window.location = SERVIDOR_LOCAL;

    });

    inputFiltrar.addEventListener("keypress",function(e) {

        charBoard = e.keyCode;

        if (charBoard === 13) {
            SERVIDOR_LOCAL = SERVIDOR_LOCAL + "?q="+inputFiltrar.value;
            console.log(SERVIDOR_LOCAL);
            window.location = SERVIDOR_LOCAL;
        }
    });

}


