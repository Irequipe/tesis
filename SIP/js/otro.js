let btnVerDetalle = document.querySelector("#btnVerDetalle");
let cardDetalle = document.querySelector("#cardDetalle");
let cerrarDetalle = document.querySelector("#cerrarCard");


btnVerDetalle.addEventListener('click', abrirVerDetalle);

function abrirVerDetalle(){
    cardDetalle.classList.remove('inactive');
}

cerrarDetalle.addEventListener('click', cerrarVerDetalle);

function cerrarVerDetalle(){
    cardDetalle.classList.add('inactive');
}