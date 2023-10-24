<?php

require '../Modelo/Usuario.php';
require '../../funciones.inc.php';

    if(isset($_POST["enviar-reg"])){
        if(isset($_POST["nombre"]) && isset($_POST["clave"]) && isset($_POST["correo"]) && isset($_POST["provincia"])
                && isset($_POST["ciudad"]) && isset($_POST["direccion"]) && isset($_POST["telefono"])){

            $nombre = validar_cadena($_POST["nombre"]);
            $clave = validar_cadena($_POST["clave"]);  //la contrasenya se hashea desde el propio método de creación del usuario
            $email = validar_correo($_POST["correo"]);
            $provincia = validar_cadena($_POST["provincia"]);
            $ciudad = validar_cadena($_POST["ciudad"]);
            $direccion = validar_cadena($_POST["direccion"]);
            $telefono = validar_entero($_POST["telefono"]);

            $verificacionEmail = Usuario::emailExiste($email);
            $verificacionTelefono = Usuario::telefonoExiste($telefono);
            
                if($verificacionEmail == false){
                    if($verificacionTelefono == false){

                        try{
                            $usuario = new Usuario($nombre, $clave, $email, $provincia, $ciudad, $direccion, $telefono);
                            $usuarioCreado = $usuario->crear();

                            if($usuarioCreado){
                                header("Location: inicioSesion_controlador.php"); //una vez creado el usuario te mando a iniciar sesion
                            }
                        }catch(Exception $ex) {
                            $ex->getMessage("Error al crear usuario");
                        }

                    }
                }
            
        }
    }


    require '../Vista/registro.php';