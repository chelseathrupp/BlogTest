
	var signup = {



		submit: function(){
			var formData = {
				email: $('#email').val(),
				password: $('#password').val()
			}

			$.ajax({
				url: $('#loginForm').data('url'),
				data: formData,
				method: 'POST',
				success: function(rsp){
					console.log(rsp)
				},
				error: function(rsp){
					console.log(rsp)
				}
			});
		}


		bind: function(){
			$('#loginForm input[type=submit]').on('click', function(e){
				e.preventDefault()
				signup.submit()
			})
		},

		init: function(){
			signup.bind()
		}




	}
