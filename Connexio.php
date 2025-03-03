<?php
/**
 * Clase Connexio
*/
class Connexio {
    /**
     * Función para obtener una conexión a la base de datos.
     * Esta función establece una conexión con la base de datos utilizando los parámetros de configuración especificados.
     * 
     * @return object Retorna un objeto de conexión a la base de datos.
    */
    private $host = "localhost";
    private $usuario = "root";
    private $contraseña = "";
    private $baseDatos = "la_meva_botiga";

    public function obtenirConnexio() {
        $conexion = new mysqli($this->host, $this->usuario, $this->contraseña, $this->baseDatos);

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        return $conexion;
    }
}

?>
