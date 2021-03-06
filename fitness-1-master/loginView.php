<?php
    session_start();
    if(isset($_SESSION["user"])){
        echo "<script> window.location = 'adminView.php'; </script>";
    }
?>

<head>
    <title>Torre Libben</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Venta de departamentos libben">
    <meta name="keywords" content="libben departamentos renta venta">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>


<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
            <h4>Bienvenido.</h4>
            <form method="post" action="login.php">
                <input type="email" id="userName" name="userName" class="form-control input-sm chat-input" placeholder="Correo" required />
                </br>
                <input type="password" id="userPassword" name="userPassword" class="form-control input-sm chat-input" placeholder="Contraseña" required="required" />
                </br>
                <div class="wrapper">
                <span class="group-btn">     
                    <input href="#" class="btn btn-primary btn-md" name="login" type="submit" value = "Entrar">
            </form>
            </span>
            </div>
            </div>
        
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="assets/js/login.js"></script>
