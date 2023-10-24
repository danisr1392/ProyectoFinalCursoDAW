<?php

require_once 'Conexion.php';

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Usuario{
    
    function __construct($nombre, $clave, $correo, $provincia, $ciudad, $direccion, $telefono) { //lo creo sin indicar su rol, ya que por defecto será un usuario normal, 
                                                                                                            //si se quiere crear un usuario administrador se podrá crear con un método
                                                                                                            //específico. Tampoco indico la fecha de alta ya que será la actual siempre
        $this->nombre = $nombre;
        $this->contrasenya = $clave;
        $this->email = $correo;
        $this->provincia = $provincia;
        $this->ciudad = $ciudad;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
                        
        try{
            $this->conexion = new Conexion();
        } catch (Exception $ex) {
            $ex->getMessage("Conexión rechazada");
        }
    }
    
    function crear(){
                        
        //no se podrá crear dos usuarios con el mismo correo o el mismo telefono
        $consulta = $this->conexion->query("SELECT COUNT(*) FROM usuario WHERE email='$this->email' AND telefono='$this->telefono'");
        
        if($consulta->fetch()[0] > 0){
            $resultado = false;
        }else{
            $insertar = $this->conexion->exec("INSERT INTO usuario(nombre, contrasenya, email, telefono, provincia, ciudad, direccion, fecha_alta, id_rol) VALUES('$this->nombre','".password_hash($this->contrasenya, PASSWORD_DEFAULT)."','$this->email','$this->telefono','$this->provincia','$this->ciudad','$this->direccion', now(), '2')");
        
            if($insertar){
                $resultado = true;
            }else{
                $resultado = false;
            }
        }
        
        return $resultado;
    }
    
    function eliminar(){
                        
        //no se podrá crear dos usuarios con el mismo correo o el mismo telefono
        $consulta = $this->conexion->query("SELECT COUNT(*) FROM usuario WHERE email='$this->email' AND telefono='$this->telefono'");
        
        if($consulta->fetch()[0] > 0){
            $resultado = false;
        }else{
            $insertar = $this->conexion->exec("INSERT INTO usuario(nombre, contrasenya, email, telefono, provincia, ciudad, direccion, fecha_alta, id_rol) VALUES('$this->nombre','".password_hash($this->contrasenya, PASSWORD_DEFAULT)."','$this->email','$this->telefono','$this->provincia','$this->ciudad','$this->direccion', now(), '2')");
        
            if($insertar){
                $resultado = true;
            }else{
                $resultado = false;
            }
        }
        
        return $resultado;
    }
    
    
    static function esAdmin($email) {
        
        try{
            $conexion = new Conexion();
            $conexion->exec("SET FOREIGN_KEY_CHECKS = 0");
        } catch (Exception $ex) {
            $ex->getMessage("Conexión rechazada");
        }
        
        //solo compruebo el email(como esta comprobación la haré después de comprobar el correo y la contrasenya el id_rol por defecto será 1 para saber si es admin o no)
        $consultaTipoUser = $conexion->prepare("SELECT COUNT(*) FROM usuario WHERE email=:email AND id_rol='1'");
        $consultaTipoUser->bindParam(":email", $email);
        
        
        if($consultaTipoUser->execute()){
            if($consultaTipoUser->fetch()[0] > 0){
                $resultado = false;
            }else{
                $resultado = true;
            }
        }
        
        return $resultado;
    }
    
    static function emailExiste($email){
        
        try{
            $conexion = new Conexion();
            $conexion->exec("SET FOREIGN_KEY_CHECKS = 0");
        } catch (Exception $ex) {
            $ex->getMessage("Conexión rechazada");
        }
        
        $consultaEmailExiste = $conexion->prepare("SELECT COUNT(*) FROM usuario WHERE email=:email");
        $consultaEmailExiste->bindParam(":email", $email);
        
        if($consultaEmailExiste->execute()){
            if($consultaEmailExiste->fetch()[0] > 0){
                $resultado = true;
            }else{
                $resultado = false;
            }
        }
        
        return $resultado;
    }
    
    static function telefonoExiste($telefono){
        
        try{
            $conexion = new Conexion();
            $conexion->exec("SET FOREIGN_KEY_CHECKS = 0");
        } catch (Exception $ex) {
            $ex->getMessage("Conexión rechazada");
        }
        
        $consultaTelefonoExiste = $conexion->prepare("SELECT COUNT(*) FROM usuario WHERE telefono=:telefono");
        $consultaTelefonoExiste->bindParam(":telefono", $telefono);
        
        if($consultaTelefonoExiste->execute()){
            if($consultaTelefonoExiste->fetch()[0] > 0){
                $resultado = true;
            }else{
                $resultado = false;
            }
        }
        
        return $resultado;
    }
    
    static function contrasenyaCorrecta($email, $contrasenya){
        try{
            $conexion = new Conexion();
            $conexion->exec("SET FOREIGN_KEY_CHECKS = 0");
        } catch (Exception $ex) {
            $ex->getMessage("Conexión rechazada");
        }
        
        $consultaClave = $conexion->prepare("SELECT * FROM usuario WHERE email=:email");
        $consultaClave->bindParam(":email", $email);
        
        if($consultaClave->execute()){
            $contrasenyaHash = $consultaClave->fetch();
            
            if(password_verify($contrasenya, $contrasenyaHash["contrasenya"])){
                $resultado = true;
            }else{
                $resultado = false;
            }
            
        }
        
        return $resultado;
    }
    
    static function obtenerNombre($email){
        try{
            $conexion = new Conexion();
            $conexion->exec("SET FOREIGN_KEY_CHECKS = 0");
        } catch (Exception $ex) {
            $ex->getMessage("Conexión rechazada");
        }
        
        $consultaNombre = $conexion->prepare("SELECT nombre FROM usuario WHERE email=:email");
        $consultaNombre->bindParam(":email", $email);
        
        if($consultaNombre->execute()){
            $nombre = $consultaNombre->fetch();
            return $nombre["nombre"];
        }
    }
    
    
}