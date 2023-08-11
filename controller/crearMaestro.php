<?php
/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 */
if (isset($_POST["guardar-maestro-btn"])) {
    if (!empty($_POST["nuevo-email"]) and !empty($_POST["nuevo-name"]) and !empty($_POST["nuevo-surname"]) and !empty($_POST["nuevo-contact"]) and !empty($_POST["nuevo-subject"])) {
      echo "formularios llenos";
        $email = $_POST["nuevo-email"];
        $name = $_POST["nuevo-name"];
        $surname = $_POST["nuevo-surname"];
        $contact = $_POST["nuevo-contact"];
        //como es maestro es 2
        $rol = 2;
        var_dump($_POST["nuevo-subject"]);

        if($_POST["nuevo-subject"] == "PHP y Laravel" ) {
          $subject = 1;
        }elseif($_POST["nuevo-subject"] == "Bases de Datos") {
          $subject = 2;
        }elseif($_POST["nuevo-subject"] == "POO y PHP") {
          $subject = 3;
        }elseif($_POST["nuevo-subject"] == "SQL y mySQL") {
          $subject = 4;
        }
        // Preparar la inserción del usuario
        $stmt = $conn->prepare("INSERT INTO usuario (email, nombre, apellido, contacto, rol) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $email, $name, $surname, $contact, $rol);
        $stmt->execute();

        echo "primer query hecho, datos agregados";
        // Obtener el ID del usuario insertado
        $usuario_id = $conn->insert_id;
        echo "ususario_id";
        // Preparar la inserción en cursousuario
        $stmt = $conn->prepare("INSERT INTO cursousuario (usuario_id, materia_id) VALUES (?, ?)");
        $stmt->bind_param("ii", $usuario_id, $subject);  // Asumiendo que $subject es un número entero (ID)
        $stmt->execute();

        // Cerrar el prepared statement
        $stmt->close();
        echo "segundo query hecho, datos agregados";
        header("Location: dashboard.php");
        
    } else {
        echo "algunos campos están vacios";
    }
}
?>