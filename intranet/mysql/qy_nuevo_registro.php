<?php

include('../includes/connection.php');

if (isset($_POST['guardar'])) {
    $apellido = $_POST['apellido'];
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $cuil = $_POST['cuil'];
    $domicilio = $_POST['domicilio'];
    $localidad = $_POST['localidad'];
    $telefono1 = $_POST['telefono1'];
    $telefono2 = $_POST['telefono2'];
    $formulario = $_POST['formulario'];
    $plan = $_POST['plan'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $aporte = $_POST['aporte'];
    $ecuacion = $_POST['ecuacion'];
    $diferencia = $_POST['diferencia'];
    $f_diferencia = $_POST['f_diferencia'];
    $f_firma = $_POST['f_firma'];
    $f_presentacion = $_POST['f_presentacion'];
    $f_liquidacion = $_POST['f_liquidacion'];
    $observaciones = $_POST['observaciones'];

    $sql = "INSERT INTO `registros`(`Apellido`, `Nombre`, `DNI`, `CUIL`, `Domicilio`, `Localidad`, `Telefono1`, `Telefono2`, `Formulario`, `Plan`, `Tipo`, `Valor`, `Aporte`, " .
        "`Ecuacion`, `Diferencia`, `F_Diferencia`, `F_Firma`, `F_Liquidacion`, `F_Presentacion`, `Observaciones`) " .
        "VALUES ('$apellido','$nombre','$dni','$cuil','$domicilio','$localidad','$telefono1','$telefono2','$formulario','$plan','$tipo','$valor','$aporte','$ecuacion','$diferencia','$f_diferencia','$f_firma','$f_liquidacion','$f_presentacion','$observaciones')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script language="javascript">alert("Agregado con exito");</script>';
        header("Refresh:2; url=../index.php", true, 303);    
    } else {        
        echo "Error al guardar. Mensaje: ". $conn->error ;
    }
    mysqli_close($conn);
};

if (isset($_POST['cancelar'])) {
    header("Refresh:0; url=../index.php", true, 303);
}
