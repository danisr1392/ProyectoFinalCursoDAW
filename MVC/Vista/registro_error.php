<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


        //compruebo que el correo introducido no ha sido registrado
    if(isset($_POST["enviar-reg"])){   
        if(isset($_POST["correo"]) && isset($_POST["correo"]) && isset($_POST["telefono"]) && isset($_POST["telefono"])){
            
            if($verificacionEmail){
                ?><p style="padding: 20px; text-align: center; color: red; font-weight: 24px;">El correo introducido ya ha sido registrado</p> <?php
            }else if($verificacionTelefono){
                ?><p style="padding: 20px; text-align: center; color: red; font-weight: 24px;">El telefono introducido ya ha sido registrado</p> <?php
            }
        }
    }
        
        