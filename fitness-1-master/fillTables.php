<?php
 	header('Content-type: application/json');
 	$action = new stdClass();
 	$action->get = $_GET;
 	$action->example = "hey you im php";

 	echo json_encode($action);
?>