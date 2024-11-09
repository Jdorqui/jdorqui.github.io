<?php
session_start();

// Variables para los errores y resultado
$errores = [];
$resultado = "";

// Lista de usuarios registrados (para ejemplo)
$usuarios_registrados = ['ejemplo1@gmail.com', 'ejemplo2@gmail.com'];

// Validación de nombre
$nombre = trim($_POST['nombre']);
if (empty($nombre) || !preg_match("/^[a-zA-ZaeiouAEIOUñÑ ]{3,50}$/", $nombre)) {
    $errores[] = "El nombre debe contener solo letras, tener entre 3 y 50 caracteres, y no incluir caracteres especiales.";
}

// Validación de correo
$email = trim($_POST['email']);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El correo electronico no tiene un formato valido.";
} elseif (in_array($email, $usuarios_registrados)) {
    $errores[] = "El correo electronico ya esta registrado.";
}

// Validación de telefono
$telefono = trim($_POST['telefono']);
if (!preg_match("/^\(\d{3}\) \d{3}-\d{4}$/", $telefono)) {
    $errores[] = "El numero de telefono debe seguir el formato (123) 456-7890.";
} elseif (strlen(preg_replace('/\D/', '', $telefono)) != 10) {
    $errores[] = "El numero de telefono debe contener 10 digitos.";
}

// Validación de fecha de nacimiento
$fecha_nacimiento = $_POST['fechanacimiento'];
if (empty($fecha_nacimiento)) {
    $errores[] = "La fecha de nacimiento es obligatoria.";
} else {
    $date_obj = date_create($fecha_nacimiento);
    if (!$date_obj) {
        $errores[] = "La fecha de nacimiento no es valida.";
    } else {
        $edad = date_diff($date_obj, date_create('today'))->y;
        if ($edad < 18) {
            $errores[] = "Debes tener al menos 18 años.";
        }
    }
}

// Validación de género
if (!isset($_POST['genero'])) {
    $errores[] = "Por favor, selecciona tu género.";
}

// Validación de habilidades
if (!isset($_POST['habilidades']) || count($_POST['habilidades']) == 0) {
    $errores[] = "Selecciona al menos una habilidad profesional.";
}

// Validación de la foto
if (!empty($_FILES['foto']['name'])) {
    $file_type = $_FILES['foto']['type'];
    $file_size = $_FILES['foto']['size'];
    if (!in_array($file_type, ['image/jpeg', 'image/png', 'image/jpg'])) {
        $errores[] = "La foto debe ser de tipo JPG o PNG.";
    }
    if ($file_size > 300 * 1024) {
        $errores[] = "El tamaño de la foto no debe superar los 300 KB.";
    }
}

// Validación de país
$pais = $_POST['pais'];
if (empty($pais)) {
    $errores[] = "Por favor, selecciona tu país de residencia.";
}

// Validación de descripción
$descripcion = trim($_POST['descripcion']);
if (strlen($descripcion) > 200) {
    $errores[] = "La descripción profesional no puede exceder los 200 caracteres.";
}

// Validación de términos y condiciones
if (!isset($_POST['terminos'])) {
    $errores[] = "Debes aceptar los términos y condiciones.";
}

// Responder según si hay errores o no
if (empty($errores)) {
    $resultado = "Registro exitoso para $nombre.";
    echo "<p style='color: green;'>$resultado</p>"; // Respuesta en verde
} else {
    $errores_texto = "<ul>";
    foreach ($errores as $error) {
        $errores_texto .= "<li>$error</li>"; // Mostrar cada error en una lista
    }
    $errores_texto .= "</ul>";
    echo "<div style='color: red;'>$errores_texto</div>"; // Respuesta en rojo
}

exit();
?>