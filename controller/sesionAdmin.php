<?php
session_start();


require_once("../model/Admin.php");

$admin = new Admin($_SESSION["user"]["email"], $_SESSION["user"]["password"], $_SESSION["user"]["rol"] , $_SESSION["user"]["nombre"], $_SESSION["user"]["apellido"], $_SESSION["user"]["contacto"], $_SESSION["user"]["estado"]);


require("../view/admin_views/dashboard.php");

?>