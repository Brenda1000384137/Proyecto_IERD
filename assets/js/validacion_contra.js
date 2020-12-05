// Cambio de contraseña 
$('.newPass').keyup(function(){
    validPass();
});

//Formulario cambio de contraseña
$('#frmChangePass').submit(function(e){
    e.preventDefault();

    var passActual = $('#txtPassUser').val();
    var passNuevo = $('#txtNewPassUser').val();
    var confirmPassNuevo = $('#txtPassConfirm').val();
    var action = "changePassword";

    if(passNuevo !=confirmPassNuevo){
        $('.alertChangePass').html('<p style="color:red;">Las contraseñas no son iguales.</p>');
        $('.alertChangePass').slideDown();
        return false;
    }
    if(passNuevo.length < 10 ){
        $('.alertChangePass').html('<p style="color:red;>La contraseña debe ser de 10 caracteres como mínimo.</p>');
        $('.alertChangePass').slideDown();
        return false;
    }

    $.ajax({
        url: '../../assets/validacion/ajax.php',
        type: "POST",
        async: true,
        data: {action:action,passActual:passActual,passNuevo:passNuevo},

        success: function(response)
        {
            if(response != 'error')
            {
                var info = JSON.parse(response);
                if(info.cod == '00'){
                    $('.alertChangePass').html('<p style="color:green;">'+info.msg+'</p>');
                    $('#frmChangePass')[0].reset();
                }else{
                    $('.alertChangePass').html('<p style="color:red;">'+info.msg+'</p>');
                }
                $('.alertChangePass').slideDown();
            }
        },
        error: function(error){
        }
    });

});

function validPass(){
    var passNuevo = $('#txtNewPassUser').val();
    var confirmPassNuevo = $('#txtPassConfirm').val();
    if(passNuevo !=confirmPassNuevo){
        $('.alertChangePass').html('<p style="color:red;">Las contraseñas no son iguales.</p>');
        $('.alertChangePass').slideDown();
        return false;
    }
    if(passNuevo.length < 10 ){
        $('.alertChangePass').html('<p>La contraseña debe ser de 10 caracteres como mínimo.</p>');
        $('.alertChangePass').slideDown();
        return false;
    }

    $('.alertChangePass').html('');
    $('.alertChangePass').slideUp();
}