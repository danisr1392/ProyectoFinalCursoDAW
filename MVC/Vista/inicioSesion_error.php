<?php


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

    if(isset($_POST["ini-sesion"])){
            if($correoExiste == false){
                ?><p style="padding: 20px; text-align: center; color: red; font-weight: 24px;">El email introducido no existe</p> <?php
                
            }else if($correoExiste && $contrasenyaCorrecta == false){
                ?><p style="padding: 20px; text-align: center; color: red; font-weight: 24px;">La contraseña introducida no es correcta</p> <?php
            }
        
            
    }