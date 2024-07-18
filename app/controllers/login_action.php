<?php
require_once __DIR__ . '/controller.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $controller = new controller();
    $user = $controller->login($username, $password);

    if ($user) {
        if ($user['estado']) { // Verifica si el estado es verdadero (activo)
            session_start();
            $_SESSION['username'] = $user['usuario']; // Guarda el nombre de usuario en la sesión
            header("Location: ../../app/views/usersCrud.php"); // Redirecciona a la página del dashboard
            exit();
        } else {
            header("Location: ../../app/views/login.php?error=inactive"); // Redirige de nuevo al login con un parámetro de usuario inactivo
            exit();
        }
    } else {
        header("Location: ../../app/views/login.php?error=1"); // Redirige de nuevo al login con un parámetro de error
        exit();
    }
}
?>
