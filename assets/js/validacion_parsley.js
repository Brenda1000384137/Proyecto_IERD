$(document).ready(function() {
    $('#validacion').parsley();
    //Validaciones creadas :v
    //Primero colocar el nombre en el input
    window.Parsley.addValidator('validardocumento', {
        validateString: function (value) {
        url = "../../assets/validacion/validacionu.php";
        let x = $.ajax({
            url,
            type: "POST",
            async: false,
            data: { n_documento: value }
        }).responseText;
        if (x == "false") {
            return false;
        } else if (x == "true") {
            return true;
        }
        },
        messages: { es: "El número de célula ya existe, intente de nuevo." }
    });

    window.Parsley.addValidator('validarcorreo', {
        validateString: function (value) {
        url = "../../assets/validacion/validacionc.php";
        let x = $.ajax({
            url,
            type: "POST",
            async: false,
            data: { correo: value }
        }).responseText;
        if (x == "false") {
            return false;
        } else if (x == "true") {
            return true;
        }
        },
        messages: { es: "El correo ya existe, intente de nuevo." }
    });

    
});

$(document).ready(function() {
    $('#validacion2').parsley();
});


