<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <!--icono burger-->
    <link rel="shortcut icon" href="css/imagenes/favicon.png" type="">

    <!--archivo css-->
    <link rel="stylesheet" type="text/css" href="css/styleRegistro.css"/>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>

</head>

<body>
    

    <!------------------>
    <!----FORMULARIO---->
    <!------------------>
    <div class="background-area">
        <div class="background-capa">
            <ul class="menu">
                <nav class="option-menu">
                    <a href="index.php" class="menu-link">Volver a Inicio</a>
                </nav>
            </ul>
            <div class="content-area">
                <form class="form-registro">
                    <h1>CREA TU CUENTA</h1>
                    <nav class="error-registro"></nav>
                    <label>Nombre</label><br>
                    <input type="text" name="nombre" placeholder="Introduce tu nombre" required><br>
                    <label>Apellido</label><br>
                    <input type="text" name="apellido" placeholder="Introduce tus apellidos" required><br>
                    <label>Usuario</label><br>
                    <input type="text" name="user" placeholder="Introduce tu nombre de usuario" required><br>
                    <label>Contraseña</label><br>
                    <input type="password" name="clave" placeholder="Introduce tu contraseña" required pattern=""><br>
                    <label>Correo electrónico</label><br>
                    <input type="email" name="correo" placeholder="Introduce tu correo electrónico" required><br>
                    <label>Dirección</label><br>
                    <input type="text" name="direccion" placeholder="Introduce tu dirección" required>
                    <label>Teléfono</label><br>
                    <input type="text" name="telefono" placeholder="Introduce tu teléfono" required><br>
                    <nav class="iniSesion">
                         <a href="inicioSesion.php" class="iniSesion-link">¿Ya tienes una cuenta? Iniciar Sesion</a>
                    </nav>
                    <button type="submit" name="enviar-reg" class="button-reg">REGISTRARME</button>
                </form>
            </div>
        </div>
    </div>


    <!------------------>
    <!-----LEGALIDAD---->
    <!------------------>

    <div class="legalidad-area">
        <div class="legalidad-clicker">
            <b>SOBRE NOSOTROS</b><img src="css/imagenes/legalidad/flechas/abajo.png" class="legalidad-clicker-down">
        </div>

        <div class="legalidad-info">

            <div class="legalidad-menu">
                <h4>HORARIOS</h4>
                <span  style="text-decoration: underline;">Lunes - Jueves</span>
                <span>12:00 - 16:00<br>19:00 - 23:00</span><br>
                <span  style="text-decoration: underline;">Viernes - Domingo</span>
                <span>12:00 - 17:00<br>19:00 - 0:00</span>
            </div>

            <div class="legalidad-bk">
                <h4>MY BURGER KINGDOM</h4>
                <span><a href="https://static.burgerkingencasa.es/bkhomewebsite/es/myburgerking_legal_es.pdf" target="_blank">Condiciones Legales</a></span>
                <span><a href="https://static.burgerkingencasa.es/bkhomewebsite/es/myburgerking_restaurants_es.pdf" target="_blank">Restaurantes Adheridos</a></span>
            </div>

            <div class="legalidad-alergenos">
                <h4>ALÉRGENOS</h4>
                <span><a href="https://static.burgerkingencasa.es/bkhomewebsite/es/nutrition_es.pdf" target="_blank">Lista de Alérgenos y Nutrición</a></span>
            </div>

            <div class="legalidad-registro">
                <h4>REGÍSTRESE</h4>
                <span><a href="registro.php">Identifíquese</a></span>
            </div>
        </div>
    </div>



    <!------------------>
    <!------FOOTER------>
    <!------------------>

    <div class="footer-area">
        <div class="footer-phone">
            <img src="css/imagenes/footer/telephone.png">
            <span><h5>Llámanos si tienes cualquier problema.</h5><br> <b class="phone">+34 722 98 55 05</b></span>
        </div>

        <div class="footer-rights">
            <b>2023 Burger Kingdom Corporation. Todos los derechos reservados</b>
        </div>

        <div class="footer-social">
            <a href="https://twitter.com/burgerking?lang=es" target="_blank"><img src="css/imagenes/footer/redes/twitter.png"></a>
            <a href="https://www.instagram.com/burgerking_es/?hl=es" target="_blank"><img src="css/imagenes/footer/redes/instagram.png"></a>
            <a href="https://www.youtube.com/user/Burgerkingespana" target="_blank"><img src="css/imagenes/footer/redes/youtube.png"></a>
            <a href="https://www.facebook.com/burgerkingespana" target="_blank"><img src="css/imagenes/footer/redes/facebook.png"></a>
        </div>
</div>

</body>
</html>