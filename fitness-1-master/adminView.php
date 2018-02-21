<?php
session_start();
    if(!isset($_SESSION["user"])){
        echo "<script> window.location = 'loginView.php'; </script>";
    }

?>

<!DOCTYPE html>
<html ng-app="libben">
<head>
	<title>Entraste prro! :V</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
</head>
<body ng-controller="mainController as main">
<p> {{ main.example }} </p>
<div>
	<users-Table></users-Table>
</div>
<a href="logout.php"><button>Salir</button></a>
<script type="text/javascript" src="assets/js/app.js"></script>

</body>
</html>