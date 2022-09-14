<?php 
	require_once('../../Models/Medico.php');
	$modeloMedico=new medico();
	$id=$_GET['id'];
	$datosMedico=$modeloMedico->cosnsultarxid($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="POST" action="../../Controllers/Medico/edit.php">
	<?php 
		if ($datosMedico !=null) {
			foreach ($datosMedico as $datos) {
	?>

        <label>Id:</label><br>
        <input  type="text" name="idMedico" placeholder="ingrese su id" value="<?php echo $datos['idMedico']?>"><br>

        <label>Nombre:</label><br>
        <input type="text" name="nombreMedico" placeholder="ingrese su nombre" value="<?php echo $datos['nombreMedico']?>"><br>

        <label>Apellido:</label><br>
        <input  type="text" name="apellidoMedico" placeholder="ingrese su apellido" value="<?php echo $datos['apellidoMedico']?>"><br>

        <label>Telefono:</label><br>
        <input  type="text" name="telefonoMedico" placeholder="ingrese su dirección" value="<?php echo $datos['telefonoMedico']?>"><br> 

        <label>Correo:</label><br>
        <input  type="email" name="correoMedico" placeholder="ingrese su email" value="<?php echo $datos['correoMedico']?>"><br>

        <label>Tarjeta Profesìonal:</label><br>
        <input  type="text" name="tarjetaProfesional" placeholder="digite su tarjeta profesional" value="<?php echo $datos['tarjetaProfesional']?>"><br>

        <label>Especialidad:</label><br>
        <input  type="text" name="especialidadMedico" placeholder="ingrese su especialidad" value="<?php echo $datos['especialidadMedico']?>"><br>

        <label>Estado: </label><br>

        <input id="radio" type="radio" name="estadoMedico" value="1"><b>Activo</b>
        <input id="radio" type="radio" name="estadoMedico" value="0"><b>In-activo</b><br>

        <input id="boton" type="submit"value="Actualizar">

	<?php 
	
			}
		}

 	?>
    </form>
</body>
</html>