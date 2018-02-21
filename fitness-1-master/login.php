<?php
    session_start();
    include('conection.php');
    if(isset($_POST["login"])){
    	$user = $_POST['userName'];
    	$pwd = $_POST["userPassword"];
    	$log = mysqli_query($connect, "SELECT * from users where email = '$user' AND pwd = '$pwd'");
    	if(mysqli_num_rows($log)>0){
    		$row = mysqli_fetch_array($log);
    		$_SESSION["user"] = $row['aka'];
    		
    		echo '<script> window.location = "adminView.php"; </script>';
    	} else{
    		echo '<script> window.location="loginView.php"; </script>';
    	}
    }
?>
