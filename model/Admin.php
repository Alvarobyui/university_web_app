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

    public function editarUsuarios($usuario) {
       /*  if($usuario == "alumno") */
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