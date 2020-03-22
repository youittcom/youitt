<?php
if(isset($_GET['controlador']) && $_GET['controlador'] != ''){
    $controlador = $_GET['controlador'].'Controller';
    if(class_exists($controlador)){
        echo "ok";
    }
}
else{
    require_once 'index.html';
}

