<?php
include_once "conexion.php";
include_once "Docente.php";
include_once "encabezado.php";
$docente = Docente::obtenerUno($_GET["id"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar estudiante</h1>
        <form action="actualizar_docente.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $docente->nombre ?>" name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input value="<?php echo $docente->apellido ?>" name="apellido" required type="text" id="apellido" class="form-control" placeholder="Apellido">
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input value="<?php echo $docente->direccion ?>" name="direccion" required type="text" id="direccion" class="form-control" placeholder="Direccion">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input value="<?php echo $docente->telefono ?>" name="telefono" required type="number" id="telefono" class="form-control" placeholder="Telefono">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
