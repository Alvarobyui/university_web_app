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
  <title>Clases</title>
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
            <?=$admin->mostrarNombre()?> <?=$admin->mostrarApellido()?>
            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
          </button>

          <!-- Dropdown menu -->
          <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <div class="px-4 py-3 text-xs lg:text-sm text-gray-900 dark:text-white">
              <div class="font-medium "> <?=$admin->mostrarNombre()?> <?=$admin->mostrarApellido()?></div>
              <div class="truncate"><?=$admin->mostrarEmail()?></div>
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
      <section class="bg-[#F5F6FA] pb-10">
        <div class="title flex justify-between p-3">
          <h2 class="text-2xl">Clases</h2>
          <div class="path text-sm">
            <span class="text-blue-500">Home</span> / Clases
          </div>
        </div>
        <div class="content text-xs mt-5 mx-2 py-2 overflow-x-auto md:text-sm md:px-2 md:py-4 bg-white rounded lg:text-base lg:mx-6">
          <div class="flex justify-between border-b-gray-500 mb-5">
            <h2 class="text-lg lg:text-xl">Información de las clases</h2>
            <button class="bg-blue-500 text-white rounded px-2 py-1 text-xs lg:text-sm" id="crear-maestro-btn">Agregar Clase</button>
          </div>
          <table id="myTable" class="table table-auto">
            <thead class="">
              <tr>
                <th>#</th>
                <th>Clase</th>
                <th>Maestro</th>
                <th>Alumnos Inscritos</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include($_SERVER["DOCUMENT_ROOT"] . "/controller/conn.php");
                $sql = $conn->query("SELECT 
                                        m.id AS materia_id,
                                        m.nombre AS materia_nombre,
                                        u.id AS usuario_id,
                                        u.nombre AS usuario_nombre,
                                        COALESCE(sub.num_usuarios_rol3, 0) AS numero_usuarios_rol3
                                    FROM 
                                        materia m
                                    LEFT JOIN 
                                        cursousuario cu ON m.id = cu.materia_id
                                    LEFT JOIN 
                                        usuario u ON cu.usuario_id = u.id AND u.rol = 2
                                    LEFT JOIN (
                                        SELECT 
                                            materia_id,
                                            COUNT(*) as num_usuarios_rol3
                                        FROM 
                                            cursousuario cu2
                                        JOIN 
                                            usuario u2 ON cu2.usuario_id = u2.id
                                        WHERE 
                                            u2.rol = 3
                                        GROUP BY 
                                            cu2.materia_id
                                    ) AS sub ON m.id = sub.materia_id;");
                if ($sql->num_rows > "0") {
                while($datos = $sql->fetch_object()) { ?>
              <tr>
                <td><?= $datos->materia_id ?></td>
                <td><?= $datos->materia_nombre ?></td>
                <td><?= $datos->usuario_nombre ?></td>
                <td>
                  <?php 
                   switch ($datos->numero_usuarios_rol3) {
                    case 0:
                        echo '<span class="bg-yellow-300 text-[10px] px-2 rounded-md grid items-center w-[75px]">Sin alumnos</span>';                      
                        break;
                    default:
                        echo $datos->numero_usuarios_rol3;
                        break;
                  }
                  ?>
                </td>
                <td class="flex gap-2 lg:gap-4 items-center justify-start">
                  <button class="text-blue-400 flex justify-center editar-maestro-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                  </button>
                  <button class="text-red-700 flex justify-center borrar-maestro-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                      <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                    </svg>
                  </button>
                </td>
              </tr>
              <?php }} ?>
            </tbody>
          </table>
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
        <h1 class="text-xl md:text-2xl">Editar Clase</h1>
        <button id="cerrar-maestro-x" class="text-base">x</button>
      </div>
      <form action="#" method="POST" class="text-sm mt-6 flex flex-col gap-4">
        <div>
          <label for="materia-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de la clase/materia</label>
          <input class="px-2 py-1 w-full bg-gray-50 border-gray-300 border-2 rounded-lg text-gray-500 text-xs lg:text-sm" type="text" name="materia-name" id="materia-name" placeholder="Laravel y PHP">
        </div>
        <div>
          <label for="maestro-asignado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maestro asignado</label>
          <select id="maestro-asignado" class="bg-gray-50 border border-gray-300 text-gray-900 py-[6px] text-xs lg:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="Harold" selected>Harold</option>
            <option value="Alvaro">Alvaro</option>
            <option value="Jasiel">Jasiel</option>
          </select>
        </div>
        <div class="buttons ml-auto">
          <button id="cerrar-maestro-btn" class="bg-gray-600 text-white rounded px-2 py-1">Cerrar</button>
          <button type="submit" class="bg-blue-500 text-white rounded px-2 py-1">Guardar Cambios</button>
        </div>
      </form>
    </dialog>
    <dialog id="nuevo-maestro" class="px-6 py-4 min-w-[335px] rounded-md">
      <div class="flex justify-between items-start">
        <h1 class="text-xl md:text-2xl">Agregar Clase</h1>
        <button id="cerrar-nuevo-x" class="text-base">x</button>
      </div>
      <form action="#" method="POST" class="text-sm mt-6 flex flex-col gap-4">
        <div>
          <label for="nueva-materia-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de la clase/materia</label>
          <input class="px-2 py-1 w-full bg-gray-50 border-gray-300 border-2 rounded-lg text-gray-500 text-xs lg:text-sm" type="text" name="nueva-materia-name" id="nueva-materia-name" require>
        </div>
        <div>
          <label for="nuevo-maestro-asignado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maestro asignado</label>
          <select id="nuevo-maestro-asignado" class="bg-gray-50 border border-gray-300 text-gray-900 py-[6px] text-xs lg:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Selecciona un maestro</option>
            <option value="Harold">Harold</option>
            <option value="Alvaro">Alvaro</option>
            <option value="Jasiel">Jasiel</option>
          </select>
        </div>
        <div class="buttons ml-auto">
          <button id="cerrar-nuevo-btn" class="bg-gray-600 text-white rounded px-2 py-1">Cerrar</button>
          <button type="submit" class="bg-blue-500 text-white rounded px-2 py-1">Crear</button>
        </div>
      </form>
    </dialog>

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
</script>

</html>