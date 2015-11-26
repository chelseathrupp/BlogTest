
	var signup = {



		submit: function(){

		},

		bind: function(){
			$('#loginForm input[type="submit"]').on('click',function(e){
				e.preventDefault()
				
			});
		},

		init: function(){
			signup.bind()
		}




	}
