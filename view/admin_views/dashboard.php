<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="../../dist/output.css" rel="stylesheet">
</head>

<body class="h-[100vh]">
  <div class="text-2xl flex h-[100%]">
    <aside class="p-4 w-56 text-sm bg-[#3f454c] static text-neutral-300">
      <div class="logo flex gap-2 items-center">
        <div class="img rounded-full grid place-items-center w-[35px] h-[35px]"><img class="rounded-full h-full w-full" src="../../assets/logo-small.png" alt="uni"></div>
        <h2>Universidad</h2>
      </div>
      <div class="rol">
        <p>Alvaro Diaz</p>
        <p>Administrador</p>
      </div>
      <div class="menu">
        <p>MENU DE ADMINISTRACIÓN</p>
        <nav>
          <ul>
            <li>
              <a href="permisos.php">
                <div class="img"><img src="permisos.png" alt="ico"></div>
                <p>Permisos</p>
              </a>
            </li>
            <li>
              <a href="maestros.php">
                <div class="img"><img src="maestros.png" alt="ico"></div>
                <p>Maestros</p>
              </a>
            </li>
            <li>
              <a href="Alumnos.php">
                <div class="img"><img src="alumnos.png" alt="ico"></div>
                <p>Alumnos</p>
              </a>
            </li>
            <li>
              <a href="clases.php">
                <div class="img"><img src="clases.png" alt="ico"></div>
                <p>Clases</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <main>
      <section class="bg-white">
        <a href="#">
          <div class="img"><img src="menu.png" alt="|||"></div>
          <h2>Home</h2>
        </a>
        <a href="#">
          <h2>Administrador</h2>
          <div class="img"><img src="arrow.png" alt="i"></div>
        </a>
      </section>
      <section class="bg-[#F5F6FA]">
        <div class="title">
          <h2>Dashboard</h2>
          <div class="path">
            <span>Home</span> / Dashboard
          </div>
        </div>
        <div class="content">
          <div class="bienvenido">
            <h3>Bienvenido</h3>
            <p>Selecciona la acción que quieras realizar en las pestañas del menu a la izquierda</p>
          </div>
        </div>
      </section>
      <footer>
        <div class="footer">
          <p>Copyright 2023 <span>AdminLTE.io</span>. All rights reserved</p>
        </div>
      </footer>
    </main>
  </div>
</body>

</html>