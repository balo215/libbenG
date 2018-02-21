$('document').ready(function(e){
    if(!e) e = window.event;
	$(".newsletter-btn").click(function(e){
    e.preventDefault();
		sendEmail();
	});
  $("#sendComment").click(function(){
    comment();
  });

	function sendEmail(){
    var subsName = $("#nlName").val();
    var subsEmail = $("#nlEmail").val();
		$.ajax({
  			type: "POST",
  			url: "contact.php",
  			data: {"type": "subscribe", "name":subsName, "email":subsEmail},
  			success: function(data){
          console.log(data);
          if(data["status"] == true){
  				swal(
  					'Gracias!',
  					'Ahora estas suscrito a nuestras noticias',
  					'success'
				)}else{
            swal(
             'Error!',
              data["message"],
              'error'
            )
          }
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

  function comment(){
    var name = $("#nameComment").val();
    var email = $("#emailComment").val();
    var content = $("#contentComment").val();
    console.log(name+ " " + email +" "+ content);
    $.ajax({
      type:"POST",
      url:"contact.php",
      data:{"type": "sendCom", 
            "name":name, 
            "email":email,
            "comment": content},
      success: function(data){
        console.log(data);
        if(data["status"] == true){
          swal(
            'Gracias!',
            'Pronto tendras respuesta a tu pregunta en tu correo.',
            'success'
        )}else{
            swal(
             'Error!',
              data["message"],
              'error'
            )
          }
      }, 
      error: function(response){
        console.log(response);
      }
    });
  }

});

