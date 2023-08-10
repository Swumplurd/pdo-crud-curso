<script>
    $("#actualizar").click(() => {
        let id = $("#id").val()
        let nombre = $("#nombre").val()
        let telefono = $("#telefono").val()
        let email = $("#email").val()

        $.ajax({
            url: './app/model/process/actualizar.php',
            data: {
                id: id,
                nombre: nombre,
                telefono: telefono,
                email: email,
            },
            type: 'POST',
            success: () => {
                Swal.fire({
                    title: 'OK',
                    text: "Tu registro ha sido actualizado!",
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "/read"
                    }
                })
            },
            error: (jqXHR, status, error) => {
                Swal.fire({
                    title: 'Error',
                    text: "Disculpa las molestias, hubo un error.",
                    icon: 'error',
                })
            },
        })
    })
</script>