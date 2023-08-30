<?php
include_once "conexion.php";
include_once "Estudiante.php";
include_once "encabezado.php";
$estudiante = Estudiante::obtenerUno($_GET["id"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar estudiante</h1>
        <form action="actualizar_estudiante.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $estudiante->nombre ?>" name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input value="<?php echo $estudiante->apellido ?>" name="apellido" required type="text" id="apellido" class="form-control" placeholder="Apellido">
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input value="<?php echo $estudiante->direccion ?>" name="direccion" required type="text" id="direccion" class="form-control" placeholder="Direccion">
            </div>
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha_nacimiento</label>
                <input value="<?php echo $estudiante->fecha_nacimiento ?>" name="fecha_nacimiento" required type="date" id="fecha_nacimiento" class="form-control" placeholder="Fecha_nacimiento">
            </div>
            <div class="form-group">
                <label for="grado">Grado</label>
                <input value="<?php echo $estudiante->grado ?>" name="grado" required type="text" id="grado" class="form-control" placeholder="Grado">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input value="<?php echo $estudiante->telefono ?>" name="telefono" required type="number" id="telefono" class="form-control" placeholder="Telefono">
            </div>
            <div class="form-group">
                <label for="seccion">Seccion</label>
                <input value="<?php echo $estudiante->seccion ?>" name="seccion" required type="text" id="seccion" class="form-control" placeholder="Seccion">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
