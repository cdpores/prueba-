<?php 
require_once('../../Models/Medico.php');

if($_POST){
		$idMedico=$_POST['idMedico'];
		
		$modeloMedico=new medico();
		$eliminar=$modeloMedico->delete($idMedico);

		if($eliminar){
		echo "<script> window.location='../../Views/Medico/list.php'; </script>";
		}else{
			echo "<script> window.location='../../Views/Medico/delete.php'; </script>";
		}
}else{
	echo "<script> window.location='../../Views/Medico/delete.php'; </script>";
}

?>