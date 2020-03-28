<?php
//iniciamos sesion y conexion a la BBDD
session_start();
require_once 'includes/conexion.php';
//recoger datos del formulario
if(isset($_POST)){
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    //comprobar cotraseña
    //consultamos a la BBDD con el email
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $query = mysqli_query($db, $sql);
    if($query == true && mysqli_num_rows($query) == 1){
        $usuario = mysqli_fetch_assoc($query);
        $password_hash = $usuario['password_hash'];
        //comprobamos password y hash
        $password_ok = password_verify($password, $password_hash);
        if($password_ok){
            //iniciamos sesion
            $_SESSION['usuario'] = $usuario;
            registroLogIn($usuario,$db);
            if($_SESSION['error_login']){
                unset($_SESSION['error_login']);
            }
        }else{
            $_SESSION['error_login']= "login incorrrecto";
        }
    }else{
        $_SESSION['error_login']= "login incorrrecto";
    }
}
header('Location:index.php');
function registroLogIn($usuario,$db){
    $id_usuario = $usuario['id'];
    $email_usuario = $usuario['email'];
    $sql = "INSERT INTO sesiones_usuarios VALUES (null,'$id_usuario','$email_usuario',CURRENT_TIMESTAMP(),NULL)";
    $query = mysqli_query($db,$sql);
    if($query){
        $sql = "SELECT * FROM sesiones_usuarios order by id desc limit 1";
        $query = mysqli_query($db,$sql);
        if($query == true && mysqli_num_rows($query) == 1){
            $sesion_usuario = mysqli_fetch_assoc($query);
            $_SESSION['usuario']['id_sesion'] = $sesion_usuario['id'];
        }
    }
}