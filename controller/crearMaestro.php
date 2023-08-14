<?php

if (isset($_POST["guardar-maestro-btn"])) {
    if (!empty($_POST["nuevo-email"]) and !empty($_POST["nuevo-name"]) and !empty($_POST["nuevo-surname"]) and !empty($_POST["nuevo-contact"]) and !empty($_POST["nuevo-subject"])) {

        $email = $_POST["nuevo-email"];
        $name = $_POST["nuevo-name"];
        $surname = $_POST["nuevo-surname"];
        $contact = $_POST["nuevo-contact"];
        //como es maestro es 2
        $rol = 2;

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
        $stmt = $conn->prepare("INSERT IGNORE INTO usuario (email, nombre, apellido, contacto, rol) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $email, $name, $surname, $contact, $rol);
        $stmt->execute();

        // Obtener el ID del usuario insertado
        $usuario_id = $conn->insert_id;
        // Preparar la inserción en cursousuario
        $stmt = $conn->prepare("INSERT IGNORE INTO cursousuario (usuario_id, materia_id) VALUES (?, ?)");
        $stmt->bind_param("ii", $usuario_id, $subject);  // Asumiendo que $subject es un número entero (ID)
        $stmt->execute();

        // Cerrar el prepared statement
        $stmt->close();

        echo "<p class='ml-6 p-2 text-xs text-white inline rounded bg-green-400'>¡Agregado!</p>";
    } else {
        echo "<p class='ml-6 p-2 text-xs text-white inline rounded font-extrabold bg-red-500'>¡Ups! Algunos campos están vacíos</p>";

    }
}
?>