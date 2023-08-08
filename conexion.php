<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Universidad";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

$email = $_POST["email"];
$psswrd = $_POST["password"];

//connecting to the database and verifying access
try {
  $login = "SELECT * FROM usuario WHERE email= '$email' and password = '$psswrd'";
  $result = mysqli_query($conn, $login);
  $rows = mysqli_num_rows($result);
 
  if ($rows === 1) {
    $user = mysqli_fetch_assoc($result);
    $rol = $user["rol"];
    
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
    echo "Usuario o Contraseña incorrecta";
    echo "<a href='index.php'>Volver a intentar</a>";
  }
} catch (mysqli_sql_exception $e) {
  echo "Error : " . $e-> getMessage();
}

$conn->close();



/*
$host = 'localhost';
$db   = 'Universidad';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "conectado";
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Recogida de datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];



// Buscar al usuario en la base de datos
$stmt = $pdo->prepare('SELECT * FROM usuario WHERE email = ?');
$stmt->execute([$email]);
$user = $stmt->fetch();

// Verificar la contraseña
if ($user && password_verify($password, $user['password'])) {
    // La contraseña es correcta. Iniciar sesión.
    session_start();
    $_SESSION['user_id'] = $user['id'];
    // Redirigir al usuario a la página de inicio
    echo "Correcto";
    header("Location: dashboard.php");
} else {
    // La contraseña es incorrecta. Mostrar un error.
    echo "Email o contraseña incorrecta";
}
var_dump($user);
var_dump($password);
 */


?>