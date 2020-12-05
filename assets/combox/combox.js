$(document).ready(function(){
    $("#cbx_usuario").change(function(){
        $("#combox_curso").find('option').remove().end().append(
        'option value="whatever"></option>').val('whatever');

        $("#cbx_usuario option:selected").each(function() {
            id_usuario = $(this).val();
            $.post("../../assets/combox/getUsuario.php", { id_usuario: id_usuario
            }, function(data) {
                $("#cbx_asignatura").html(data);
            console.log(data);      
            });
        });
    })    
});

$(document).ready(function(){
    $("#cbx_asignatura").change(function(){
        $("#cbx_asignatura option:selected").each(function(){
            id_asignatura = $(this).val();
            $.post("../../assets/combox/getCurso.php",{ id_asignatura: id_asignatura
            },function(data){
                $("#combox_curso").html(data);
                console.log(data);   
            });
        });

    })
});

$(document).ready(function(){
    $("#cbx_asignatura").change(function(){
        $("#cbx_asignatura option:selected").each(function(){
            id_asignatura = $(this).val();
            $.post("../../assets/combox/getNotaAsig.php",{ id_asignatura: id_asignatura
            },function(data){
                $("#combox_actividad").html(data);
                console.log(data);   
            });
        });

    })
});

$(document).ready(function(){
    $("#combox_actividad").change(function(){
        $("#combox_actividad option:selected").each(function(){
            id_plan = $(this).val();
            $.post("../../assets/combox/getNotaActividad.php",{ id_plan: id_plan
            },function(data){
                $("#combox_estu").html(data);
                console.log(data);   
            });
        });

    })
});
