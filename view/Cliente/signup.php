<?php

require_once ('../../model/cliente.php');
$model = new Cliente();
$cliente=$model->tipoDoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../../assets/css/signup.css"/>
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Registrate</title>
</head>
<body>
    <div class="container">
        <div class="backbox">
          <div class="encargadoMsg">
            <div class="textcontent">
              <p class="title"><b>¿Buscas hotel?</b></p>
              <p><b>Registrate como cliente para <br/>buscar y reservar hoteles</b></p>
              <button id="switch1"><b>Registrarse</b></button>
            </div>
          </div>
          <div class="clienteMsg visibility">
            <div class="textcontent">
              <p class="title"><b>¿Eres dueño de un hotel?</b></p>
              <p><b>Registrate para añadir tu hotel a nuestra pagina</b></p>
              <button id="switch2"><b>Registrarse</b></button>
            </div>
          </div>
        </div>    
        <div class="frontbox">
          <form action="../controller/encargadoController.php" method="POST" autocomplete="off">
          <div class="encargado">
            <h2>Encargado</h2>
            <div class="inputbox">
              <input type="text" class="name" name="nomEnc" placeholder="Nombres" required/>
              <input type="text" class="lastname" name="ApeEnc" placeholder="Apellidos" required/>
              <select name="TipoDoc">
                <option value="1">C.C</option>
                <option value="2">Extranjeria</option>
              </select>
              <input type="number" name="NumDocEnc" placeholder="Numero de Documento" required>
              <label>Fecha de nacimiento:</label>
              <input type="date" class="fechaNac" name="FecNacEnc" required/>
              <input type="number" name="TelEnc" placeholder="Telefono" required>
              <input type="email" name="CorEnc" placeholder="Correo" required/>
              <input class="password" type="password" name="ConEnc" placeholder="Contraseña" required/>
              <i class="show fas fa-eye"></i>
              <i class="hide fas fa-eye-slash"></i>
              <button><b>Registrarse</b></button>
          </div>
        </form>
        </div>
        <form action="../controller/clienteController.php" method="POST" autocomplete="off" >
          <div class="cliente hide">
            <h2>Cliente</h2>
            <div class="inputbox">
              <input type="text" class="name" name="name" placeholder="Nombres" required/>
              <input type="text" class="lastname" name="lastname" placeholder="Apellidos" required/>
              <label>Fecha de nacimiento:</label>
              <input type="date" class="fechaNac" name="birth" required/>
              <input type="tel" class="tel" name="tel" placeholder="Telefono" maxlength="10" required/>
              <select name="tipoDoc">
                <option value="">Tipo de documento:</option>
                <?php
        foreach ($cliente as $dato):
          echo '<option value"'.$dato["Id_TipoDocumento"].'">'.$dato["Tipo_Documento"].'</option>';
        endforeach;
        ?>
            </select>
              <input type="number" name="numDoc" placeholder="Numero de documento" maxlength="10" required/>
              <input type="email" name="email" placeholder="Correo" required/>
              <input class="cpassword" type="password" name="password" placeholder="Contraseña" required/>
              <i class="show1 fas fa-eye"></i>
              <i class="hide1 fas fa-eye-slash"></i>
              <!-- <input class="confirmpassword" type="password" name="confirmpassword" placeholder="Confirmar contraseña" required>
              <i class="show2 fas fa-eye"></i>
              <i class="hide2 fas fa-eye-slash"></i> -->
            </div>
            <button name="btn" value="registrar"><b>Registrarse</b></button>
          </div>
        </form>
        </div>
      </div>
      <script src="../../library/jquery-3.6.0.min.js"></script>
      <script src="../../assets/js/signup.js"></script>
</body>
</html>
