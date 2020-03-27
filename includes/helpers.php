<?php

function mostrarError($errores, $campo){

    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta = "<div>".$errores[$campo]."</div>";
    }
    return $alerta;
}

function borrarError(){

    $borrado = false;
    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        $borrado = session_unset($_SESSION['errores']);
    }
    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        session_unset($_SESSION['completado']);
    }
    return $borrado;
}
