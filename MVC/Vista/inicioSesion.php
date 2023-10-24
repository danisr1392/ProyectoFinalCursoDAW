<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--iconos-->
    <script src="https://kit.fontawesome.com/96ceb6889f.js" crossorigin="anonymous"></script>

    <!--icono burger-->
    <link rel="shortcut icon" href="../../css/imagenes/favicon.png" type="">

    <!--archivo CSS-->
    <link rel="stylesheet" type="text/css" href="../../css/styleInicioSesion.css" />
    
    <!--archivo Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../../script.js"></script>

</head>

<body>

    <?php
        
    ?>
    
    <div class="background-area">
        <div class="background-capa">
            <ul class="menu">
                <nav class="option-menu">
                    <a href="index_controlador.php" class="menu-link">Volver a Inicio</a>
                </nav>
            </ul>
                <div class="content-area">
                    <form class="form-registro" method="POST">
                        <h1>INICIAR SESIÓN</h1>
                        <nav class="error-registro"></nav>
                        <label>Correo electrónico</label><br>
                        <input type="text" name="correo" placeholder="Introduce tu correo electrónico" required><br>
                        <label>Contraseña</label><br>
                        <input type="password" name="clave" placeholder="Introduce tu contraseña" required><br>
                        <?php include 'inicioSesion_error.php'; ?>
                        <nav class="registro">
                         <a href="../Controlador/registro_controlador.php" class="registro-link">¿No tienes una cuenta? Regístrate</a>
                        </nav>
                        <button type="submit" name="ini-sesion" class="button-reg">INICIAR SESIÓN</button>
                    </form>
                </div>
        </div>
    </div>

</body>

</html>