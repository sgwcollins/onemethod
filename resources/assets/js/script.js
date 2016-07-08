$( document ).ready(function() {
    
	var loginForm = $(".add_email");
	$('.add_email').submit(function(event){

		event.preventDefault();

		 var formData = loginForm.serialize();

		$.ajax({

			   type: 'POST',
			   url: 'auth/register',
			   data:formData,
			   success: function(data) {
			    $('.alert-danger').addClass('hide');
			   	$('.form-container').addClass('fadeOutDown');
			    $('.alert-success').removeClass('hide');
			    $('.alert-success').addClass('fadeInUp');
			    $('.server-time').text(data)


			   },
				error : function(jqXHR, textStatus, errorThrown){
				    $('.alert-danger').removeClass('hide');
				    $('.email').focus();

				}
			
		});


	});



});