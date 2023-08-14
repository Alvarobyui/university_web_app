<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/controller/LoginController.php");


$loginController = new LoginController();


if(isset($_GET["action"])) {
  $action = $_GET["action"];
  switch ($action) {
    case 'login':
      $loginController->login();
      break;
    }
} else {
  $loginController->index();
}
