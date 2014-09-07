<?php
	$servicio = $_POST['servicio'];
	$accion = $_POST['accion'];
	echo shell_exec("sudo service $servicio $accion");
	//echo "sudo service $servicio start";
?>