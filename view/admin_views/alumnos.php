<?php
session_start();

include($_SERVER["DOCUMENT_ROOT"] . "/controller/protectSession.php");
require_once("../../model/Admin.php");

$admin = new Admin($_SESSION["user"]["email"], $_SESSION["user"]["password"], $_SESSION["user"]["rol"], $_SESSION["user"]["nombre"], $_SESSION["user"]["apellido"], $_SESSION["user"]["contacto"], $_SESSION["user"]["estado"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alumnos</title>
  <link href="../../dist/output.css" rel="stylesheet">
  <script src="../../js/toggle.js" defer></script>
  <script src="../../js/maestro.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
  <script src="../../js/desactivarUsuario.js" defer></script>
</head>

<body class="h-[100vh]">
  <div class="text-2xl flex h-full">
    <aside id="toggle-menu" class="menu w-[235px] min-w-[235px] text-sm bg-[#3f454c] text-neutral-300">
      <div class="logo p-4 flex gap-2 items-center border-b-[1px] border-solid border-blue-100">
        <div class="img rounded-full grid place-items-center w-[35px] h-[35px]"><img class="rounded-full h-full w-full" src="../../assets/logo-small.png" alt="uni"></div>
        <h2 class="text-xl">Universidad</h2>
      </div>
      <div class="rol p-4 border-b-[1px] border-solid border-blue-100">
        <p class="text-base">Alvaro Diaz</p>
        <p class="text-xs">Administrador</p>
      </div>
      <div class="p-4">
        <p class="pb-4 pl-6">MENU ADMINISTRACIÓN</p>
        <nav>
          <ul>
            <li>
              <a href="./permisos.php" class="flex gap-2 items-center pb-2 hover:">
                <div class="img">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lock" viewBox="0 0 16 16">
                    <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 5.996V14H3s-1 0-1-1 1-4 6-4c.564 0 1.077.038 1.544.107a4.524 4.524 0 0 0-.803.918A10.46 10.46 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h5ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                  </svg>
                </div>
                <p>Permisos</p>
              </a>
            </li>
            <li>
              <a href="./maestros.php" class="flex gap-2 items-center pb-2 hover:">
                <div class="img">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video3" viewBox="0 0 16 16">
                    <path d="M14 9.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm-6 5.7c0 .8.8.8.8.8h6.4s.8 0 .8-.8-.8-3.2-4-3.2-4 2.4-4 3.2Z" />
                    <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h5.243c.122-.326.295-.668.526-1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7.81c.353.23.656.496.91.783.059-.187.09-.386.09-.593V4a2 2 0 0 0-2-2H2Z" />
                  </svg>
                </div>
                <p>Maestros</p>
              </a>
            </li>
            <li>
              <a href="./alumnos.php" class="flex gap-2 items-center pb-2 hover:">
                <div class="img">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                    <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                    <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
                  </svg>
                </div>
                <p>Alumnos</p>
              </a>
            </li>
            <li>
              <a href="./clases.php" class="flex gap-2 items-center pb-2 hover:">
                <div class="img">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                    <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                    <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z" />
                  </svg>
                </div>
                <p>Clases</p>
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
            <?= $admin->mostrarNombre(); ?> <?= $admin->mostrarApellido(); ?>
            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
          </button>

          <!-- Dropdown menu -->
          <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <div class="px-4 py-3 text-xs lg:text-sm text-gray-900 dark:text-white">
              <div class="font-medium "><?= $admin->mostrarNombre(); ?> <?= $admin->mostrarApellido(); ?></div>
              <div class="truncate"><?= $admin->mostrarEmail(); ?></div>
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
              <a href="./cerrarSesion.php" class="block px-4 py-2 text-xs lg:text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Cerrar Sesión</a>
            </div>
          </div>
        </a>
      </section>
      <section class="bg-[#F5F6FA] pb-0">
        <div class="title flex justify-between p-3 pb-0">
          <h2 class="text-2xl md:ml-4">Alumnos</h2>
          <div class="path text-sm">
            <span class="text-blue-500">Home</span> / Alumnos
          </div>
        </div>
        <?php
        include($_SERVER["DOCUMENT_ROOT"] . "/controller/conn.php");
        include_once($_SERVER["DOCUMENT_ROOT"] . "/controller/crearAlumno.php");
        include_once($_SERVER["DOCUMENT_ROOT"] . "/controller/editarAlumno.php");
        ?>
        <div class="content text-xs mt-1 mx-2 py-2 overflow-x-auto lg:overflow-y-auto max-h-[71vh] md:text-sm md:px-2 md:py-4 bg-white rounded lg:text-base lg:mx-6">
          <div class="flex justify-between border-b-gray-500 mb-5">
            <h2 class="text-lg lg:text-xl">Información de Alumnos</h2>
            <button class="bg-blue-500 text-white rounded px-2 py-1 text-xs lg:text-sm" id="crear-maestro-btn">Agregar Alumno</button>
          </div>
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-6 py-3">
                    #
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Nombre
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Email
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Contacto
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Acciones
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php
                include($_SERVER["DOCUMENT_ROOT"] . "/controller/conn.php");
                $sql = $conn->query("SELECT id, nombre, apellido, email, contacto FROM usuario WHERE rol='3' and estado=1");
                if ($sql->num_rows > 0) {
                  while ($datos = $sql->fetch_object()) {
                ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $datos->id ?>
                  </th>
                  <td class="px-6 py-4">
                    <?= $datos->nombre ?> <?= $datos->apellido ?>
                  </td>
                  <td class="px-6 py-4">
                    <?= $datos->email ?>
                  </td>
                  <td class="px-6 py-4">
                    <?= $datos->contacto ?>
                  </td>
                  <td class="px-6 py-4 flex gap-4">
                    <a href="#?id=<?= $datos->id ?>" data-id=<?= $datos->id ?> class="text-blue-400 flex justify-center editar-maestro-btn" data-email="<?= $datos->email ?>" data-nombre="<?= $datos->nombre ?>" data-apellido="<?= $datos->apellido ?>" data-contacto="<?= $datos->contacto ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                    </a>
                    <button class="text-red-700 flex justify-center eliminar-btn" data-modal-target="popup-modal" data-modal-toggle="popup-modal" data-id=<?= $datos->id ?> type="button">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                      </svg>
                    </button>
                  </td>
                </tr>
                  <?php }
                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </section>
      <footer>
        <div class="footer text-xs text-center mt-5">
          <p>&#169 Alvaro Diaz 2023 <span class="text-blue-500">AdminLTE.io</span>. All rights reserved</p>
        </div>
      </footer>
    </main>
    <dialog id="editar-maestro" class="px-6 py-4 min-w-[335px] rounded-md">
      <div class="flex justify-between items-start">
        <h1 class="text-xl md:text-2xl">Editar Alumno</h1>
        <button id="cerrar-maestro-x" class="text-base">x</button>
      </div>
      <form method="POST" class="text-sm mt-6 flex flex-col gap-4">
        <div>
          <label for="alumno-email" class="block font-medium text-sm mb-2 text-gray-900">Correo electrónico del usuario</label>
          <input class="px-2 py-1 w-full bg-gray-50 border-gray-300 border-2 rounded-lg text-gray-900 text-xs lg:text-sm" type="email" name="alumno-email" id="alumno-email" value="" readonly>
        </div>
        <div>
          <label for="alumno-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre(s)</label>
          <input class="px-2 py-1 w-full bg-gray-50 border-gray-300 border-2 rounded-lg text-gray-500 text-xs lg:text-sm" type="text" name="alumno-name" id="alumno-name" placeholder="Harold" value="">
        </div>
        <div>
          <label for="alumno-surname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido(s)</label>
          <input class="px-2 py-1 w-full bg-gray-50 border-gray-300 border-2 rounded-lg text-gray-500 text-xs lg:text-sm" type="text" name="alumno-surname" id="alumno-surname" placeholder="Carazas" value="">
        </div>
        <div>
          <label for="alumno-contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número de teléfono</label>
          <input class="px-2 py-1 w-full bg-gray-50 border-gray-300 border-2 rounded-lg text-gray-500 text-xs lg:text-sm" type="text" name="alumno-contact" id="alumno-contact" placeholder="+51 924126535" value="">
        </div>
        <div class="buttons ml-auto">
          <button id="cerrar-maestro-btn" class="bg-gray-600 text-white rounded px-2 py-1">Cerrar</button>
          <button name="editar-alumno-btn" type="submit" class="bg-blue-500 text-white rounded px-2 py-1">Guardar Cambios</button>
        </div>
      </form>
    </dialog>
    <dialog id="nuevo-maestro" class="px-6 py-4 min-w-[335px] rounded-md">
      <div class="flex justify-between items-start">
        <h1 class="text-xl md:text-2xl">Agregar Alumno</h1>
        <button id="cerrar-nuevo-x" class="text-base">x</button>
      </div>
      <form method="POST" class="text-sm mt-6 flex flex-col gap-4">
        <div>
          <label for="nuevo-alumno-email" class="block font-medium text-sm mb-2 text-gray-900">Correo electrónico nuevo</label>
          <input class="px-2 py-1 w-full bg-gray-50 border-gray-300 border-2 rounded-lg text-gray-500 text-xs lg:text-sm" type="email" name="nuevo-alumno-email" id="nuevo-alumno-email" placeholder="Ejemplo: alumno@gmail.com" value="">
        </div>
        <div>
          <label for="nuevo-alumno-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre(s)</label>
          <input class="px-2 py-1 w-full bg-gray-50 border-gray-300 border-2 rounded-lg text-gray-500 text-xs lg:text-sm" type="text" name="nuevo-alumno-name" id="nuevo-alumno-name" placeholder="Ejemplo: Harold" value="">
        </div>
        <div>
          <label for="nuevo-alumno-surname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido(s)</label>
          <input class="px-2 py-1 w-full bg-gray-50 border-gray-300 border-2 rounded-lg text-gray-500 text-xs lg:text-sm" type="text" name="nuevo-alumno-surname" id="nuevo-alumno-surname" placeholder="Ejemplo: Carazas" value="">
        </div>
        <div>
          <label for="nuevo-alumno-contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número de teléfono</label>
          <input class="px-2 py-1 w-full bg-gray-50 border-gray-300 border-2 rounded-lg text-gray-500 text-xs lg:text-sm" type="text" name="nuevo-alumno-contact" id="nuevo-alumno-contact" placeholder="Ejemplo: +51 924126535" value="">
        </div>
        <div class="buttons ml-auto">
          <button id="cerrar-nuevo-btn" class="bg-gray-600 text-white rounded px-2 py-1">Cerrar</button>
          <button name="guardar-alumno-btn" type="submit" class="bg-blue-500 text-white rounded px-2 py-1">Guardar Cambios</button>
        </div>
      </form>
    </dialog>

    <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Cancelar</span>
          </button>
          <form action="../../controller/deshabilitarAlumno.php" method="POST" class="p-6 text-center">
            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¿Desea eliminar a este alumno?</h3>
            <button name="invalidar-usuario-btn" data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
              Si, invalidar alumno
            </button>
            <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancelar</button>
          </form>
        </div>
      </div>
    </div>

  </div>
  <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>
<script>
  $(document).ready(function() {
    $('#myTable').DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish_Mexico.json"
      }
    });
  });


  $(document).ready(function() {
    $('.editar-maestro-btn').click(function() {
      var id = $(this).data('id');
      console.log(id);
      $.post("./alumnos.php", {
        id: id
      }, function(data) {
        if (data.message) {
          alert(data.message); // Muestra un mensaje al usuario
        }
      }, "json"); // Especifica que la respuesta debe ser interpretada como JSON
    });
  });
</script>

</html>