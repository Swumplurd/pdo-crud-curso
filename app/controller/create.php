<script>
    $("#agregar").click(() => {
        let nombre = $("#nombre").val()
        let telefono = $("#telefono").val()
        let email = $("#email").val()

        if( nombre == null || nombre.length == 0 || (/^\s+$/.test(nombre)) ) {
            return Swal.fire({
                title: 'Fallo',
                text: "Ingresa un nombre valido!",
                icon: 'warning'     
            })
        }

        if(telefono == null || telefono.length == 0 || !(/^\d{10}$/.test(telefono)) ) {
            return Swal.fire({
                title: 'Fallo',
                text: "Ingresa un numero valido!",
                icon: 'warning'     
            })
        }

        if(email == null || email.length == 0 ||  !(/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(email))) {
            return Swal.fire({
                title: 'Fallo',
                text: "Ingresa un email valido!",
                icon: 'warning'     
            })
        }

        $.ajax({
            url: './app/model/process/create.php',
            data: {
                nombre: nombre,
                telefono: telefono,
                email: email,
            },
            type: 'POST',
            success: () => {
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
                Swal.fire({
                    title: 'Error',
                    text: "Disculpa las molestias, hubo un error.",
                    icon: 'error',
                })
            }
        })
    })
</script>