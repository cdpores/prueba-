<?php 	
require_once('../../Models/Medico.php');

if($_POST){
		$idMedico=$_POST['idMedico'];
		$nombreMedico=$_POST['nombreMedico'];
		$apellidoMedico=$_POST['apellidoMedico'];
		$telefonoMedico=$_POST['telefonoMedico'];
		$correoMedico=$_POST['correoMedico'];
		$tarjetaProfesional=$_POST['tarjetaProfesional'];
		$especialidadMedico=$_POST['especialidadMedico'];
		$estadoMedico=$_POST['estadoMedico'];

		
$modeloMedico=new medico();

$actualizar=$modeloMedico->actualizar($idMedico, $nombreMedico, $apellidoMedico, $telefonoMedico, $correoMedico, $tarjetaProfesional, $especialidadMedico, $estadoMedico);

		if($actualizar){
		echo "<script> window.location='../../Views/Medico/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/Medico/edit.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/Medico/edit.php'; </script>";
}


?>