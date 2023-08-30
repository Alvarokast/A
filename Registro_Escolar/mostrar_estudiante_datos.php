<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "Estudiante_datos.php";
$estudiantes = Estudiante_datos::obtener();
?>
<div class="row">
    <div class="col-12">
        <h1>Mostrar materias de estudiantes</h1>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>materia</th>
                    <th>Grado</th>
                    <th>Sección</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $estudiante) { ?>
                    <tr>
                        <td><?php echo $estudiante["nombre"]?></td>
                        <td><?php echo $estudiante["apellido"] ?></td>
                        <td><?php echo $estudiante["materia"] ?></td>
                        <td><?php echo $estudiante["grado"]?></td>
                        <td><?php echo $estudiante["seccion"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>