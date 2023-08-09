<div class="container">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <input type="text" name="id" id="id" value="<?php echo $datos["id"] ?>" hidden>
                <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $datos["nombre"] ?>" class="form-control" placeholder="Nombre" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono" value="<?php echo $datos["telefono"] ?>" class="form-control" placeholder="Telefono" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $datos["email"] ?>" class="form-control" placeholder="Email" aria-describedby="helpId">
                </div>
            </div>
            <button id="actualizar" class="btn btn-success">Actualizar</button>
        </div>
    </div>
</div>

<?php
    require_once("./app/controller/actualizar.php")
?>