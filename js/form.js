$(document).ready(function() {

	$('form').submit(function(event) {

		event.preventDefault();
		

		$.ajax({
			type: $(this).attr('method'),
			url: "form2.php",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(result) {
				$('#myform_status').html(result);
				new Ajax.Request('process.php', { on401: function(response) { var redirect = response.getHeader('Location'); document.location = redirect; } }); 

			},
		});
	});
});
