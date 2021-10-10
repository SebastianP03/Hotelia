<?php

require_once '../model/reserva.php';

$action=$_POST["Reservar"];

if($action=="Reservar"){
    $model = new Reserva();
    $nombre = $_POST['name'];
    $apellido = $_POST['lastname'];
    $nacimiento = $_POST['birth'];
    $documento = $_POST['numDoc'];
    $correo = $_POST['email'];
    $clave = $_POST['clave'];
    $telefono = $_POST['phone'];

    $model->agregar($nombre,$apellido,$nacimiento,$telefono,$documento,$correo,$clave);
}


// function crudAjax(){
//     $model = new Reserva();
//     $nombre = isset($_POST['name']);
//     $apellido = isset($_POST['lastname']);
//     $nacimiento = isset($_POST['birth']);



// }



?>