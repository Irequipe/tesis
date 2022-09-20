let btnVerDetalle1 = document.querySelector("#btnVerDetalle1");
let cardDetalle1 = document.querySelector("#cardDetalle1");
let cerrarDetalle1 = document.querySelector("#cerrarCard1");


let btnVerDetalle2 = document.querySelector("#btnVerDetalle2");
let cardDetalle2 = document.querySelector("#cardDetalle2");
let cerrarDetalle2 = document.querySelector("#cerrarCard2");

let btnVerDetalle3 = document.querySelector("#btnVerDetalle3");
let cardDetalle3 = document.querySelector("#cardDetalle3");
let cerrarDetalle3 = document.querySelector("#cerrarCard3");

// let btnVerDetalle = document.querySelector("#btnVerDetalle");
// let cardDetalle = document.querySelector("#cardDetalle");
// let cerrarDetalle = document.querySelector("#cerrarCard");

// let btnVerDetalle = document.querySelector("#btnVerDetalle");
// let cardDetalle = document.querySelector("#cardDetalle");
// let cerrarDetalle = document.querySelector("#cerrarCard");

// let btnVerDetalle = document.querySelector("#btnVerDetalle");
// let cardDetalle = document.querySelector("#cardDetalle");
// let cerrarDetalle = document.querySelector("#cerrarCard");

// let btnVerDetalle = document.querySelector("#btnVerDetalle");
// let cardDetalle = document.querySelector("#cardDetalle");
// let cerrarDetalle = document.querySelector("#cerrarCard");

// let btnVerDetalle = document.querySelector("#btnVerDetalle");
// let cardDetalle = document.querySelector("#cardDetalle");
// let cerrarDetalle = document.querySelector("#cerrarCard");

// let btnVerDetalle = document.querySelector("#btnVerDetalle");
// let cardDetalle = document.querySelector("#cardDetalle");
// let cerrarDetalle = document.querySelector("#cerrarCard");



btnVerDetalle1.addEventListener('click', abrirVerDetalle1);

function abrirVerDetalle1() {
    cardDetalle1.classList.remove('inactive');
}

cerrarDetalle1.addEventListener('click', cerrarVerDetalle1);

function cerrarVerDetalle1() {
    cardDetalle1.classList.add('inactive');
}



btnVerDetalle2.addEventListener('click', abrirVerDetalle2);

function abrirVerDetalle2() {
    cardDetalle2.classList.remove('inactive');
}

cerrarDetalle2.addEventListener('click', cerrarVerDetalle2);

function cerrarVerDetalle2() {
    cardDetalle2.classList.add('inactive');
}


btnVerDetalle3.addEventListener('click', abrirVerDetalle3);

function abrirVerDetalle3() {
    cardDetalle3.classList.remove('inactive');
}

cerrarDetalle3.addEventListener('click', cerrarVerDetalle3);

function cerrarVerDetalle3() {
    cardDetalle3.classList.add('inactive');
}