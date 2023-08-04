<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="../dist/output.css" rel="stylesheet">
</head>

<body>
  <div class="bg-[#FFF5D2] flex flex-col items-center md:h-[100vh]">
    <div class="logo h-[190px] w-[190x] mt-5">
      <img src="../assets/logo-mid.jpg" alt="logo" class="w-full h-full">
    </div>
    <div class="caja-adapt w-full flex flex-col items-center md:flex-row md:justify-center md:items-start md:mt-8">
      <form class="flex flex-col gap-5 p-4 m-2 w-11/12 shadow-md bg-white rounded items-center max-w-[380px] md:my-0 md:h-[275px] lg:h-[310px]" action="#" method="POST">
        <label for="bienvenido" class="text-gray-600 md:mt-4">
          ¡Bienvenido! Ingresa con tu cuenta
        </label>
        <div class="flex justify-between items-center px-2 py-1 w-full border-gray-300 border-2 rounded text-gray-500">
          <input class="outline-none w-full text-sm lg:text-base" type="text" name="email" id="email" placeholder="Email">
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
              <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z" />
              <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z" />
            </svg>
          </div>
        </div>
        <div class="flex justify-between items-center px-2 py-1 w-full border-gray-300 border-2 rounded text-gray-400">
          <input class="outline-none w-full text-sm lg:text-base" type="password" name="password" id="password" placeholder="Password">
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
              <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z" />
            </svg>
          </div>
        </div>
        <button class="bg-blue-500 text-white rounded px-4 py-2 ml-auto md:ml-0 md:mt-4" id="login-btn">
          Ingresar
        </button>
      </form>
      <div id="info-access" class="flex flex-col gap-2 p-4 my-6 mx-2 w-11/12 shadow-md bg-white rounded items-start text-gray-600 max-w-md md:my-0">
        <div class="border-b-2 border-gray-500 w-full">
          <h1 class="">Información para el demo</h1>
        </div>
        <div class="">
          <h2 class="text-base lg:text-lg">Admin</h2>

          <p class="ml-6 text-sm lg:text-base">Username: admin@admin</p>
          <p class="ml-6 text-sm lg:text-base">Password: admin</p>
        </div>
        <div class="">
          <h2 class="text-base lg:text-lg">Maestro</h2>

          <p class="ml-6 text-sm lg:text-base">Username: maestro@maestro</p>
          <p class="ml-6 text-sm lg:text-base">Password: maestro</p>
        </div>
        <div class="">
          <h2 class="text-base lg:text-lg">Alumno</h2>

          <p class="ml-6 text-sm lg:text-base">Username: alumno@alunno</p>
          <p class="ml-6 text-sm lg:text-base">Password: alumno</p>
        </div>
      </div>
    </div>
    <footer>
      <div class="footer text-xs lg:text-base md:pt-36">
        <p>&#169 Alvaro Diaz 2023 <span class="text-blue-500">AdminLTE.io</span>. All rights reserved</p>
      </div>
    </footer>
  </div>
</body>

</html>