<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <a id="agregar" class="btn btn-success btn-block my-4" href="/create">Añadir</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table text-center table-dark bg-gradient">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($datos as $dato) :
                    ?>
                        <tr>
                            <td><?php echo $dato['nombre'] ?></td>
                            <td><?php echo $dato['telefono'] ?></td>
                            <td><?php echo $dato['email'] ?></td>
                            <td><a href="/update&id=<?php echo $dato['id'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen"></i>Actualizar</a></td>
                            <td><a href="/delete&id=<?php echo $dato['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>Eliminar</a></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>