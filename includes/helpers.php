<?php

function mostrarError($errores, $campo){

    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta = "<div>".$errores[$campo]."</div>";
    }
    return $alerta;
}

function borrarError(){

    $_SESSION['errores'] = null;
    return session_unset($_SESSION['errores']);
}
