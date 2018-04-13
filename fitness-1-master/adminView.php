<?php
session_start();
    if(!isset($_SESSION["user"])){
        echo "<script> window.location = 'loginView.php'; </script>";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Entraste prro! :V</title>
</head>
<body>
<p>heeeeeeey</p>

<a href="logout.php"><button>Salir</button></a>
</body>
</html>