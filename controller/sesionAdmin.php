<?php
session_start();

/* var_dump($_SESSION["user"]); */

require_once("../model/Admin.php");

$admin = new Admin($_SESSION["user"]["email"], $_SESSION["user"]["password"], $_SESSION["user"]["rol"] , $_SESSION["user"]["nombre"], $_SESSION["user"]["apellido"], $_SESSION["user"]["contacto"], $_SESSION["user"]["estado"]);
echo $admin->mostrarEmail();


require("../view/admin_views/dashboard.php");
/* header("Location: ../view/admin_views/dashboard.php"); */

?>