<?php
$stmt = null;
$duplicity = null;
$stmt2 = null;

if(isset($_POST["guardar-maestro-cambios"])) {
    if (!empty($_POST["maestro-email"]) && !empty($_POST["maestro-name"]) && !empty($_POST["maestro-surname"]) && !empty($_POST["maestro-contact"])) {
      $email = $_POST["maestro-email"];
      $nombre = $_POST["maestro-name"];
      $apellido = $_POST["maestro-surname"];
      $contacto = $_POST["maestro-contact"];
      $subject = $_POST["editar-subject"];

      // Actualizar datos del usuario
      $stmt = $conn->prepare("UPDATE usuario SET nombre = ?, apellido = ?, contacto = ? WHERE email = ?");
      $stmt->bind_param('ssss', $nombre, $apellido, $contacto, $email);
      
      if(!$stmt->execute()) {
          echo "<p class='ml-6 p-2 text-xs text-white inline rounded font-extrabold bg-red-500'>¡Ups! Intenta de nuevo</p>";
          exit(); // Terminar el script si no se pudo ejecutar la consulta
      }

      // Obtener usuario_id basado en email
      $stmtUserId = $conn->prepare("SELECT id FROM usuario WHERE email = ?");
      $stmtUserId->bind_param('s', $email);
      $stmtUserId->execute();
      $resultUserId = $stmtUserId->get_result();
      $rowUserId = $resultUserId->fetch_assoc();
      $usuario_id = $rowUserId['id'];
      
      // Obtener materia_id basado en el nombre de la materia
      $stmtMateriaId = $conn->prepare("SELECT id FROM materia WHERE nombre = ?");
      $stmtMateriaId->bind_param('s', $subject);
      $stmtMateriaId->execute();
      $resultMateriaId = $stmtMateriaId->get_result();
      $rowMateriaId = $resultMateriaId->fetch_assoc();
      $materia_id = $rowMateriaId['id'];

 
      $duplicity = $conn->prepare("SELECT 1 FROM cursousuario WHERE usuario_id = ? AND materia_id = ?");
      $duplicity->bind_param('ii', $usuario_id, $materia_id);
      $duplicity->execute();
      $result = $duplicity->get_result();

      if ($result->num_rows > 0) {
          echo "<p class='ml-6 p-2 text-xs text-white inline rounded font-extrabold bg-red-500'>¡Ups! El usuario ya está asignado a esa materia</p>";
      } else {
        $stmt2 = $conn->prepare("INSERT INTO cursousuario (usuario_id, materia_id) VALUES (?, ?)");
        $stmt2->bind_param('ii', $usuario_id, $materia_id);

        if ($stmt2->execute()) {
          echo "<p class='ml-6 p-2 text-xs text-white inline rounded bg-green-400'>¡Editado!</p>";
        } else {
          echo "<p class='ml-6 p-2 text-xs text-white inline rounded font-extrabold bg-red-500'>¡Ups! Intenta de nuevo</p>";
        }
      }

      if ($stmt) $stmt->close();
      if ($duplicity) $duplicity->close();
      if ($stmt2) $stmt2->close();
    } else {
        echo "<p class='ml-6 p-2 text-xs text-white inline rounded font-extrabold bg-red-500'>¡Ups! Algunos campos están vacíos</p>";
    }
}

/*       // Actualizar la relación en cursousuario
      $stmt2 = $conn->prepare("UPDATE cursousuario SET usuario_id = ?, materia_id = ? WHERE usuario_id = ?"); // Asumo que quieras actualizar basado en el usuario_id existente
      $stmt2->bind_param('sss', $usuario_id, $materia_id, $usuario_id); */
     