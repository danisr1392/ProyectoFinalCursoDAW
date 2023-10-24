<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

    require '../Modelo/Usuario.php';
    require '../../funciones.inc.php';

    if(isset($_POST["ini-sesion"])){
        if(isset($_POST["correo"]) && !empty($_POST["correo"]) && isset($_POST["clave"]) && !empty($_POST["clave"])){
            
            //obtengo el correo o nickname introducido
            $email = validar_cadena($_POST["correo"]);
            
            //compruebo si es un dato que ya existe en la bdd antes de comprobar la contrasenya
            $correoExiste = Usuario::emailExiste($email);
            $esAdmin = Usuario::esAdmin($email);
            
            if($correoExiste){
                //valiacion de contrasenya
                $contrasenya = validar_cadena($_POST["clave"]);
                $contrasenyaCorrecta = Usuario::contrasenyaCorrecta($email, $contrasenya);
                if($contrasenyaCorrecta){
                    if($esAdmin == false){
                        //obtengo el nombre del usuario para usarlo en la interfaz cuando se inicie sesión
                        $nombreAdmin = Usuario::obtenerNombre($email);
                        header("Location: ./panelAdmin.php");
                        session_start();
                        $_SESSION["nombreAdmin"] = $nombreAdmin;
                    }else{
                        //obtengo el nombre del usuario para usarlo en la interfaz cuando se inicie sesión
                        $nombreUser = Usuario::obtenerNombre($email);
                        header("Location: ./index_controlador.php");
                        session_start();
                        $_SESSION["nombreUser"] = $nombreUser;
                    }
                }
            }
        }
    }


require '../Vista/inicioSesion.php';