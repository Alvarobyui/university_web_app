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

        echo "<p class='ml-6 p-2 text-xs text-white inline rounded bg-green-400'>¡Editado!</p>";
    } else {
        echo "algunos campos están vacios";
    }
}
?>
