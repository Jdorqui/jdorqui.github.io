<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Desk-Topia</title>
        <link rel="icon" href="img/icon.png">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link rel="stylesheet" href="style.css">
        <audio id="backgroundMusic" src="music/Desk-Topia Main Theme.mp3" loop></audio>
    </head>
    <body id="body">

        <div id="principal">
            <img src="img/icon.png" alt="icono" id="icon" onclick="mostrarform()">
            <h1 id="inicio-texto">Pulsa para iniciar</h1>
        </div>

        <div id="container">
            <form action="comprobar.php" method="POST" enctype="multipart/form-data" id="form">
                <div id="form-columns">
                    <div id="form-column-left">
                        <div id="usuario-group">
                            <label for="usuario" id="usuario-label">Usuario:</label>
                            <input type="text" name="usuario" id="usuario" required>
                        </div>
                        <div id="password-group">
                            <label for="password" id="password-label">Contrasena:</label>
                            <input type="password" name="password" id="password" required>
                        </div>
                        <div id="nombre-group">
                            <label for="nombre" id="nombre-label">Nombre Completo:</label>
                            <input type="text" name="nombre" id="nombre" required>
                        </div>
                        <div id="email-group">
                            <label for="email" id="email-label">Correo Electronico:</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div id="telefono-group">
                            <label for="telefono" id="telefono-label">Numero Telefonico:</label>
                            <input type="tel" name="telefono" id="telefono" required>
                        </div>
                        <div id="genero-group">
                            <label id="genero-label">Genero:</label>
                            <div id="form-radio-group">
                                <label class="radio-label">
                                    Hombre:
                                    <input type="radio" name="genero" value="Masculino" id="masculino">
                                </label>
                                <label class="radio-label">
                                    Mujer:
                                    <input type="radio" name="genero" value="Femenino" id="femenino">
                                </label>
                                <label class="radio-label">
                                    Otro:
                                    <input type="radio" name="genero" value="Otro" id="otro">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div id="form-column-right">
                        <div id="fechanacimiento-group">
                            <label for="fechanacimiento" id="fechanacimiento-label">Fecha de Nacimiento:</label>
                            <input type="date" name="fechanacimiento" id="fechanacimiento" required>
                        </div>
                        <div id="habilidades-group">
                            <label id="habilidades-label">Habilidades Profesionales:</label>
                            <div id="form-checkbox-group">
                                <label>
                                    Programacion:
                                    <input type="checkbox" name="habilidades[]" value="Programacion" id="programacion">
                                    
                                </label>
                                <label>
                                    Diseno:
                                    <input type="checkbox" name="habilidades[]" value="Diseno" id="diseno">
                                </label>
                                <label>
                                    Marketing:
                                    <input type="checkbox" name="habilidades[]" value="Marketing" id="marketing">
                                </label>
                                <label>
                                    Escritura:
                                    <input type="checkbox" name="habilidades[]" value="Escritura" id="escritura">
                                </label>
                                <label>
                                    Soporte Tecnico:
                                    <input type="checkbox" name="habilidades[]" value="Soporte Tecnico" id="soporte">
                                </label>
                            </div>
                        </div>
                        <div id="foto-group">
                            <label for="foto" id="foto-label">Foto de Perfil:</label>
                            <input type="file" name="foto" id="foto">
                        </div>
                        <div id="pais-group">
                            <label for="pais" id="pais-label">Pais de Residencia:</label>
                            <select name="pais" id="pais" required>
                                <option value="Espana">Espana</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Brasil">Brasil</option>
                                <option value="Chile">Chile</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Peru">Peru</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Panama">Panama</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Republica Dominicana">Republica Dominicana</option>
                                <option value="Belice">Belice</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                                <option value="Surinam">Surinam</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Estados Unidos">Estados Unidos</option>
                                <option value="Canada">Canada</option>
                                <option value="Francia">Francia</option>
                                <option value="Italia">Italia</option>
                                <option value="Alemania">Alemania</option>
                                <option value="Reino Unido">Reino Unido</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Rusia">Rusia</option>
                                <option value="China">China</option>
                                <option value="India">India</option>
                                <option value="Japon">Japon</option>
                                <option value="Australia">Australia</option>
                                <option value="Nueva Zelanda">Nueva Zelanda</option>
                                <option value="Sudafrica">Sudafrica</option>
                                <option value="Egipto">Egipto</option>
                                <option value="Arabia Saudita">Arabia Saudita</option>
                                <option value="Israel">Israel</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Iran">Iran</option>
                                <option value="Afganistan">Afganistan</option>
                            </select>
                        </div>
                        <div id="descripcion-group">
                            <label for="descripcion" id="descripcion-label">Descripcion Profesional:</label>
                            <textarea name="descripcion" id="descripcion" maxlength="200"></textarea>
                        </div>
                    </div>
                </div>
                <div id="terminos-check">
                    <input type="checkbox" name="terminos" id="terminos" required>
                    <label for="terminos">Acepta los terminos y condiciones</label>
                </div>
                <button type="submit" name="submit" id="btn-submit" ">Registrarse</button>
            </form>
            <div id="comprobar">
            </div>
        </div>
        
        <div id="loggin">
            <div id="usuario-group">
                <label for="usuario" id="usuario-label">Usuario:</label>
                <input type="text" name="usuario" id="usuario" required>
            </div>
            <div id="password-group">
                <label for="password" id="password-label">Contrasena:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" name="submit" id="btn-submit" style="width: 423px;" onclick="mostrarwindows()">Iniciar Sesion</button>
        </div>

        <div id="windows" class="hidden">
            <div id="desktop">
                <div id="mycomputer" class="icon">
                    <img src="img/mycomputer-icon.png" alt="PC" />
                    <p>Este PC</p>
                </div>
                <div id="recyclebin" class="icon">
                    <img src="img/recycle-bin.png" alt="Papelera"/>
                    <p>Papelera</p>
                </div>
                <div id="documents" class="icon">
                    <img src="img/folder.png" alt="Documentos" />
                    <p>Documentos</p>
                </div>
            </div>
            <div id="taskbar">
                <div class="task-item">
                    <img src="img/windowsicon.png" alt="Inicio">
                </div>
            </div>
        </div>
        <script src="js.js"></script>
    </body>
</html>