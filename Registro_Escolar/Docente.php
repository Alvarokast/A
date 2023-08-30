<?php
class Docente
{
    private $nombre, $apellido, $direccion, $telefono,  $id;

    public function __construct($nombre, $apellido, $direccion, $telefono, $id = null)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        if ($id) {
            $this->id = $id;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO docentes
            (nombre, apellido, direccion, telefono)
                VALUES
                (?, ?, ?, ?)");
        $sentencia->bind_param("ssss", $this->nombre, $this->apellido, $this->direccion, $this->telefono);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT id, nombre, apellido, direccion, telefono FROM docentes");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public static function obtenerUno($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id, nombre, apellido, direccion, telefono FROM docentes WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }
    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("update docentes set nombre = ?,  apellido = ?, direccion = ?,  telefono = ? where id = ?");
        $sentencia->bind_param("ssssi", $this->nombre, $this->apellido, $this->direccion, $this->telefono, $this->id);
        $sentencia->execute();
    }

    public static function eliminar($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM docentes WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
    }
}
