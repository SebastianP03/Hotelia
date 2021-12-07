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
    <h1>Perfil encargado</h1>
    <?php echo "$_SESSION[NOMBRES]"." ". $_SESSION['ID']; ?> - <?php echo "$_SESSION[CORREO]";?><br>
    <form action="../controller/encargadoController.php" method="POST">
        <input type="submit" name="AccionB" value="CerrarSesion">
    </form><br>
    <a href="indexEncargado.php"><button>PAGINA PRINCIPAL</button></a>
    <a href="apartadoHotel.php"><button>MI HOTEL</button></a>

    <table border="1">
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Fecha nacimiento</th>
            <th>Tipo Documento</th>
            <th>Numero documento</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th></th>
        </tr>
        <tr>
        <?php
        $Encargado=$ModeloEncargado->getIdEnc($_SESSION['ID']);
        if ($Encargado !=null) {
            foreach ($Encargado as $Enc) {
        ?>
        <td><?php echo $Enc['Nombres_Encargado']?></td>
        <td><?php echo $Enc['Apellidos_Encargado']?></td>
        <td><?php echo $Enc['FechaNac_Encargado']?></td>
        <td><?php echo $Enc['Tipo_Documento']?></td>
        <td><?php echo $Enc['Numero_Documento_Encargado']?></td>
        <td><?php echo $Enc['Telefono_Encargado']?></td>
        <td><?php echo $Enc['Correo_Encargado']?></td>
        <td><?php echo $Enc['Contraseña_Encargado']?></td>
        <td>Editar</td>
        </tr>
        <?php
            }}
        ?>
    </table><br>
    <h2>Actualizar</h2>

    <?php
        $Encargado=$ModeloEncargado->getIdEnc($_SESSION['ID']);
        if ($Encargado !=null) {
            foreach ($Encargado as $Enc) {
        ?>
    <form action="../controller/encargadoController.php" method="POST">
        <input type="hidden" name="IdEnc" value="<?php echo $_SESSION['ID']?>">
        <input type="text" name="NomEnc" value="<?php echo $Enc['Nombres_Encargado']?>"><br>
        <input type="text" name="ApeEnc" value="<?php echo $Enc['Apellidos_Encargado']?>"><br>
        <input type="text" name="TipoDoc" value="<?php echo $Enc['Tipo_Documento']?>" readonly><br>
        <input type="number" name="NumDocEnc" value="<?php echo $Enc['Numero_Documento_Encargado']?>" readonly><br>
        <input type="text" name="FecNacEnc" value="<?php echo $Enc['FechaNac_Encargado']?>" readonly><br>
        <input type="number" name="TelEnc" value="<?php echo $Enc['Telefono_Encargado']?>"><br>
        <input type="email" name="CorEnc" value="<?php echo $Enc['Correo_Encargado']?>"><br>
        <input type="password" name="ConEnc" value="<?php echo $Enc['Contraseña_Encargado']?>"><br>
        <input type="submit" value="Actualizar" name="AccionB">
    </form>
    <?php
            }}
    ?>

</body>
</html>