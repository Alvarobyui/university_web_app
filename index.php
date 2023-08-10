<?php
// require("./view/login.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/controller/LoginController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/controller/LogoutController.php");

$loginController = new LoginController();
$logoutController = new LogoutController();
// var_dump($_GET);
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

/* if(isset($_GET["action"])) {
  switch ($action) {
    case 'logout':
      $logoutController->logout();
      break;
  }
}
 */
  