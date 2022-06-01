<?php
include "modelo/conexion.php";

class DAOUsuario{
	var $con;

	public function DAOUsuario(){

	}

	public function insertar($objetoUsuario){
		$c=conectar();
		//$idUsuario=$objetoUsuario->getIdUsuario();
		$nombre=$objetoUsuario->getNombre();
		$userName=$objetoUsuario->getUserName();
		$fechaNacimiento=$objetoUsuario->getFechaNacimiento();
		$correo=$objetoUsuario->getCorreo();

		$sql="insert into usuario values(idUsuario,'$nombre','$userName','$fechaNacimiento','$correo')";

		if(!$c->query($sql)){
			print "Error al insertar";
		}else{
			print '<script languaje="JavaScript"> alert("Guardado!");</script>';
		}
		mysqli_close($c);
	}

		public function eliminar($objetoUsuario){
		$c=conectar();
		$idUsuario=$objetoUsuario->getIdUsuario();

		$sql="delete from usuario where idusuario=$idUsuario";

		if(!$c->query($sql)){
			print "Error al eliminar";
		}else{
			print '<script languaje="JavaScript"> alert("Eliminado!");</script>';
		}
		mysqli_close($c);
	}

		public function update($objetoUsuario){
		$c=conectar();
		$idUsuario=$objetoUsuario->getIdUsuario();
		$nombre=$objetoUsuario->getNombre();
		$userName=$objetoUsuario->getUserName();
		$fechaNacimiento=$objetoUsuario->getFechaNacimiento();
		$correo=$objetoUsuario->getCorreo();


		$sql="update usuario set nombre='$nombre', userName='$userName', fechaNacimiento='$fechaNacimiento', correo='$correo'
		where idUsuario=$idUsuario";

		if(!$c->query($sql)){
			print "Error al modificar";
		}else{
			print '<script languaje="JavaScript"> alert("Actualizado!");</script>';
		}
		mysqli_close($c);
	}

	public function listar(){
		$c=conectar();
		$sql="select * from usuario";
		$resultado= $c->query($sql);
		print "<table class='table table-hover' id='dataTable' width='100%' cellspacing='0'>";
		$ncampos= mysqli_num_fields($resultado);

		print "<thead class='bg- text-light' style='background-color: #4E73DF;''>";
		print "<tr>";
		print "<th>Clave</th>
          	<th>Nombres</th> 
          		<th>UserName</th>
          		<th>Fecha Nacimiento</th>
          		<th>Correo</th>,
          		<th>Acciones</th>";
		print "</tr>";
		print "</thead>";
		print "<tr id='tr'>";
		for($i=0;$i<$ncampos;$i++){
			while($fila=mysqli_fetch_row($resultado)){
				print "<tr id='tr'>";
				for($j=0;$j<$ncampos;$j++){
					print "<td id='td'>". $fila[$j]."</td>";
				}

				print "<td id='td'>
				<a class='btn btn-secondary' href=\"javascript:cargar('$fila[0]','$fila[1]','$fila[2]','$fila[3]','$fila[4]')\"><i class='fas fa-spinner'></i></a></td>";	
				
			}
		}
		print "</tr>";
		print "</table>"; 
		mysqli_close($c);
	}

}
?>