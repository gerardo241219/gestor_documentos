<?php
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] !== "POST") { // Metodo para validar que recibamos información de tipo POST
    header('location: ./../');
}

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? md5($_POST['password']) : '';
$response = [];

if ($email != "" && $password != "") {
    $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$password'";
    $query = mysqli_query($connection, $sql);

    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_array($query)) {
            session_start();

            $_SESSION['email'] = $row['email'];
            $_SESSION['type'] = $row['type'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['status'] = true;

            $response = [
                "status" => 200,
                "message" => strtoupper($row['name']),
                "icon" => "success",
                "title" => "¡Bienvenido!",
            ];
        }
    } else {
        $response = [
            "status" => 500,
            "message" => "Email o Contraseña incorrectos",
            "icon" => "error",
            "title" => "¡Espera!",
        ];
    }
} else {
    $response = [
        "status" => 500,
        "message" => "Todos los campos deben son obligatorios",
        "icon" => "warning",
        "title" => "¡Espera!",
    ];
}

echo json_encode($response);
