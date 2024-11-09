var pantallaPrincipal = document.getElementById("principal");
var divForm = document.getElementById("container");
var divloggin = document.getElementById("loggin");
var divwindows = document.getElementById("windows");
var bgBody = document.getElementById("body");
var backgroundMusic = document.getElementById("backgroundMusic");

pantallaPrincipal.style.display = "block";
divForm.style.display = "none";
divloggin.style.display = "none";
divwindows.style.display = "none";

bgBody.style.backgroundColor = "#181322";

if (sessionStorage.getItem("formShown") === "true") {
    pantallaPrincipal.style.display = "none";
    divForm.style.display = "block";
    bgBody.style.backgroundColor = "#2a223d";
    backgroundMusic.volume = 0.40;
    backgroundMusic.play();
} else {
    pantallaPrincipal.style.display = "block";
    divForm.style.display = "none";
    divloggin.style.display = "none";
    divwindows.style.display = "none";
    bgBody.style.backgroundColor = "#181322";
}

function mostrarform() {
    pantallaPrincipal.style.display = "none";
    divForm.style.display = "block";
    bgBody.style.backgroundColor = "#2a223d";
    backgroundMusic.volume = 0.40;
    backgroundMusic.play();
    
}

function mostrarloggin() {
    pantallaPrincipal.style.display = "none";
    divForm.style.display = "none";
    divloggin.style.display = "block";
}

function mostrarwindows() {
    pantallaPrincipal.style.display = "none";
    divForm.style.display = "none";
    divloggin.style.display = "none";
    divwindows.style.display = "block";
}

document.addEventListener('DOMContentLoaded', function () {
    // Seleccionar el formulario por su id
    const formulario = document.getElementById('form');
    
    // Añadir un evento submit para el formulario
    formulario.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevenir el comportamiento por defecto del formulario

        // Crear un objeto FormData con los datos del formulario
        const formData = new FormData(formulario);

        // Realizar un fetch para enviar los datos a comprobar.php
        fetch('comprobar.php', {
            method: 'POST',
            body: formData // Enviar los datos del formulario como cuerpo de la solicitud
        })
        .then(response => response.text()) // Recibir la respuesta como texto
        .then(data => {
            const comprobarDiv = document.getElementById('comprobar');
            
            // Mostrar la respuesta en el div, el color depende del contenido recibido
            comprobarDiv.innerHTML = data; // El PHP ya devuelve el contenido con el color adecuado
        })
        .catch(error => {
            // En caso de error
            console.error('Error:', error);
            document.getElementById('comprobar').innerHTML = `<p style="color: red;">Ha ocurrido un error al procesar el formulario.</p>`;
        });
    });
});
