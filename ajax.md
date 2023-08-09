/* $.ajax({
        url: './app/model/crud.class.php',
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