// 2-----
// VARIABLES------------
const btn_cargar = document.getElementById('btn_cargar_usuarios');
const error_box = document.getElementById('error_box');
const tabla = document.getElementById('tabla');
const loader = document.getElementById('loader');
const formulario = document.getElementById('formulario');

let usuario_nombre;
let usuario_edad;
let usuario_pais;
let usuario_correo;

// FUNCIONES------------
function cargarUsuarios(){
    tabla.innerHTML = `<tr><th>ID</th><th>Nombre</th><th>Edad</th><th>Pais</th><th>Correo</th></tr>`; //Permite limpiar la tabla al recargar la página

    //Establecemos la pertición Ajax
    const peticion = new XMLHttpRequest();
    peticion.open('GET','php/usuarios.php')

    loader.classList.add('active'); //Activamos el Loader(Spiner)

    //Estados en Ajax
    peticion.onreadystatechange = function(){
        if(peticion.readyState == 4 && peticion.status == 200){

            loader.classList.remove('active'); //Removemos el Loader(Spiner)
        }
    }

    //Petición cargada
    peticion.onload = function(){
        const datos = JSON.parse(peticion.responseText);

        if(datos.error == true){ //Muestra los errores en pantalla (Mala conexión en la DATABASE)
            error_box.classList.add('active');
        }else{
            for(let i=0; i<datos.length; i++){
                const elemento = document.createElement('tr')
                elemento.innerHTML += `<td> ${datos[i].id} </td>`; 
                elemento.innerHTML += `<td> ${datos[i].nombre} </td>`; 
                elemento.innerHTML += `<td> ${datos[i].edad} </td>`; 
                elemento.innerHTML += `<td> ${datos[i].pais} </td>`; 
                elemento.innerHTML += `<td> ${datos[i].correo} </td>`; 

                tabla.appendChild(elemento);
            }
        }
    }
    peticion.send(); //Enviamos la petición
}

// 4-----
function agregarUsuarios(e){
    e.preventDefault();

    //Establecemos la pertición Ajax
    const peticion = new XMLHttpRequest(); 
    peticion.open('POST','php/insertar_usuario.php');

    //Relacionamos los valores para las variables
    usuario_nombre = formulario.nombre.value.trim();
    usuario_edad = parseInt(formulario.edad.value.trim());
    usuario_pais = formulario.pais.value.trim();
    usuario_correo = formulario.correo.value.trim();

    // Si se ha validado correctamente los campos(Imput)
    if(formulario_valido() == true){
        error_box.classList.remove('active');

        //IMPORTANTE!! ----> Enviar los datos de JS a PHP
        let parametros = 'nombre='+ usuario_nombre + '&edad='+ usuario_edad + '&pais=' + usuario_pais + '&correo=' + usuario_correo;

        //Siempre utilizar esta petición si se va  enviar datos
        peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 

        //Petición cargada
        peticion.onload = function(){
            //Traemos los datos ingresados
            cargarUsuarios();

            //Permite limpiar los campos(Input)
            formulario.nombre.value = '';
            formulario.edad.value = '';
            formulario.pais.value = '';
            formulario.correo.value = '';
        }

        peticion.send(parametros); //Enviamos de JS ---> PHP

    }else{
        error_box.classList.add('active');
        error_box.innerHTML = 'Por favor completa el formulario correctamente';
    }
}


// EVENTOS------------

btn_cargar.addEventListener('click', function(){
    cargarUsuarios();
})


// 4-----
formulario.addEventListener('submit', function(e){
    agregarUsuarios(e);
});


// Validamos las variables(Input)
function formulario_valido(){
    if(usuario_nombre == ''){
        return false;
    } else if(isNaN(usuario_edad)){
        return false;
    } else if(usuario_pais == ''){
        return false;
    } else if(usuario_correo == ''){
        return false;
    }
    return true;
}