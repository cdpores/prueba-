<?php 
require_once('../../Models/Medico.php');
$modeloMedico=new medico();
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
<div>
	<table width="100%">
	<tr>
		<th>ID</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Teléfono</th>
		<th>Correo</th>
		<th>Tarjeta Profesional</th>
		<th>Especialidad</th>
		<th>Estado</th>
		<th colspan="2"><a href="add.php">Registrar Nuevo</a></th>
		<tr>
		<?php $medico=$modeloMedico->consultar(); 
		if ($medico!=null) {
			foreach($medico as $med){
		?>
		
		<td><?php echo $med['idMedico'];?></td>
		<td><?php echo $med['nombreMedico'];?></td>
		<td><?php echo $med['apellidoMedico'];?></td>
		<td><?php echo $med['telefonoMedico'];?></td>
		<td><?php echo $med['correoMedico'];?></td>
		<td><?php echo $med['tarjetaProfesional'];?></td>
		<td><?php echo $med['especialidadMedico'];?></td>
		<td><?php 
                    if ($med['estadoMedico']==1) {
                        echo 'activo';
                    }elseif ($med['estadoMedico']==0) {
                        echo 'in-activo';
                    }
                ?></td>
		<td><a href="edit.php?id=<?php echo $med['idMedico']; ?>">Editar</a></td>
		<td><a href="delete.php?id=<?php echo $med['idMedico']; ?>" >Eliminar</a></td>
	</tr>
	<?php 
        }
    }
	?>
	
</table>
</body>
</html>