<?php
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] !== "POST") { // Metodo para validar que recibamos información de tipo POST
    header('location: ./../');
}

$data = [];

$sql = "SELECT * FROM documentos";
$query = mysqli_query($connection, $sql);

while($row = mysqli_fetch_array($query)) {
    array_push($data, [
        "numOficio" => $row['numOficio'],
        "dependencia" => $row['dependencia'],
        "remitente" => $row['remitente'],
        "cargo" => $row['cargo'],
        "telefono" => $row['telefono'],
        "tipo" => $row['tipo'],
        "estatus" => $row['estatus'],
        "turnado" => $row['turnado'],
        "prioridad" => $row['prioridad'],
        "asunto" => $row['asunto'],
        "observaciones" => $row['observaciones'],
        "respuesta" => $row['respuesta'],
    ]);
}

echo json_encode(["data" => $data]);