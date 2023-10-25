<?php
require("conn.php");
//verifying access

$email = $_POST["email"];
$psswrd = $_POST["password"];

try {
  $login = "SELECT * FROM usuario WHERE email= '$email' and password = '$psswrd'";
  $result = mysqli_query($conn, $login);
  $rows = mysqli_num_rows($result);
 
  if ($rows === 1) {
    $user = mysqli_fetch_assoc($result);
    $rol = $user["rol"];
    session_start();
    $_SESSION["user"] = $user;

    if($rol === "1") {
      header("Location: ./view/admin_views/dashboard.php");
    }
    elseif ($rol ==="2") {
      header("Location: ./view/maestro_views/dashboard.php");
    }
    elseif ($rol ==="3") {
      header("Location: ./view/alumno_views/dashboard.php");
    }

  } else {
  }
} catch (mysqli_sql_exception $e) {
  echo "Error : " . $e-> getMessage();
}

$conn->close();

/* <?php 
require("conn.php");

$email = $_POST["email"];
$psswrd = $_POST["password"];

try {
    // Usar sentencias preparadas para proteger contra inyecciones SQL
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE email= ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = mysqli_fetch_assoc($result);

    // Verificar la contraseña
    if ($user && 
        ((empty($psswrd) && empty($user["password"])) || 
        password_verify($psswrd, $user["password"]))) 
    {
        $rol = $user["rol"];
        session_start();
        $_SESSION["user"] = $user;

        if ($rol === "1") {
            header("Location: ./view/admin_views/dashboard.php");
            exit();
        } elseif ($rol === "2") {
            header("Location: ./view/maestro_views/dashboard.php");
            exit();
        } elseif ($rol === "3") {
            header("Location: ./view/alumno_views/dashboard.php");
            exit();
        }
    } else {
        echo "Error: Email o contraseña incorrectos.";
    }
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
}

$conn->close();
?>
 */