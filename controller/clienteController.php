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
    $clave = $_POST['newPass'];

    $model->agregar($nombres,$apellidos,$fechaNac,$telefono,$tipoDoc,$numDoc,$correo,$clave);
}

if ($action=="login") {

    $correo=$_POST['email'];
    $clave=$_POST['password'];

    $model=new Cliente();
    $model->login($correo,$clave);
    if ($model->login($correo,$clave)) {
        echo '
                        <script>
                            alert("Ingreso exitoso");
                            window.location = "../index.php";
                        </script>        
                        ';
    }
    else{
        echo '
                        <script>
                            alert("Ingreso fallido, intente de nuevo");
                            window.location = "../index.php";
                        </script>        
                        ';
    }
}

if ($action=="logout") {
    $salir= new Cliente();
    $salir->signOut();
}

if($action=="Actualizar"){
    $model = new Cliente();

    $nombres = $_POST['name'];
    $apellidos = $_POST['lastname'];
    $fechaNac = $_POST['fechaNac'];
    $telefono = $_POST['phone'];
    $correo = $_POST['correo'];
    $id = $_SESSION['Id'];

    $model->update($nombres,$apellidos,$fechaNac,$telefono,$correo,$id);

}

if($action=="Password"){
    $model = new Cliente();
    $passReal = $_POST['passReal'];
    $passActual = $_POST['passActual'];
    $newPass = $_POST['newPass'];
    $cnewPass = $_POST['cnewPass'];
    $id = $_SESSION['Id'];

    if($passReal==$passActual){
        if($newPass==$cnewPass){
            $model->Password($newPass,$id);
        }else{
            echo '
            <script>
                alert("Las contraseñas no coinciden");
                window.location = "../view/Cliente/configCuenta.php";
            </script>   
            ';
        }
        }else{
            echo '
            <script>
                alert("Contraseña actual erronea");
                window.location = "../view/Cliente/configCuenta.php";
            </script>   
            ';
        }
    
}
?>