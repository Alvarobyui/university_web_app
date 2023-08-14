<?php
if(isset($_POST["crear-materia-btn"])) {
  if(!empty($_POST["nueva-materia-name"]) && !empty($_POST["nueva-materia-des"])) {
    $materia = $_POST["nueva-materia-name"];
    $descripcion = $_POST["nueva-materia-des"];

    $stmt = $conn->prepare("INSERT IGNORE INTO materia (nombre, descripcion) VALUES (?, ?)");
    $stmt->bind_param("ss", $materia, $descripcion);
    $stmt->execute();

    $stmt->close();

    echo "<p class='ml-6 p-2 text-xs text-white inline rounded bg-green-400'>¡Agregado!</p>";
  } else {
    echo "<p class='ml-6 p-2 text-xs text-white inline rounded font-extrabold bg-red-500'>¡Ups! Algún campo está vacío</p>";
  }
}