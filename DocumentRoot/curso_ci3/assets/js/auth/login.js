(function($){
    $("#loginForm").submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'login/validate',
            type: 'POST',
            data: $(this).serialize(), //serialize empaqueta todos los datos del formulario para su envío
            success: function(data){
                var json = JSON.parse(data);
                console.log(json.email);
            },
            error: function(){
                
            },
        });
    });

})(jQuery)