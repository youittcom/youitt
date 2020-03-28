<?php
if(isset($_POST)){
    require_once 'includes/conexion.php';
    session_start();
    $nombre = isset($_POST['nombre'])?$_POST['nombre']:false;
    $apellidos = isset($_POST['apellidos'])?$_POST['apellidos']:false;;
    $email = isset($_POST['email'])?$_POST['email']:false;;
    $password = isset($_POST['password'])?$_POST['password']:false;;

    //validamos los datos
    $errores = array();
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)){
        $nombre_validado = true;
    }else{
        $errores['nombre'] = "el nombre no es valido";
    }
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/",$apellidos)){
        $apellidos_validado = true;
    }else{
        $errores['apellidos'] = "los apellidos no son validos";
    }
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{
        $errores['email'] = "el email no es valido";
    }
    if(!empty($password)){
        $password_validado = true;
    }else{
        $errores['password'] = "la contraseña esta vacia";
    }

    $guardar_usuario = false;
    if(count($errores) == 0){
        $guardar_usuario = true;
        //ciframos la password
        $password = password_hash($password,PASSWORD_BCRYPT,['cost' => 4]);
        //buscamos si ya esta registrado
        $registrado = buscarUsuarioPorEmail($email,$db);
        if($registrado){
            $_SESSION['errores']['registrado']="Ya existe un usuario registrado con este email";
        }else{
            //insert en la base de datos
            $sql = "INSERT INTO usuarios VALUES (null,'$nombre','$apellidos','$email','$password',CURRENT_TIMESTAMP())";
            $guardar = mysqli_query($db,$sql);
            if($guardar) {
                $_SESSION['completado'] = "registro completado con éxito";
            }else{
                $_SESSION['errores']['general']="fallo al guardar usuario";
            }
        }
    }
    else{
        $_SESSION['errores'] = $errores;

    }

}
header('Location:index.php');
function buscarUsuarioPorEmail($email,$db){
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $guardar = mysqli_query($db,$sql);
    if($guardar){
        return true;
    }else{
        return false;
    }
}
