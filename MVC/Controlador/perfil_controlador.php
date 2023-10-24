<?php

include '../Modelo/Usuario.php';

session_start();

if(isset($_SESSION["nombreUser"])){
    if(isset($_POST["logout"])){
        //elimino la sesión y devuelvo al usuario al index
        if(session_destroy()){
            header("Location: ./index_controlador.php");
        }
    }
}

require '../Vista/perfil.php';