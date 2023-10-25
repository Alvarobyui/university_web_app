<?php
if(isset($_POST["editar-perfil-btn"])) {
    if(!empty($_POST["editar-admin-pass"]) && !empty($_POST["repetir-admin-pass"]) && !empty($_POST["editar-admin-name"]) && !empty($_POST["editar-admin-surname"])) { 
        if($_POST["editar-admin-pass"] === $_POST["repetir-admin-pass"]) {
            $email = $_POST["editar-admin-email"];
            $nombre = $_POST["editar-admin-name"];
            $apellido = $_POST["editar-admin-surname"];
            $contacto = $_POST["editar-admin-contact"];
            
            // Encriptar la contraseña
            $password = password_hash($_POST["editar-admin-pass"], PASSWORD_DEFAULT);
            
            $stmt = $conn->prepare("UPDATE usuario SET nombre = ?, apellido = ?, contacto = ?, password = ? WHERE email = ?");
            $stmt->bind_param('sssss', $nombre, $apellido, $contacto, $password, $email);
            
            if(!$stmt->execute()) {
              echo "<p class='ml-6 p-2 text-xs text-white inline rounded font-extrabold bg-red-500'>¡Ups! Intenta de nuevo</p>";         
              exit();     
            } else {
              echo "<p class='ml-6 p-2 text-xs text-white inline rounded bg-green-400'>¡Perfil Editado!</p>";
            }
        } else {
            echo "Las contraseñas no coinciden.";
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }
}
