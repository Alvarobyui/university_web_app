<?php
if(isset($_POST["editar-materia-btn"])) {
  if(!empty($_POST["materia-des"]) && !empty($_POST["materia-name"])) {
    $materiaId = $_POST["materia-id"];
 /*    $maestroEmail = $_POST["maestro-email"]; */
    $materia = $_POST["materia-name"];
    $descripcion = $_POST["materia-des"];
  /*   $maestroAsignado = $_POST["maestro-asignado"]; */


    $stmt = $conn->prepare("UPDATE materia SET nombre = ?, descripcion = ? WHERE id = ?;");
    $stmt->bind_param('ssi', $materia, $descripcion, $materiaId);  

    if(!$stmt->execute()) {
      echo "<p class='ml-6 p-2 text-xs text-white inline rounded font-extrabold bg-red-500'>¡Ups! Intenta de nuevo</p>";
      exit();
    } else{
        echo "<p class='ml-6 p-2 text-xs text-white inline rounded bg-green-400'>¡Editado!</p>";
    }
    
    $stmt->close();

    } else {
        echo "<p class='ml-6 p-2 text-xs text-white inline rounded font-extrabold bg-red-500'>¡Ups! Algunos campos están vacíos</p>";
    }

}