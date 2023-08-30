<?php
?>
<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "Estudiante.php";
$estudiantes = Estudiante::promedio();
?>
<div class="row">
    <div class="col-12">
        <h1>Promedios por estudiantes</h1>

    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Promedio</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $estudiante) { ?>
                    <tr>
                        <td><?php echo $estudiante["nombre"] ?></td>
                        <td><?php echo $estudiante["apellido"] ?></td>
                        <td><?php echo $estudiante["promedio"] ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php

