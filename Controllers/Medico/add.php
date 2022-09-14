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
		$agregar=$modeloMedico->agregar($idMedico, $nombreMedico, $apellidoMedico, $telefonoMedico, $correoMedico, $tarjetaProfesional, $especialidadMedico, $estadoMedico);

		if($agregar){
		echo "<script> window.location='../../Views/Medico/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/Medico/add.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/Medico/add.php'; </script>";
}


?>