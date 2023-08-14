<?php
session_start();

include($_SERVER["DOCUMENT_ROOT"] . "/controller/protectSession.php");
require_once("../../model/Admin.php");

$admin = new Admin($_SESSION["user"]["email"], $_SESSION["user"]["password"], $_SESSION["user"]["rol"] , $_SESSION["user"]["nombre"], $_SESSION["user"]["apellido"], $_SESSION["user"]["contacto"], $_SESSION["user"]["estado"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calificaciones</title>
  <link href="../../dist/output.css" rel="stylesheet">
  <script src="../../js/toggle.js" defer></script>
  <script src="../../js/maestro.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

</head>

<body class="h-[100vh]">
  <div class="text-2xl flex h-full">
    <aside id="toggle-menu" class="menu w-[235px] min-w-[235px] text-sm bg-[#3f454c] text-neutral-300">
      <div class="logo p-4 flex gap-2 items-center border-b-[1px] border-solid border-blue-100">
        <div class="img rounded-full grid place-items-center w-[35px] h-[35px]"><img class="rounded-full h-full w-full" src="../../assets/logo-small.png" alt="uni"></div>
        <h2 class="text-xl">Universidad</h2>
      </div>
      <div class="rol p-4 border-b-[1px] border-solid border-blue-100">
        <p class="text-base"><?=$admin->mostrarNombre()?> <?=$admin->mostrarApellido()?></p>
        <p class="text-xs">Alumno</p>
      </div>
      <div class="p-4">
        <p class="pb-4 pl-6">MENU ALUMNOS</p>
        <nav>
          <ul>
            <li>
              <a href="./calificaciones.php" class="flex gap-2 items-center pb-2 hover:">
                <div class="img">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-check" viewBox="0 0 16 16">
                    <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z" />
                    <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z" />
                    <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3Z" />
                  </svg>
                </div>
                <p>Ver Calificaciones</p>
              </a>
            </li>
            <li>
              <a href="./clases.php" class="flex gap-2 items-center pb-2 hover:">
                <div class="img">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                    <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                    <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
                  </svg>
                </div>
                <p>Administrar tus Clases</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <main id="toggle-bg" class="w-full">
      <section class="bg-white flex items-center justify-between text-sm p-3 text-gray-500">
        <div href="#" class="flex gap-4 items-center">
          <button id="toggle-btn" class="img no-underline">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
          </button>
          <h2>Home</h2>
        </div>
        <a href="#" class="flex gap-3 items-center">
          <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white" type="button">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 mr-2 rounded-full" src="../../assets/user.png" alt="photo">
            Alumno Funval
            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
          </button>

          <!-- Dropdown menu -->
          <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <div class="px-4 py-3 text-xs lg:text-sm text-gray-900 dark:text-white">
              <div class="font-medium ">Alumno Funval</div>
              <div class="truncate">alumno@alumno.com</div>
            </div>
            <ul class="py-2 text-xs lg:text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
              <li>
                <a href="./dashboard.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
              </li>
              <li>
                <a href="./perfil.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Perfil</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Configuración</a>
              </li>
            </ul>
            <div class="py-2">
              <a href="../admin_views/cerrarSesion.php" class="block px-4 py-2 text-xs lg:text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Cerrar Sesión</a>
            </div>
          </div>
        </a>
      </section>
      <section class="bg-[#F5F6FA] pb-[25vh]">
        <div class="title flex justify-between p-3">
          <h2 class="text-2xl lg:ml-4">Calificaciones</h2>
          <div class="path text-sm">
            <span class="text-blue-500">Home</span> / Calificaciones
          </div>
        </div>
        <div class="content text-xs mt-5 mx-2 py-2 px-2 overflow-x-auto md:text-sm md:py-4 bg-white rounded lg:text-base lg:mx-6 lg:px-4">
          <div class="flex justify-between border-b-gray-500 mb-5">
            <h2 class="text-lg lg:text-xl">Mis Calificaciones</h2>
          </div>
          <table id="myTable" class="table table-auto">
            <thead class="">
              <tr>
                <th>#</th>
                <th>Nombre de Materia</th>
                <th>Calificación</th>
                <th>Mensajes</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Programación Orientada a Objetos</td>
                <td>92%/100%</td>
                <td>
                  <span class="bg-cyan-700 text-white text-[10px] px-2 rounded-md grid items-center w-[100px]">
                    No hay mensajes
                  </span>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Advanced CSS</td>
                <td>87%/100%</td>
                <td>
                  <span class="bg-cyan-700 text-white text-[10px] px-2 rounded-md grid items-center w-[100px]">
                    No hay mensajes
                  </span>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Laravel y Bases de datos</td>
                <td>76%/100%</td>
                <td>
                  <span class="bg-cyan-700 text-white text-[10px] px-2 rounded-md grid items-center w-[100px]">
                    No hay mensajes
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
      <footer>
        <div class="footer text-xs text-center mt-4">
          <p>&#169 Alvaro Diaz 2023 <span class="text-blue-500">AdminLTE.io</span>. All rights reserved</p>
        </div>
      </footer>
    </main>
  </div>
  <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>
<script>
  $(document).ready(function() {
    $('#myTable').DataTable({});
  });
</script>
</html>