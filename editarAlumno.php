<?php

include("protectSession.php");
require_once("../../model/Admin.php");

$admin = new Admin($_SESSION["user"]["email"], $_SESSION["user"]["password"], $_SESSION["user"]["rol"] , $_SESSION["user"]["nombre"], $_SESSION["user"]["apellido"], $_SESSION["user"]["contacto"], $_SESSION["user"]["estado"]); 

if(isset($_POST['id'])) {
  $id = $_POST['id'];

  require($_SERVER["DOCUMENT_ROOT"] . "/controller/conn.php");

  $admin->editarUsuarios($conn, "alumno", $id, "editar-alumno-btn", "alumno-email", "alumno-name", "alumno-surname", "alumno-contact");  
  echo json_encode(['message' => 'Usuario editado con éxito']);
  exit();  // Finaliza la ejecución para que no envíe la página completa como respuesta
}
