<?php 
require_once('../../Models/Usuario.php');

if($_POST){
		$idUsuario=$_POST['idUsuario'];
		
		$modeloUsuario=new usuario();
		$eliminar=$modeloUsuario->delete($idUsuario);

		if($eliminar){
			header('Location:../../Views/Usuario/list.php');
		}else{
			header('Location:../../Views/Usuario/delete.php');
		}
}else{
	header('Location:../../Views/Usuario/delete.php');
}
?>