<?php
if (isset($_POST["guardar-cambios-btn"])) {
    if (!empty($_POST["editar-email"])) {
        $email = $_POST["editar-email"];
        if($_POST["rol-usuario"] == "admin") {
          $rol = 1;
        }elseif ($_POST["rol-usuario"] == "maestro") {
          $rol = 2;
        }else {
          $rol = 3;
        }
        $estado = isset($_POST["estado-usuario"]) ? 1 : 0;

        $sql = $conn->query("UPDATE usuario SET rol = '$rol', estado = '$estado' WHERE email = '$email';");

        echo "<div class='ml-2'>Refresca la página para ver los cambios, por favor.</div>";
    } else {
        echo "algunos campos están vacios";
    }
}
?>
