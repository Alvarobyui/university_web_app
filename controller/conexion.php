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

