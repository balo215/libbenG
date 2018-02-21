<?php
	header('Content-type: application/json');

	function sendEmail($name, $email){
		$to      = $email;
		$subject = 'Bienvenido a Torre Libben!';
		$message = 'Hola ' . $name . " \nAhora formas parte de nuestro cartel de noticias! \nSi tenemos informacion o promociones especiales, seras el primero en saber. \nGracias!";
		$headers = 'From: publicidad@torrelibben.com.mx';
		addNewSubscriber($name, $email);
		if(mail($to, $subject, $message, $headers)){
			$data = new stdClass();
			$data->status = true;
			$data->message = "Correo de subscripcion enviado";
			echo json_encode($data);
		}else{
			$data = new stdClass();
			$data->status = false;
			$data->message = "Algo fallo";
			echo json_encode($data);
		}
	}

	$action = $_POST["type"];
	switch ($action) {
		case 'subscribe':
				if($_POST["name"] == "" || !isset($_POST["name"])){
					$data = new stdClass();
					$data->status = false;
					$data->message = "Nombre faltante";
					echo json_encode((array)$data);
					return;
				}
				if($_POST["email"]=="" || !isset($_POST["email"])){
					$data = new stdClass();
					$data->status = false;
					$data->message = "Correo faltante";
					echo json_encode($data);
					return;
				}
				sendEmail($_POST["name"], $_POST["email"]);
				return true;
				
			break;

		case 'sendCom':
			if($_POST["name"] == "" || !isset($_POST["name"])){
				$data = new stdClass();
				$data->status = false;
				$data->message = "Todos los campos son requeridos";
				echo json_encode((array)$data);
				return;
			}
			if($_POST["email"] == "" || !isset($_POST["email"])){
				$data = new stdClass();
				$data->status = false;
				$data->message = "Todos los campos son requeridos";
				echo json_encode((array)$data);
				return;
			}
			if($_POST["comment"]=="" || !isset($_POST["comment"])){
				$data = new stdClass();
				$data->status = false;
				$data->message = "Todos los campos son requeridos";
				echo json_encode((array)$data);
				return;
			}
			saveComment($_POST["name"], $_POST["email"], $_POST["comment"]);
			return true;
			break;
		
		default:
				echo "something bad happened";
			break;
	}

	function addNewSubscriber($name, $email){
	    include('conection.php');

		$sql = "INSERT INTO subscribers (nombre, email) VALUES ('$name', '$email')";

		if(mysqli_query($connect, $sql)){
    		return true;
		} else{
    		return false;
		}
	}
	function saveComment($name, $email, $comment){
	    include('conection.php');

	    $to      = "publicidad@torrelibben.com.mx";
		$subject = 'Bienvenido a Torre Libben!';
		$message = $comment;
		$headers = 'From: $email';
		$data = new stdClass();
		if(mail($to, $subject, $message, $headers)){

			$data->mail->status = true;
			$data->mail->message = "Correo de subscripcion enviado";
		}else{
		
			$data->status = false;
			$data->message = "Algo fallo";

		}
		$sql = "INSERT INTO comentarios (nombre, email, comentario) VALUES ('$name', '$email', '$comment')";

		if(mysqli_query($connect, $sql)){
			$data->db->status = true;
			$data->db->message = "pregunta enviada";
			echo json_encode($data);
    		return true;
		} else{
			$data->db->status = false;
			$data->db->message = "Algo fallo";
			echo json_encode($data);
    		return false;
		}
	}


?>
