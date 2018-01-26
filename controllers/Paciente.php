<?php
include_once(../models/Paciente.php);
include_once(../models/cleaner.php);

if (isset($_POST['action'])) {
	$nombre=Cleaner::cleanInput($_POST['nombre']);
	$apellidos=Cleaner::cleanInput($_POST['apellidos']);
	$edad=Cleaner::cleanInput($_POST['edad'])
	$usuario=Cleaner::cleanInput($_POST['usuario']);
	$contrasena=Cleaner::cleanInput($_POST['contrasena']);

	$datosNutriologo=new Paciente($nombre,$apellidos,$edad,$usuario,$contrasena);

	if($datosPaciente->save()) {
		echo "Se guardaron correctamente los datos";
	} else {
		echo "Error al guardar los datos";
	}



}else{
	echo "ERROR...";
}
