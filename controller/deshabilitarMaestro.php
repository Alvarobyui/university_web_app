<?php
require("conn.php");

if(isset($_POST['invalidar-usuario-btn'])) {
  $usuario_id = $_POST['usuario_id'];
  $materia_id = $_POST['materia_id'];
  $stmt = $conn->prepare("DELETE FROM cursousuario WHERE usuario_id = ? AND materia_id = ?;");
  $stmt->bind_param('ii', $usuario_id, $materia_id);
  $stmt->execute();
  var_dump($usuario_id);
  $stmt->close();
/*   header("Location: ../view/admin_views/maestros.php");
 */} 
