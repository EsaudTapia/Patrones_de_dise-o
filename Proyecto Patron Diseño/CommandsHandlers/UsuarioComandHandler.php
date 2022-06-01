<?php

	class UsuarioComandHandler{
		
		public function Register($comand){

			$usuarios= new Usuario();
			$usuarios->setNombre($comand->getNombre());
			$usuarios->setUserName($comand->getUserName());
			$usuarios->setFechaNacimiento($comand->getFechaNacimiento());
			$usuarios->setCorreo($comand->getCorreo());

			$nacimiento = new DateTime($comand->getFechaNacimiento());
			$ahora = new DateTime(date("Y-m-d"));
			$diferencia = $ahora->diff($nacimiento);
			$edad=(int)$diferencia->format("%y");
		
			$Dao= new DAOUsuario();

			if(strlen($comand->getCorreo())> 100){
				print "El numero de carateres debe ser menos de 100";
			}

			else if(strlen($comand->getNombre())> 10){
				print '<script languaje="JavaScript"> alert("El numero de caracteres no debe de pasar los 100!");</script>';
				
			}else if($edad<18){

				print '<script languaje="JavaScript"> alert("Eres menor de edad estimado!");</script>';
		
		}
			else{

			if($Dao->insertar($usuarios)){
				return "ok";
			}else{
				return "error";
			}
			}

		}

		public function updateCommand($comandUpdate){
			$usuarios= new Usuario();
			$usuarios->setIdUsuario($comandUpdate->getIdUsuario());
			$usuarios->setNombre($comandUpdate->getNombre());
			$usuarios->setUserName($comandUpdate->getUserName());
			$usuarios->setFechaNacimiento($comandUpdate->getFechaNacimiento());
			$usuarios->setCorreo($comandUpdate->getCorreo());

			$nacimiento = new DateTime($comandUpdate->getFechaNacimiento());
			$ahora = new DateTime(date("Y-m-d"));
			$diferencia = $ahora->diff($nacimiento);
			$edad=(int)$diferencia->format("%y");

			$DaoUpdate= new DAOUsuario();

			if(strlen($comandUpdate->getCorreo())> 100){
				print "El numero de carateres debe ser menos de 100";
			}

			else if(strlen($comandUpdate->getNombre())> 10){
				print '<script languaje="JavaScript"> alert("El numero de caracteres no debe de pasar los 100!");</script>';
				
			}else if($edad<18){

				print '<script languaje="JavaScript"> alert("Eres menor de edad estimado!");</script>';

			}else{

			if($DaoUpdate->update($usuarios)){
				return "ok";
			}else{
				return "error";
			}
			}
		}

	
	}

?>
