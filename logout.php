<?php
session_start();
require_once 'includes/conexion.php';
if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $logout = registroLogout($usuario,$db);
    if($logout){
        session_destroy();
    }
}

header('Location:index.php');
function registroLogout($usuario,$db){
    $id_sesion = $usuario['id_sesion'];
    $sql = "UPDATE sesiones_usuarios SET fecha_logout= CURRENT_TIMESTAMP ()  where id='$id_sesion'";
    $query = mysqli_query($db,$sql);
    if($query){
        return true;
    }else{
        return false;
    }
}