<?php 

include "Vistas/generales/librerias_head.php";
include "Vistas/generales/librerias_catalogos.php";
include "Vistas/generales/librerias_tablas.php";

require "AppService/UsuarioAppService.php";
require "ViewModel/UsuarioRegistroViewModel.php";
require "ViewModel/UsuarioUpdateViewModel.php";
?>
<html lang="en">
<head>
	<script type="text/javascript">
		function cargar(id,nombres,userName,fechaNacimiento,email){
			document.frmEmpleado.txtId.value=id;
			document.frmEmpleado.txtNombres.value=nombres;
			document.frmEmpleado.txtUserName.value=userName;
			document.frmEmpleado.txtFechaNacimiento.value=fechaNacimiento;
			document.frmEmpleado.txtCorreo.value=email;
		}
	</script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Empleado</title>
</head>
<body>
	<div class="container-fluid">
	<center>
		<div class="row my-5 px-2">
			<div class="col-sm-4">
		<div class="card shadow">
			<div class="card-header">
				<h3>Gestionar Usuario</h3>
			</div>
		<form action="#" method="POST" name="frmEmpleado">
			<div class="form">
				<div class="form-group">

					<div class="form-group col-md-12" style="text-align: center;">
					<!--<label>Id</label>-->
					<input type="hidden" name="txtId" id="txtId" class="form-control">
					</div>

					<div class="form-group col-md-12">
					<label>Nombres</label>
					<input type="text" name="txtNombres" id="txtNombres" class="form-control">
					</div>

					<div class="form-group col-md-12">
					<label>UserName</label>
					<input type="text" name="txtUserName" id="txtUserName" class="form-control">
					</div>	

					<div class="form-group col-md-12">
					<label>Fecha Nacimiento</label>
					<input type="date" name="txtFechaNacimiento" id="txtFechaNacimiento" class="form-control">
					</div>

					<div class="form-group col-md-12">
					<label>Correo</label>
					<input type="email" name="txtCorreo" id="txtCorreo" class="form-control">
					</div>	
					
					<div class="modal-footer justify-content-center">
					<button class="btn btn-success" type="submit" value="Insertar" name="btnInsertar"><i class="far fa-save"></i></button>
					<button class="btn btn-warning" type="submit" value="Modificar" name="btnModificar"><i class="fas fa-pencil-alt"></i></button>
					<button class="btn btn-danger" type="submit" value="Eliminar" name="btnEliminar"><i class="fas fa-trash-alt"></i></button>
				
					</div>
				</div>
				</div>
		</form>
		</div>
		</div>

		<?php

			$dao= new DAOUsuario();
			$servicio= new UsuarioAppService();
			
			
			function cargar(){
				$viewModel= new UsuarioRegistroViewModel();
				//$usuario = new Usuario();		//$usuario->setIdUsuario($_REQUEST["txtId"]);
				$viewModel->setNombre($_REQUEST["txtNombres"]);
				$viewModel->setUserName($_REQUEST["txtUserName"]);
				$viewModel->setFechaNacimiento($_REQUEST["txtFechaNacimiento"]);
				$viewModel->setCorreo($_REQUEST["txtCorreo"]);

				return $viewModel;
				
			}

			function modificar(){
				$viewModelUp= new UsuarioUpdateViewModel();
				//$usuario = new Usuario();		
				$viewModelUp->setIdUsuario($_REQUEST["txtId"]);
				$viewModelUp->setNombre($_REQUEST["txtNombres"]);
				$viewModelUp->setUserName($_REQUEST["txtUserName"]);
				$viewModelUp->setFechaNacimiento($_REQUEST["txtFechaNacimiento"]);
				$viewModelUp->setCorreo($_REQUEST["txtCorreo"]);

				return $viewModelUp;
			}


			if(isset($_REQUEST["btnInsertar"])){
				//$dao->insertar(cargar());
				$servicio->getRegister(cargar());
			}
			if(isset($_REQUEST["btnEliminar"])){
				$dao->eliminar(cargar());
			}
			if(isset($_REQUEST["btnModificar"])){
				$servicio->getUpdate(modificar());
			}

			
		?>


		

		<div class="col-sm-8">
		<div class="card shadow">
			<div class="card bg-light text-dark">
				<div class="card-body px-3 py-3">
					 <div class="card-header py-3">
    <div class="row">
     <div class="col-md-12">
     <center>
      <h4 class="m-0 font-weight-bold text-primary center">Listado Usuario</h4>
      </center>	
    </div>
   </div>
 </div>
		<?php
		$appList= new UsuarioAppService();
		$appList->listAppUsurio();

		?>		
				</div>
			</div>
			</div>
		</div>
		</div>
	</center>
	</div>
</body>
</html>