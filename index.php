<?php
if(isset($_GET['controlador']) && $_GET['controlador'] != ''){
    if($_GET['controlador'] == 'hola'){
        echo "ok";
    }
}
else{
    require_once 'index.html';
}

