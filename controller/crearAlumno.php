<?php
if(isset($_POST["guardar-alumno-btn"])) {
  if(!empty($_POST["nuevo-alumno-email"]) && !empty($_POST["nuevo-alumno-name"]) && !empty($_POST["nuevo-alumno-surname"]) && !empty($_POST["nuevo-alumno-contact"])) {
    $email = $_POST["nuevo-alumno-email"];
    $name = $_POST["nuevo-alumno-name"];
    $surname = $_POST["nuevo-alumno-surname"];
    $contact = $_POST["nuevo-alumno-contact"];
    //como es alumno es 3
    $rol = 3;

    $stmt = $conn->prepare("INSERT IGNORE INTO usuario (email, nombre, apellido, contacto, rol) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $email, $name, $surname, $contact, $rol);
    $stmt->execute();

    $stmt->close();

    echo "<p class='ml-6 p-2 text-xs text-white inline rounded bg-green-400'>¡Agregado!</p>";
  } else {
    echo "<p class='ml-6 p-2 text-xs text-white inline rounded font-extrabold bg-red-500'>¡Ups! Algunos campos están vacíos</p>";

  }
}