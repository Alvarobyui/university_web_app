<?php
// Iniciar o reanudar la sesión
session_start();
        
// Destruir todas las variables de sesión
$_SESSION = array();

// Si es necesario, destruye la cookie asociada con la sesión
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruir la sesión
session_destroy();

// Redirigir al index.php
header("Location: ../../index.php");
exit;
?>