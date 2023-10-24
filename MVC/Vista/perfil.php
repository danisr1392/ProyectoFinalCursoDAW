<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <!--iconos-->
    <script src="https://kit.fontawesome.com/96ceb6889f.js" crossorigin="anonymous"></script>

    <!--icono burger-->
    <link rel="shortcut icon" href="../../css/imagenes/favicon.png" type="">

    <!--archivo CSS-->
    <link rel="stylesheet" type="text/css" href="../../css/stylePerfil.css" />
    
    <!--archivo Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../../script.js"></script>
    <script> //como solo había un botón en esta parte tuve que ajustar la altura del div con js por si acaso
             //para diferentes navegadores 
        $(document).ready(function(){

            var height = $(window).height();

            $('.error-background').height(height);
        });
   </script>
</head>

    <?php
    
    
    if(isset($_SESSION["nombreUser"])){
        
    ?>
    <body>
        <div class="banner-area">
            <div class="capa-banner">


                <!------------------>
                <!-------MENÚ------->
                <!------------------>

                <header class="header-area">
                        <nav class="nav-area">
                            <nav class="option-menu">
                                <a href="../Controlador/index_controlador.php" class="volver-menu">Volver a Inicio</a>
                            </nav>

                            <form method="POST">
                                <nav class="option-menu">
                                    <button name="logout" class="logout">Cerrar Sesion</button>
                                </nav>
                            </form>
                        </nav>

                </header>

                <nav class="mssg">
                    <h1>¡Bienvenido de nuevo, <?php
                    
                    //muestro el nombre del cliente y le doy la bienvenida
                    echo $_SESSION["nombreUser"];
                    
                    ?>!</h1>
                </nav>


            </div>
        </div>
    </body>   
    <?php }else{
        ?> 
        <body>
            <div class="error-background">
                <div class="error-capa">
                    <div class="error-session">
                        <h1>Debes iniciar sesión para acceder a esta página</h1>
                       <a href="../Controlador/inicioSesion_controlador.php" class="error-mssg">INICIAR SESIÓN</a>
                    </div> 
                </div>
            </div>
        </body>
    <?php
    } ?>
</html>