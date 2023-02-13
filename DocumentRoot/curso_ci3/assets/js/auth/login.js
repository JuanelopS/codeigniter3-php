(function ($) {
	$("#loginForm").submit(function (e) {
		$("#alert").html("");
		$.ajax({
			url: "login/validate",
			type: "POST",
			data: $(this).serialize(), //serialize(): all data form for submit
			success: function (err) {
				var json = JSON.parse(err);
				// console.log(json);
				window.location.replace(json.url);

			},
            /* 
                FIXME: message for blank password not hidden if you introduce it later
            */
			statusCode: {
				400: function (xhr) {
					$("#email > input").removeClass("is-invalid");
					$("#password > input").removeClass("is-invalid");
					var json = JSON.parse(xhr.responseText);
					if (json.email.length != 0) {
						$("#email > div").html(json.email);
						$("#email > input").addClass("is-invalid");
					}
					if (json.password.length != 0) {
						$("#password > div").html(json.password);
						$("#password > input").addClass("is-invalid");
					}
				},
				401: function (xhr) {
					var json = JSON.parse(xhr.responseText);
					console.log(json);
                    $("#alert").html('<div class="alert alert-danger" role="alert"></div>');
                    $("#alert > div").text(json.msg); 
				}
			}
		});

        e.preventDefault();
	});
})(jQuery);
