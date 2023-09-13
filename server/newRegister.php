<?php
session_start();
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] !== "POST") { // Metodo para validar que recibamos información de tipo POST
    header('location: ./../');
}

$numOficio = isset($_POST['num_oficio']) ? $_POST['num_oficio'] : '';
$dependencia = isset($_POST['dependencia']) ? $_POST['dependencia'] : '';
$remitente = isset($_POST['remitente']) ? $_POST['remitente'] : '';
$cargo = isset($_POST['cargo']) ? $_POST['cargo'] : '';
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
$estatus = isset($_POST['estatus']) ? $_POST['estatus'] : '';
$turnado = isset($_POST['turnado']) ? $_POST['turnado'] : '';
$prioridad = isset($_POST['prioridad']) ? $_POST['prioridad'] : '';
$asunto = isset($_POST['asunto']) ? $_POST['asunto'] : '';
$observaciones = isset($_POST['observaciones']) ? $_POST['observaciones'] : '';
$respuesta = isset($_POST['respuesta']) ? $_POST['respuesta'] : '';
$id_user = $_SESSION['name'];
$created_at = date("Y-m-d H:i:s");
$response = [
    "status" => 500,
    "message" => "Ha ocurrido un error inesperado",
    "title" => "¡Error!",
    "icon" => "error"
];

$sql = "INSERT INTO documentos (numOficio, dependencia, remitente, cargo, telefono, tipo, estatus, turnado, prioridad, asunto, observaciones, respuesta, id_user, created_at) VALUES ('$numOficio', '$dependencia', '$remitente', '$cargo', '$telefono', '$tipo', '$estatus', '$turnado', '$prioridad', '$asunto', '$observaciones', '$respuesta', '$id_user', '$created_at')";
$query = mysqli_query($connection, $sql);

if ($query) {
    $response = [
        "status" => 200,
        "message" => "Se ha registrado correctamente",
        "title" => "¡Proceso excitoso!",
        "icon" => "success"
    ];
}

echo json_encode($response);
