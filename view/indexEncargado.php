<?php
require_once('../model/encargadoModel.php');
$ModeloEncargado= new Encargado();
$ModeloEncargado->validateSession();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>index encargado</h1>
    <?php echo "$_SESSION[NOMBRES]"." ". $_SESSION['APELLIDOS']; ?> - <?php echo "$_SESSION[CORREO]";?><br>

    <a href="perfilEncargado.php"><button>MI PERFIL</button></a>
    <a href="apartadoHotel.php"><button>MI HOTEL</button></a><br><br>

    <form action="../controller/encargadoController.php" method="POST">
        <input type="submit" name="AccionB" value="CerrarSesion">
    </form>

    
</body>
</html>