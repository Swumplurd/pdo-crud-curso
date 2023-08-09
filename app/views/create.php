<div class="container">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" aria-describedby="helpId">
                </div>
            </div>
            <div class="form-group">
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="helpId">
                </div>
            </div>
            <button id="agregar" class="btn btn-success">Agregar</button>
        </div>
    </div>
</div>

<?php
    require_once("./app/controller/create.php")
?>