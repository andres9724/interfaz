$(function(){
  /*  $("#login").click(function(){
        $.ajax({
            type:'POST',
            url: "cambiar_estado_registro.php",
            dataType: "html",
            data: {
            iddoc:doc,
            tipo:"1",
            },
            success:function (data){
            console.log(data);
            alert(data);
            }
            });

    });*/

    $("#form_login").validate({
        rules: {
            nombre: {
                required: true
            },
            pass: {
                required: true
            }
        },
        messages: {
            nombre: {
                required: 'Campo obligatorio'
            },
            pass: {
                required: 'Campo obligatorio'
            }
        },
        submitHandler: function (form) {
            alert("dlslsdkdskl");

            
           

            return false;
        }
    });
});