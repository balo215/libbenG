$('document').ready(function(){
	$(".newsletter-btn").click(function(){
        event.preventDefault();
		sendEmail();
	});

	function sendEmail(){
		$.ajax({
  			type: "POST",
  			url: "contact.php",
  			data: {"type": "subscribe"},
  			success: function(data){
  				swal(
  					'Gracias!',
  					'Ahora estas suscrito a nuestras noticias',
  					'success'
				)
  			},
  			error: function(response){
  				console.log("error");
  				console.log(response);
  				swal(
  					'Error!',
  					'Ocurrio un error, intenta mas tarde',
  					'error'
  				)
  			} 
  		});
	};
});

