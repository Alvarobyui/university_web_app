<?php
class LoginController
{
  public function index()
  {
    include $_SERVER["DOCUMENT_ROOT"] . "/view/login.php"; 
  }

  public function login()
  {
    include $_SERVER["DOCUMENT_ROOT"] . "/controller/conexion.php";
  }
}