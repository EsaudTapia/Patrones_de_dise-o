<?php

require 'parametros.php';

function conectar(){
	$con = new mysqli(HOST,USER,PASS,DB);
	if($con->connect_errno){
		print "Ocurrio un error: ". $con->connect_error;
	}
	return $con;
}

?>