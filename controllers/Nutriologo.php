<?php
include_once(../models/Nutriologo.php);
include_once(../models/cleaner.php);

if (isset($_POST['action'])) {
	$nombre=Cleaner::cleanInput($_POST['nombre']);
	$apellidos=Cleaner::cleanInput($_POST['apellidos']);
	$matricula=Cleaner::cleanInput($_POST['matricula'])
	$usuario=Cleaner::cleanInput($_POST['usuario']);
	$contrasena=Cleaner::cleanInput($_POST['contrasena']);

	$datosNutriologo=new Nutriologo($nombre,$apellidos,$matricula,$usuario,$contrasena);

	if($datosNutriologo->save()) {
		echo "Se guardaron correctamente los datos";
	} else {
		echo "Error al guardar los datos";
	}



}else{
	echo "ERROR...";
}
//*Como saber diferenciar entre las acciones(action )
