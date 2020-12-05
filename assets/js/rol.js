
function submitContactForm(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;
    var nombre = $('#nombre').val();
    var estado = $('#estado').val();
    if(nombre.trim() == '' ){
        alert('Please enter your name.');
        $('#nombre').focus();
        return false;
    }else if(estado.trim() == '' ){
        alert('Please enter your email.');
        $('#nombre').focus();
        return false;
    }else if(estado.trim() != '' && !reg.test(estado)){
        alert('Please enter valid email.');
        $('#estado').focus();
        return false;
    }else{
        $.ajax({
            type:'POST',
            url:'../../Vistas/rol/Listar.php',
            data:'contactFrmSubmit=1&nombre='+nombre+'&estado='+estado,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                if(msg == 'ok'){
                    $('#nombre').val('');
                    $('#estado').val('');
                    $('.statusMsg').html('<span style="color:green;">Thanks for contacting us</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.btnGuardar').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}
$(document).on("click", ".btnEditar", function(){		        

    fila = $(this).closest("tr");	        
    id_rol= parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
    nombre = fila.find('td:eq(1)').text();
    estado = fila.find('td:eq(2)').text();
    $("#nombre").val(nombre);
    $("#estado").val(apellido);
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white" );
    $(".modal-title").text("Editar Usuario"); //título de la modal para editar
    $('#modalCRUD').modal('show');		   
});
