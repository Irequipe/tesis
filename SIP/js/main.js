let anadirRedAdmin = document.querySelector("#anadir-nredadmin");
let divContenedor= document.querySelector("#div-contenedor");
let limiteDatos = 20;
let i = 2;



anadirRedAdmin.addEventListener('click', generarNuevosInputs);

    function generarNuevosInputs(){
        if(i < limiteDatos){
            const divCreado = document.createElement("div");
            const inputCreadoNombre = document.createElement("input");
            const inputCreadoDescripcion = document.createElement("input");


            inputCreadoNombre.type = "text";
            inputCreadoNombre.placeholder = 'Nombre del dato';

            inputCreadoDescripcion.type = "text";
            inputCreadoDescripcion.placeholder = 'Descripción del dato';

            inputCreadoNombre.classList.add('nombre-input' + i);
            inputCreadoDescripcion.classList.add('descripcion-input' + i);
            
            divContenedor.appendChild(divCreado);
            divCreado.appendChild(inputCreadoNombre);
            divCreado.appendChild(inputCreadoDescripcion);
            i +=1;
        } 
        else{
            alert('No puede ingresar más parametros')
        }
}

