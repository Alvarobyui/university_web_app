<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar perfil</title>
  <link href="../../dist/output.css" rel="stylesheet">
  <script src="../../js/toggle.js" defer></script>
</head>

<body class="h-[100vh]">
  <div class="text-2xl flex h-full">
    <aside id="toggle-menu" class="menu w-[235px] min-w-[235px] min-h-[100vh] text-sm bg-[#3f454c] text-neutral-300">
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
              <a href="permisos.php" class="flex gap-2 items-center pb-2 hover:">
                <div class="img">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lock" viewBox="0 0 16 16">
                    <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 5.996V14H3s-1 0-1-1 1-4 6-4c.564 0 1.077.038 1.544.107a4.524 4.524 0 0 0-.803.918A10.46 10.46 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h5ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                  </svg>
                </div>
                <p>Permisos</p>
              </a>
            </li>
            <li>
              <a href="maestros.php" class="flex gap-2 items-center pb-2 hover:">
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
              <a href="Alumnos.php" class="flex gap-2 items-center pb-2 hover:">
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
              <a href="clases.php" class="flex gap-2 items-center pb-2 hover:">
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
            Administrador
            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
          </button>

          <!-- Dropdown menu -->
          <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <div class="px-4 py-3 text-xs lg:text-sm text-gray-900 dark:text-white">
              <div class="font-medium ">Alvaro Diaz</div>
              <div class="truncate">admin@admin.com</div>
            </div>
            <ul class="py-2 text-xs lg:text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Perfil</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Configuración</a>
              </li>
            </ul>
            <div class="py-2">
              <a href="#" class="block px-4 py-2 text-xs lg:text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Cerrar Sesión</a>
            </div>
          </div>
        </a>
      </section>
      <section class="bg-[#F5F6FA] ">
        <div class="title flex justify-between p-3">
          <h2 class="text-2xl lg:ml-4">Mi perfil</h2>
          <div class="path text-sm">
            <span class="text-blue-500">Home</span> / Perfil
          </div>
        </div>
        <div class="content text-xs mx-2 mb-3 py-2 px-2 overflow-x-auto md:text-sm md:px-2 md:py-4 bg-white rounded lg:text-base lg:mx-6">
          <h3 class="text-base lg:text-lg">Editar datos</h3>
          <form action="#" method="POST" class="text-sm mt-6 flex flex-col gap-4">
            <div>
              <label for="editar-admin-email" class="block font-medium text-sm mb-2 text-gray-900">Correo electrónico</label>
              <input class="px-2 py-1 w-full bg-gray-50 border-gray-300 border-2 rounded-lg text-gray-500 text-xs lg:text-sm" type="email" name="editar-admin-email" id="editar-admin-email" placeholder="admin@admin.com">
            </div>
            <div>
              <label for="editar-admin-pass" class="block font-medium text-sm mb-2 text-gray-900">Contraseña nueva</label>
              <input class="px-2 py-1 w-full bg-gray-50 border-gray-300 border-2 rounded-lg text-gray-500 text-xs lg:text-sm" type="password" name="editar-admin-pass" id="editar-admin-pass" placeholder="********">
            </div>
            <div>
              <label for="repetir-admin-pass" class="block font-medium text-sm mb-2 text-gray-900">Contraseña de nuevo</label>
              <input class="px-2 py-1 w-full bg-gray-50 border-gray-300 border-2 rounded-lg text-gray-500 text-xs lg:text-sm" type="password" name="repetir-admin-pass" id="repetir-admin-pass" placeholder="********">
            </div>
            <div>
              <label for="editar-admin-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre(s)</label>
              <input class="px-2 py-1 w-full bg-gray-50 border-gray-300 border-2 rounded-lg text-gray-500 text-xs lg:text-sm" type="text" name="editar-admin-name" id="editar-admin-name" placeholder="Administrador">
            </div>
            <div>
              <label for="editar-admin-surname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido(s)</label>
              <input class="px-2 py-1 w-full bg-gray-50 border-gray-300 border-2 rounded-lg text-gray-500 text-xs lg:text-sm" type="text" name="editar-admin-surname" id="editar-admin-surname" placeholder="Administrador">
            </div>
            <div>
              <label for="editar-admin-contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número de teléfono</label>
              <input class="px-2 py-1 w-full bg-gray-50 border-gray-300 border-2 rounded-lg text-gray-500 text-xs lg:text-sm" type="text" name="editar-admin-contact" id="editar-admin-contact" placeholder="+51 924126535">
            </div>
            <div class="buttons mt-4">
              <button id="cerrar-nuevo-btn" class="bg-gray-600 text-white rounded px-2 py-1">Cancelar</button>
              <button type="submit" class="bg-blue-500 text-white rounded px-2 py-1">Guardar Cambios</button>
            </div>
          </form>
        </div>
      </section>
      <footer>
        <div class="footer text-xs mt-12 lg:mt-5 text-center">
          <p>&#169 Alvaro Diaz 2023 <span class="text-blue-500">AdminLTE.io</span>. All rights reserved</p>
        </div>
      </footer>
    </main>
  </div>
  <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>