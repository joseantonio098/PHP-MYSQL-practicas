//Práctica con Ajax de un JSON externo
const btn = document.getElementById('btn_cargar_usuarios');
const loader = document.getElementById('loader');

btn.addEventListener('click',function(){

    //Creamos la petición
    let peticion = new XMLHttpRequest();
    peticion.open('GET','php/usuarios.php');

    //peticion.open('GET','http://www.json-generator.com/api/json/get/cfMcKOANrC?indent=2');
    //Archivo json externo

    loader.classList.add('active'); //Activamos el Spiner

    //Estados en Ajax
    peticion.onreadystatechange = function(){ //La función se ejecuta después de un cambio

        if(peticion.readyState == 4 && peticion.status == 200){
            // 2 ->Peticion recibida,  3->Peticion procesada, 4->Peticion finalizada
            // peticion.status == 200 -> todo correcto, peticion.status == 404 -> Error

            loader.classList.remove('active'); //Desactivamos el Spiner
        }
    }

    //La función se ejecuta cuando la petición ya cargó
    peticion.onload = function(){
        //Traemos todo los datos y lo convertimos a JSON(arreglo de objetos)
        let datos = JSON.parse(peticion.responseText);

        //--------1era forma de recorrer datos del arreglo (forEach)
        // datos.forEach(persona => {
        //     let elemento = document.createElement('tr');
        //     elemento.innerHTML += ("<td>" + persona.id + "</td>");
        //     elemento.innerHTML += ("<td>" + persona.nombre + "</td>");
        //     elemento.innerHTML += ("<td>" + persona.edad + "</td>");
        //     elemento.innerHTML += ("<td>" + persona.pais + "</td>");
        //     elemento.innerHTML += ("<td>" + persona.correo + "</td>");

        //     document.getElementById('tabla').appendChild(elemento);
        // });

        //--------2da forma de recorrer datos del arreglo (for)
        for(let i = 0; i<datos.length; i++){
            let elemento = document.createElement('tr');
            elemento.innerHTML += ("<td>" + datos[i].id + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].nombre + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].edad + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].pais+ "</td>");
            elemento.innerHTML += ("<td>" + datos[i].correo + "</td>");

            document.getElementById('tabla').appendChild(elemento);
        }
    }

    //Enviamos la petición
    peticion.send();
});
