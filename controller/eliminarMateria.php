<?php
require("conn.php");

if(isset($_POST['eliminar-materia-btn'])) {
  $usuario_id = $_POST['usuario_id'];
  $materia_id = $_POST['materia_id'];

  $stmt = $conn->prepare("DELETE FROM cursousuario WHERE usuario_id = ? AND materia_id = ?;");
  $stmt->bind_param('ii', $usuario_id, $materia_id);
  if(!$stmt->execute()) {
    echo "<p class='ml-6 p-2 text-xs text-white inline rounded font-extrabold bg-red-500'>¡Ups! Intenta de nuevo</p>";
      exit();
    } else{
      echo "<p class='ml-6 p-2 text-xs text-white inline rounded bg-green-400'>¡Registro eliminado correctamente!</p>";
    }
   
} 
