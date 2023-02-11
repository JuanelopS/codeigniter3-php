(function($){
    $("#frm_login").submit(function(ev){

        ev.preventDefault();
        $.ajax({
            url: 'validate',
            type: 'POST',
            data: $(this).serialize(), //serialize empaqueta todos los datos del formulario para su envío
            sucess: function(data){
                var json = JSON.parse(data);
                console.log(json);
            },
            error: function(xhr){
                if(xhr.status == 400){
                    var json = JSON.parse(xhr.responseText);
                    if(json.email.length != 0){
                        $("#email" > div).html(json.email);
                        $("#email" > input).addClass('is-invalid');
                    }
                }
            },
        });

    });

})(jQuery)