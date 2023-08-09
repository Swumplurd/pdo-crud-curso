<script>
    $("#agregar").click(() => {
        let nombre = $("#nombre").val()
        let telefono = $("#telefono").val()
        let email = $("#email").val()

        $.ajax({
            url: './app/model/process/create.php',
            data: {
                nombre: nombre,
                telefono: telefono,
                email: email,
            },
            type: 'POST',
            success: (json) => {
                Swal.fire({
                    title: 'OK',
                    text: "Tu registro ha sido guardado!",
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "/read"
                    }
                })
            },
            error: (jqXHR, status, error) => {
                alert('Disculpe, existió un problema');
            }
        })
    })
</script>