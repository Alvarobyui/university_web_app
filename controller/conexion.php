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
/*       $getData = "SELECT * FROM usuario";
      $query = mysqli_query($conn, $getData);
      $adminData = mysqli_fetch_object($query);    
      $_SESSION["data"] = $adminData;
 */      // Consulta para seleccionar todos los usuarios
      $getAlumnos = "SELECT id, nombre, apellido, email, contacto FROM usuario WHERE rol='3'";
      $alumnosQuery = $conn->query($getAlumnos);

      $alumnos = array();

      if ($alumnosQuery->num_rows > 0) {
          // Guardar cada fila en el array $alumnos
          while($row = $alumnosQuery->fetch_assoc()) {
              $alumnos[] = $row;
          }
      }
      $_SESSION['alumnos'] = $alumnos;


      /* $getUsuarios = "SELECT id, email, rol, nombre, apellido, contacto, estado FROM usuario";
      $usuariosQuery = $conn->query($getUsuarios);

      $usuarios = array();

      if ($usuariosQuery->num_rows > 0) {
          // Guardar cada fila en el array $alumnos
          while($rowUsuarios = $usuariosQuery->fetch_assoc()) {
              $usuarios[] = $rowUsuarios;
          }
      }
      $_SESSION["usuarios"] = $usuarios; */

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

