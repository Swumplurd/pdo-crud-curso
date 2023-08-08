<div class="container">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="telefono">telefono</label>
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

<script>
    /* $.ajax({
        url: './app/db/crud.class.php',
        data: {
            id: 123
        },
        type: 'GET',
        dataType: 'json',
        success: (json) => {
            $('<h1/>').text(json.title).appendTo('body');
            $('<div class="content"/>')
                .html(json.html).appendTo('body');
        },
        error: (jqXHR, status, error) => {
            alert('Disculpe, existió un problema');
        },
        complete: (jqXHR, status) => {
            alert('Petición realizada');
        }
    }); */

    $("#agregar").click(() => {
        let nombre = $("#nombre").val()
        let telefono = $("#telefono").val()
        let email = $("#email").val()

        $.ajax({
            url: './app/db/process/create.php',
            data: {
                nombre: nombre,
                telefono: telefono,
                email: email,
            },
            type: 'POST',
            success: (json) => {
                console.log(json)
            },
            error: (jqXHR, status, error) => {
                alert('Disculpe, existió un problema');
            },
            complete: (jqXHR, status) => {
                alert('Petición realizada');
            }
        })
    })
</script>