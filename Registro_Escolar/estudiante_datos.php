<?php
class estudiante_datos
{
    private $nombre, $apellido, $grado, $seccion, $id;

    public function __construct($nombre, $apellido, $grado, $seccion, $id = null)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->grado = $grado;
        $this->seccion = $seccion;
        if ($id) {
            $this->id = $id;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO estudiantes
            (nombre, apellido, grado, seccion)
                VALUES
                (?, ?, ?, ?)");
        $sentencia->bind_param("ssss", $this->nombre, $this->apellido, $this->grado, $this->seccion);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT e.id, e.nombre, e.apellido,e.grado, e.seccion, materias.nombre AS materia
        FROM estudiantes AS e 
        LEFT JOIN notas_estudiantes_materias
        ON notas_estudiantes_materias.id_estudiante = e.id
        LEFT JOIN materias
        ON materias.id = notas_estudiantes_materias.id_materia");
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

        