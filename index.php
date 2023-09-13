<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="container-login">
        <div class="card shadow-lg">
            <div class="card-header">
                <h3 class="card-title">Inicio de Sesión</h3>
            </div>
            <div class="card-body">
                <form class="form-login" id="formLogin">
                    <div class="row mb-4">
                        <div class="col text-center">
                            <img class="img-login" src="assets/images/acceso.png" alt="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="name@example.com">
                                <label for="email">Correo</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control form-control-sm" id="password" name="password" placeholder="*********">
                                <label for="password">Contraseña</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col text-end">
                            <div class="form-floating mb-3">
                                <button type="submit" class="btn btn-primary btn-login">Ingresar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app-login.js"></script>
</body>

</html>