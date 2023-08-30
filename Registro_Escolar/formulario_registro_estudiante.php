<?php include "encabezado.php" ?>
<div class="row">
    <div class="col-12">
        <h1>Registro de estudiante</h1>
        <form action="guardar_estudiante.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input name="apellido" required type="text" id="apellido" class="form-control" placeholder="Apellido">
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input name="direccion" required type="text" id="direccion" class="form-control" placeholder="Direccion">
            </div>
            <div class="form-group">
                <label for="fecha">fecha_nacimiento</label>
                <input name="fecha_nacimiento" required type="date" id="fecha_nacimiento" class="form-control" placeholder="Fecha_nacimiento">
            </div>
            <div class="form-group">
                <label for="grado">Grado</label>
                <input name="grado" required type="text" id="grado" class="form-control" placeholder="Grado">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input name="telefono" required type="number" id="telefono" class="form-control" placeholder="Telefono">
            </div>
            <div class="form-group">
                <label for="seccion">Seccion</label>
                <input name="seccion" required type="text" id="seccion" class="form-control" placeholder="Seccion">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
