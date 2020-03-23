<?php
//conexion a la Base de datos
$server = 'localhost';
$username = 'root';
$password = 'UZJIvESy5x';
$database = 'youitt';
$db = mysqli_connect($server,$username,$password,$database);

mysqli_query($db,"SET NAMES 'utf-8");

//iniciamos sesion
session_start();