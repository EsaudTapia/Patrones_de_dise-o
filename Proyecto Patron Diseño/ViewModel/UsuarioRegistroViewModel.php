<?php

class UsuarioRegistroViewModel{

	private $nombre;
	private $userName;
	private $fechaNacimiento;
	private $correo;

	public function getNombre(){
		return $this->nombre;
	}

	public function getUserName(){
		return $this->userName;
	}

	public function getFechaNacimiento(){
		return $this->fechaNacimiento;
	}

	public function getCorreo(){
		return $this->correo;
	}


	public function setNombre($valor){
		$this->nombre=$valor;
	}

	public function setUserName($valor){
		$this->userName=$valor;
	}

	public function setFechaNacimiento($valor){
		$this->fechaNacimiento=$valor;
	}

	public function setCorreo($valor){
		$this->correo=$valor;
	}

}

?>