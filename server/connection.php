<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'gestor_documentos';

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(!$connection) {
    die("Error en la connection");
}