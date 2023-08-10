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
                            <td><button id="borrar" class="btn btn-danger" value="<?php echo $dato['id'] ?>"><i class="fa-solid fa-trash-can"></i>Eliminar</button></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    const on = (element, event, selector, handler) => {
        element.addEventListener(event, (e) => {
            if (e.target.closest(selector)) {
                handler(e, e.target.closest(selector).value);
            }
        });
    };

    on(document, "click", "#borrar", (e, id) => {
        Swal.fire({
            title: 'Seguro?',
            text: "Estas seguro de borrar este registro?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Borralo'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Borrado!',
                    text: 'El registro ha sido borrado',
                    icon: 'success',
                    timer: 1500
                })
                window.location.href = `/delete&id=${id}`
            }
        })
    });
</script>