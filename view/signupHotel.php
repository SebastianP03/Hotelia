<?php
require_once('../model/encargadoModel.php');
require_once('../model/hotelModel.php');
$ModeloEncargado= new Encargado();
$ModeloEncargado->validateSession();

$ModeloHotel=new Hotel();

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
    <h1>REGISTRAR HOTEL</h1>
    <?php echo "$_SESSION[NOMBRES]"." ". $_SESSION['APELLIDOS']; ?> - <?php echo "$_SESSION[CORREO]";?><br>

    <a href="apartadoHotel.php"><button>Volver</button></a><br><br>

    <form action="../controller/hotelController.php" method="POST">
        <input type="text" name="NomHot" placeholder="Nombre del hotel" required><br>
        <input type="text" name="DirHot" placeholder="Direccion del hotel" required><br>
        <textarea name="DesHot"cols="30" rows="10" placeholder="Descripción del hotel" required></textarea><br>
    <label>Imagen del Hotel</label><br>
        <input type="file" name="ImaHot" required><br>
        <input type="hidden" name="IdEnc" value="<?php echo $_SESSION['ID']?>">
        <input type="submit" name="AccionB" value="Registrar">
    </form>
</body>
</html>