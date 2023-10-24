<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <!--icono burger-->
    <link rel="shortcut icon" href="../../css/imagenes/favicon.png" type="">

    <!--archivo css-->
    <link rel="stylesheet" type="text/css" href="../../css/styleRegistro.css"/>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../../script.js"></script>

</head>

<body>
    

    <!------------------>
    <!----FORMULARIO---->
    <!------------------>
    <div class="background-area">
        <div class="background-capa">
            <ul class="menu">
                <nav class="option-menu">
                    <a href="index_controlador.php" class="menu-link">Volver a Inicio</a>
                </nav>
            </ul>
            <div class="content-area">
                <form action="../Controlador/registro_controlador.php" class="form-registro" method="POST">
                    <h1>CREA TU CUENTA</h1>
                    <nav class="error-registro"></nav>
                    <label>Nombre</label><br>
                    <input type="text" name="nombre" placeholder="Introduce tu nombre" maxlength="12" required><br>
                    <label>Contraseña</label><br>
                    <input type="password" name="clave" placeholder="Introduce una contraseña de 6 caracteres, con mínimo 1 número, 1 letra minúscula y otra mayúscula." maxlength="10" required"><br>
                    <label>Correo electrónico</label><br>
                    <input type="email" name="correo" placeholder="Introduce tu correo electrónico" required><br>
                    <label>Provincia</label><br>
                    <select name="provincia" size="1">
                        <option value='Almería' >Almería</option>
                        <option value='Cádiz' >Cádiz</option>
                        <option value='Córdoba' >Córdoba</option>
                        <option value='Granada' >Granada</option>
                        <option value='Huelva' >Huelva</option>
                        <option value='Jaén' >Jaén</option>
                        <option value='Málaga' >Málaga</option>
                        <option value='Sevilla' >Sevilla</option>
                    </select>
                    <label>Ciudad</label><br>
                    <input type="text" name="ciudad" placeholder="Introduce tu ciudad" required>
                    <label>Dirección</label><br>
                    <input type="text" name="direccion" placeholder="Introduce tu dirección y el número de vivienda" required>
                    <label>Teléfono</label><br>
                    <input type="text" name="telefono" placeholder="Introduce tu teléfono" maxlength="9" required pattern="\d{9}"><br>
                    
                    <?php include 'registro_error.php'; ?>
                    
                    <nav class="iniSesion">
                         <a href="inicioSesion_controlador.php" class="iniSesion-link">¿Ya tienes una cuenta? Iniciar Sesion</a>
                    </nav>
                    <button type="submit" name="enviar-reg" class="button-reg">REGISTRARME</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>