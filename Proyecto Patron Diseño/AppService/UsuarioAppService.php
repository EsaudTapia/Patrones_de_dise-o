<?php

require "modelo/usuario.php";
require "DAO/DAOUsuario.php";
require "Commands/UsuarioRegistroCommands.php";
require "CommandsHandlers/UsuarioComandHandler.php";
require "Commands/UsuarioUpdateCommands.php";


class UsuarioAppService{

	public function listAppUsurio(){
		$dao= new DAOUsuario();
		$dao->listar();
	}


public function getRegister($modelo){	
	//$modelo = new UsuarioRegistroViewModel();
	$usuarioCommand= new UsuarioRegistroCommands();

	$usuarioCommand->setNombre($modelo->getNombre());
	$usuarioCommand->setUserName($modelo->getUserName());
	$usuarioCommand->setFechaNacimiento($modelo->getFechaNacimiento());
	$usuarioCommand->setCorreo($modelo->getCorreo());

	$comandHanler= new UsuarioComandHandler();
	$resultado= $comandHanler->Register($usuarioCommand);
	return $resultado;

	  //return $result = UsuarioComandHandler::Register($modelo);
}

public function getUpdate($modeloUpdate){	
	//$modelo = new UsuarioRegistroViewModel();
	$usuarioCommandU= new UsuarioUpdateCommands();
	$usuarioCommandU->setIdUsuario($modeloUpdate->getIdUsuario());
	$usuarioCommandU->setNombre($modeloUpdate->getNombre());
	$usuarioCommandU->setUserName($modeloUpdate->getUserName());
	$usuarioCommandU->setFechaNacimiento($modeloUpdate->getFechaNacimiento());
	$usuarioCommandU->setCorreo($modeloUpdate->getCorreo());

	$comandHanlerUp= new UsuarioComandHandler();
	$resultados= $comandHanlerUp->updateCommand($usuarioCommandU);
	return $resultados;

	  //return $result = UsuarioComandHandler::Register($modelo);
}

}
?>