<?php

require_once '../model/cliente.php';

$action=$_POST["btn"];

if($action=="registrar"){
    $model = new Cliente();
    $nombres = $_POST['name'];
    $apellidos = $_POST['lastname'];
    $fechaNac = $_POST['birth'];
    $telefono = $_POST['tel'];
    $tipoDoc = $_POST['tipoDoc'];
    if($tipoDoc == "Cedula de Ciudadania"){
        $tipoDoc=1;
    } else if($tipoDoc == "Cedula de Extranjeria"){
        $tipoDoc=2;
    }else if($tipoDoc == "Pasaporte"){
        $tipoDoc=3;
    }
    $numDoc = $_POST['numDoc'];
    $correo = $_POST['email'];
    $clave = $_POST['password'];

    $model->agregar($nombres,$apellidos,$fechaNac,$telefono,$tipoDoc,$numDoc,$correo,$clave);
}

if ($action=="INICIA SESIÓN") {

    $correo=$_POST['email'];
    $clave=$_POST['pass'];

    $model=new Cliente();
    $model->login($correo,$clave);
    if ($model->login($correo,$clave)) {
        echo '<script>alert("Inicio exitoso");
        window.location = "../index.php"</script>';
    }
    else{
        echo '<script>alert("Correo o contraseña incorrecta, intente de nuevo");
        window.location = "../view/login.php"</script>';
    }
}

?>