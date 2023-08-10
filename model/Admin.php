<?php
class Admin {
    // Atributos
    private $email;
    private $password;
    private $rol;
    private $nombre;
    private $apellido;
    private $contacto;
    private $estado;

    // Constructor
    public function __construct($email, $password, $rol, $nombre, $apellido, $contacto, $estado) {
        $this->email = $email;
        $this->password = $password;
        $this->rol = $rol;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->contacto = $contacto;
        $this->estado = $estado;
    }

    // Getters y Setters
    public function mostrarEmail() {
        return $this->email;
    }

    public function actualizarEmail($email) {
        $this->email = $email;
    }

    public function mostrarPassword() {
        return $this->password;
    }

    public function actualizarPassword($password) {
        $this->password = $password;
    }

    public function mostrarRol() {
        return $this->rol;
    }

    public function cambiarRol($rol) {
        $this->rol = $rol;
    }

    public function mostrarNombre() {
        return $this->nombre;
    }

    public function cambiarNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function mostrarApellido() {
        return $this->apellido;
    }

    public function cambiarApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function mostrarContacto() {
        return $this->contacto;
    }

    public function cambiarContacto($contacto) {
        $this->contacto = $contacto;
    }

    // Métodos adicionales
    public function verUsuarios() {

    }

    public function editarUsuarios($conn, $usuario, $id, $boton, $email, $name, $surname, $contact) {
        if($usuario === "alumno") {
            if(!empty($_POST[$boton])) { // Lógica corregida aquí
                if (!empty($_POST[$email]) && !empty($_POST[$name]) && !empty($_POST[$surname]) && !empty($_POST[$contact])) {
                    $correo = $_POST[$email]; 
                    $nombre = $_POST[$name]; 
                    $apellido = $_POST[$surname]; 
                    $contacto = $_POST[$contact]; 
                    
                    // Utilizando una consulta preparada
                    $stmt = $conn->prepare("UPDATE usuario 
                        SET email = ?, 
                            nombre = ?, 
                            apellido = ?, 
                            contacto = ?
                        WHERE id = ?"); // Corregido aquí
                    $stmt->bind_param("ssssi", $correo, $nombre, $apellido, $contacto, $id); // Corregido aquí
                    
                    if ($stmt->execute()) {
                       /*  echo "<div>Correcto</div>"; */
                    } else {
                        /* echo "<div>Hubo un error, vuelve a intentar.</div>"; */
                    }
                    
                    $stmt->close();
                    
                } else {
                  /*   echo "algunos campos están vacios"; */
                }
            } else {
               /*  echo "botón no encontrado"; */
            }
        } else {
           /*  echo "no eres alumno"; */
        }
    }

    public function crearUsuarios() {
        // Implementar lógica para crear usuarios
    }

    public function verClase() {
        // Implementar lógica para ver clase
    }

    public function editarClase() {
        // Implementar lógica para editar clase
    }

    public function crearClase() {
        // Implementar lógica para crear clase
    }
}

?>