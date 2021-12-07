<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="../controller/encargadoController.php" method="POST">
    <h2>Encargado</h2>
    <input type="text" name="NomEnc" placeholder="Nombres" required>
    <input type="text" name="ApeEnc" placeholder="Apellidos" required>
    <select name="TipoDoc">
        <option value="1">C.C</option>
        <option value="2">Extranjeria</option>
    </select>
    <input type="number" name="NumDocEnc" placeholder="Numero de Documento" required>
    <label>Fecha de nacimiento:</label>
    <input type="text" name="FecNacEnc" required>
    <input type="number" name="TelEnc" placeholder="Telefono" required>
    <input type="email" name="CorEnc" placeholder="Correo" required>
    <input type="password" name="ConEnc" placeholder="Contraseña" required>
    <input type="submit" value="Registrarse" name="AccionB">
</form>
</body>
</html>