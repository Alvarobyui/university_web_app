<?php
if(isset($_POST["editar-alumno-btn"])) {
  if(!empty($_POST["alumno-name"]) && !empty($_POST["alumno-surname"]) && !empty($_POST["alumno-contact"])) {
    $email = $_POST["alumno-email"];
    $nombre = $_POST["alumno-name"];
    $apellido = $_POST["alumno-surname"];
    $contacto = $_POST["alumno-contact"];

    // Actualizar datos del usuario
    $stmt = $conn->prepare("UPDATE usuario SET nombre = ?, apellido = ?, contacto = ? WHERE email = ?");
    $stmt->bind_param('ssss', $nombre, $apellido, $contacto, $email);
    
    if(!$stmt->execute()) {
        echo "<p class='ml-6 p-2 text-xs text-white inline rounded font-extrabold bg-red-500'>¡Ups! Intenta de nuevo</p>";
        exit();
    } else {
        echo "<p class='ml-6 p-2 text-xs text-white inline rounded bg-green-400'>¡Editado!</p>";
    }

    $stmt->close();

  } else {
      echo "<p class='ml-6 p-2 text-xs text-white inline rounded font-extrabold bg-red-500'>¡Ups! Algunos campos están vacíos</p>";
  }
}
