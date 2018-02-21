<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>Adios :C</p>

<?php
	session_start();
	session_destroy();
	echo '<script> window.location = "loginView.php" </script>' ;
?>
</body>
</html>