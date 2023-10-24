<?php
    /*
    *Script que contiene las funciones de validación de los datos de entrada del examen del tema 1 del módulo de DWES
    *Fecha: 09/11/2022
    *Autor: Apellido1 Apellido 2, Nombre
    */
    function validar_cadena($unaCadena) {
        //Eliminamos espacios al principio y final del a cadena
        $cadenaBuena = trim($unaCadena);
        //Eliminamos barras invertidas
        $cadenaBuena = stripcslashes($cadenaBuena);
        //Eliminamos caracteres especiales
        $cadenaBuena = htmlspecialchars($cadenaBuena);
        return $cadenaBuena;
    }

    function validar_entero($unEntero) {
        //Validamos con filtros php
        //Devuelve la variable filtrada o false si no cumple el filtro
        return filter_var($unEntero, FILTER_VALIDATE_INT);
    }

    function validar_correo($unCorreo) {
        //Eliminamos espacios al principio y final del a cadena
        $correoBueno = trim($unCorreo);
        //Validamos con filtros php
        return filter_var($correoBueno, FILTER_VALIDATE_EMAIL);
    }

