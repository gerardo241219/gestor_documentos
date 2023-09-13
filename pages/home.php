<?php
session_start();

if (!$_SESSION['status']) {
    header('location: ./../');
}

require_once 'templates/header.php';
?>

<style>
    img {
        width: 100%;
        max-width: 500px;
        margin-top: 35vh;
    }
</style>

<main>
    <div class="container-fluid px-4 d-flex justify-content-center align-items-center">
        <img src="../assets/images/SGG.svg" alt="">
    </div>
</main>

<?php require_once 'templates/footer.php'; ?>