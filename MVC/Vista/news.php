<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>

    <!--iconos-->
    <script src="https://kit.fontawesome.com/96ceb6889f.js" crossorigin="anonymous"></script>

    <!--icono burger-->
    <link rel="shortcut icon" href="../../css/imagenes/favicon.png" type="">

    <!--archivo CSS-->
    <link rel="stylesheet" type="text/css" href="../../css/styleNews.css" />
    
    <!--archivo Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../../script.js"></script>

</head>
<body>

            <!------------------>
            <!-------MENÚ------->
            <!------------------>

            <header class="header-area">
                    <nav class="nav-area">
                        
                        <input type="checkbox" id="check">

                        <label for="check" class="icono-menu">
                            <i class="fa-solid fa-bars"></i>
                        </label>

                        <img src="../../css/imagenes/logoo.png" class="logo-menu" />
                        
                        <ul class="menu">
                                                        
                            <li class="option-menu">
                                <a href="index_controlador.php" class="menu-link">Inicio</a>
                            </li>
                            <li class="option-menu">
                                <a href="menu_controlador.php" class="menu-link">Menú</a>
                            </li>
                            <li class="option-menu">
                                <a href="news_controlador.php" class="menu-link">News</a>
                            </li>
                            
                            <?php 
                            //si se ha iniciado sesión y se ha vuelto al index muestro tu nombre en lugar del botón de inicio de sesión
                            if(isset($_SESSION["nombreUser"])){
                                ?>
                                <li class="option-menu">
                                    <a class="user-menu" href="perfil_controlador.php"><?php echo $_SESSION["nombreUser"]; ?></a>
                                </li>
                                <?php
                            }else{
                                ?>
                                <li class="option-menu">
                                    <a class="button-menu" href="../Controlador/inicioSesion_controlador.php">Iniciar Sesión</a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                            

                    </nav>

                    <a class="scroll" href="#top"><i class="fa fa-angle-up"></i></a>
                    
            </header>
    
    <div class="ofertas-area">
        
        <span></span>
            <div class="ofertas-pics">
                <button class="back-button"><</button>
                        <img src="../../css/imagenes/novedades/oferta7.jpg"/> 
                        <img src="../../css/imagenes/novedades/oferta1.jpg"/>  
                        <img src="../../css/imagenes/novedades/oferta2.jpg"/>  
                        <img src="../../css/imagenes/novedades/oferta4.jpg"/>  
                        <img src="../../css/imagenes/novedades/oferta6.jpg"/>  
                <button class="forw-button">></button>
            </div>
        <span></span>
        
    </div>
    <div class="legalidad-area">
        <div class="legalidad-clicker">
            <b>SOBRE NOSOTROS</b><img src="../../css/imagenes/abajo.png" class="legalidad-clicker-down">
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
                <span><a href="../Controlador/registro_controlador.php">Identifíquese</a></span>
            </div>
        </div>
    </div>

    <!------------------>
    <!------FOOTER------>
    <!------------------>

    <div class="footer-area">
            <div class="footer-phone">
                <img src="../../css/imagenes/footer/telephone.png">
                <span><h5>Llámanos si tienes cualquier problema.</h5><br> <b class="phone">+34 722 98 55 05</b></span>
            </div>

            <div class="footer-rights">
                <b>2023 Burger Kingdom Corporation. Todos los derechos reservados</b>
            </div>

            <div class="footer-social">
                <a href="https://twitter.com/burgerking?lang=es" target="_blank"><img src="../../css/imagenes/footer/redes/twitter.png"></a>
                <a href="https://www.instagram.com/burgerking_es/?hl=es" target="_blank"><img src="../../css/imagenes/footer/redes/instagram.png"></a>
                <a href="https://www.youtube.com/user/Burgerkingespana" target="_blank"><img src="../../css/imagenes/footer/redes/youtube.png"></a>
                <a href="https://www.facebook.com/burgerkingespana" target="_blank"><img src="../../css/imagenes/footer/redes/facebook.png"></a>
            </div>
    </div>
    
</body>
</html>