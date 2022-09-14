<?php 
require_once('../../Models/Usuario.php');


if($_POST){
	$correoUsuario=$_POST['correoUsuario'];
	$passworUsuario=$_POST['passworUsuario'];
	$rolUsuario=$_POST['rolUsuario'];

	$modeloUsuario=new usuario();

	$validar=$modeloUsuario->validar($correoUsuario, $passworUsuario, $rolUsuario);

	if ($validar && $rolUsuario='Administrador') {
			header('Location:../../index.php');
		}elseif ($validar && $rolUsuario='Cajero') {
			header('Location:../../Views/Usuario/list.php');
		}elseif ($validar && $rolUsuario='Cliente') {
			header('Location:../../Views/Usuario/add.php');
		}else{
			header('Location:../../login.php');
		}
}else{
	header('Location:../../login.php');
}
?>