<?php
session_start();
if(isset($_POST)){
    $data = array();
    $nombre = isset($_POST['nombre'])?$_POST['nombre']:false;
    $apellidos = isset($_POST['apellidos'])?$_POST['apellidos']:false;;
    $email = isset($_POST['email'])?$_POST['email']:false;;
    $password = isset($_POST['password'])?$_POST['password']:false;;

    //validamos los datoss
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
    }
    else{
        $_SESSION['errores'] = $errores;
        header('Location:index.php');
    }
    //var_dump($_POST);
}
else{
    echo "nohay datos en el formulario";
}

