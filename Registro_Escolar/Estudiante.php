<?php
class Estudiante
{
    private $nombre, $apellido, $direccion, $fecha_nacimiento, $grado, $telefono, $seccion, $id;

    public function __construct($nombre, $apellido, $direccion, $fecha_nacimiento, $grado, $telefono, $seccion, $id = null)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->grado = $grado;
        $this->telefono = $telefono;
        $this->seccion = $seccion;
        if ($id) {
            $this->id = $id;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO estudiantes
            (nombre, apellido, direccion, fecha_nacimiento, grado, telefono,  seccion)
                VALUES
                (?, ?, ?, ?, ?, ?, ?)");
        $sentencia->bind_param("sssssss", $this->nombre, $this->apellido, $this->direccion, $this->fecha_nacimiento, $this->grado, $this->telefono, $this->seccion);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT id, nombre, apellido, direccion, fecha_nacimiento, grado, telefono, seccion FROM estudiantes");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public static function promedio()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT e.nombre, e.apellido, round(AVG(puntaje),2) AS promedio FROM notas_estudiantes_materias as m INNER JOIN estudiantes as E ON e.id = m.id_estudiante GROUP BY m.id_estudiante
        ");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public static function obtenerUno($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id, nombre, apellido, direccion, fecha_nacimiento, grado, telefono, seccion FROM estudiantes WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }
    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("update estudiantes set nombre = ?,  apellido = ?, direccion = ?, fecha_nacimiento = ?, grado = ?, telefono = ?, seccion = ? where id = ?");
        $sentencia->bind_param("sssssssi", $this->nombre, $this->apellido, $this->direccion, $this->fecha_nacimiento, $this->grado, $this->telefono, $this->seccion, $this->id);
        $sentencia->execute();
    }

    public static function eliminar($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM estudiantes WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
    }
}
