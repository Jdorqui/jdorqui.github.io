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
