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
    <h1>Apartado Hotel</h1>
    <?php echo "$_SESSION[NOMBRES]"." ". $_SESSION['APELLIDOS']; ?> - <?php echo "$_SESSION[CORREO]";?><br>
    <form action="../controller/encargadoController.php" method="POST">
        <input type="submit" name="AccionB" value="CerrarSesion">
    </form><br>
    
    <a href="indexEncargado.php"><button>PAGINA PRINCIPAL</button></a>
    <a href="perfilEncargado.php"><button>MI PERFIL</button></a><br><br>

    <a href="signupHotel.php"><button>REGISTRAR AQUI TU HOTEL</button></a>
    <a href="#"><button>CONTROLAR LAS HABITACIONES</button></a>
    <a href="#"><button>CONTROLAR LAS SERVICIOS</button></a>
    <a href="#"><button>REALIZAR OFERTAS</button></a>

    <table border="1">
        <tr>
            <th>Id Hotel</th>
            <th>Nombre del Hotel</th>
            <th>Direccion del Hotel</th>
            <th>Descripción del Hotel</th>
            <th>Imagen del Hotel</th>
            <th></th>
        </tr>
        <tr>
        <?php
        $Hotel=$ModeloHotel->getIdHot($_SESSION['ID']);
        if ($Hotel !=null) {
            foreach ($Hotel as $Hot) {
        ?>
            <td><?php echo $Hot['Id_Hotel']?></td>
            <td><?php echo $Hot['Nombre_Hotel']?></td>
            <td><?php echo $Hot['Direccion_Hotel']?></td>
            <td><?php echo $Hot['Descripcion_Hotel']?></td>
            <td><?php echo $Hot['Imagen_Hotel']?></td>
            <td>editar</td>
        </tr>
        <?php
            }}
        ?>
    </table><br>
    <h2>Actualizar</h2>
    <?php
        $Hotel=$ModeloHotel->getIdHot($_SESSION['ID']);
        if ($Hotel !=null) {
            foreach ($Hotel as $Hot) {
    ?>
    <form action="../controller/hotelController.php" method="POST">
    <input type="hidden" name="IdHot" value="<?php echo $Hot['Id_Hotel']?>"><br>
    <input type="text" name="NomHot" value="<?php echo $Hot['Nombre_Hotel']?>"><br>
    <input type="text" name="DirHot" value="<?php echo $Hot['Direccion_Hotel']?>"><br>
    <input type="text" name="DesHot" value="<?php echo $Hot['Descripcion_Hotel']?>"><br>
    <input type="file" name="ImaHot" value="<?php echo $Hot['Imagen_Hotel']?>"><br>
    <input type="hidden" name="IdEnc" value="<?php echo $_SESSION['ID']?>"><br>
    <input type="submit" name="AccionB" value="Actualizar">
    </form>
    <?php
            }}
    ?>
</body>
</html>
