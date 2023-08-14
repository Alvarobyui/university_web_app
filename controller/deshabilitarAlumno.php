<?php
require("conn.php");

if(isset($_POST['invalidar-usuario-btn'])) {
  $usuario_id = $_POST['usuario_id'];
  $stmt = $conn->prepare("UPDATE usuario SET estado = 0 WHERE id = ?;");
  $stmt->bind_param('i', $usuario_id);
  $stmt->execute();
  $stmt->close();

  header("Location: ../view/admin_views/alumnos.php");
} 