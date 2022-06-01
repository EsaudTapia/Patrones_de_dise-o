<?php

class Usuario{
	private $idUsuario;
	private $nombre;
	private $userName;
	private $fechaNacimiento;
	private $correo;

	public function Usuario(){

	}

	public function getIdUsuario(){
		return $this->idUsuario;
	}

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

	public function setIdUsuario($valor){
		$this->idUsuario=$valor;
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