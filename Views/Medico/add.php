<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="../../Controllers/Medico/add.php">
    <label>Id:</label>
    <input type="text" name="idMedico"><br>

    <label>Nombre:</label>
    <input type="text" name="nombreMedico"><br>

    <label>Apellido:</label>
    <input type="text" name="apellidoMedico"><br>

    <label>Telefono:</label>
    <input  type="number" name="telefonoMedico"><br> 

    <label>Correo:</label>
    <input  type="email" name="correoMedico"><br>

    <label>Tarjeta Profesìonal:</label>
    <input  type="text" name="tarjetaProfesional"><br>

    <label>Especialidad:</label>
    <input  type="text" name="especialidadMedico"><br>

    <label>Estado:</label>

    <input id="radio" type="radio" name="estadoMedico" value="1"><b>Activo</b>
    <input id="radio" type="radio" name="estadoMedico" value="0"><b>In-activo</b><br>

    <input id="boton" type="submit"value="Registrar">

</form>
</body>
</html>