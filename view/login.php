<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>iniciar sesion</h1>
    <form action="../controller/encargadoController.php" method="POST">
        <input type="text" name="CorEnc" placeholder="Correo" required>
        <input type="password" name="ConEnc" placeholder="Contraseña" required>
        <input type="submit" value="IniciarSesion" name="AccionB">
    </form>
</body>
</html>