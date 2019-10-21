<?php
if (isset($_POST['guardar'])) {
    $idsocio = $_POST['idsocio'];
    $importe = $_POST['importe'];
    $fecha = $_POST['fecha'];
    $observaciones = $_POST['observaciones'];
    $sql = "INSERT INTO `liquidaciones`(`IdSocio`, `Importe`, `Fecha`, `Observaciones`) " .
        "VALUES ('$idsocio','$importe','$fecha','$observaciones')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        ?>
        <script src="alert_success.js"></script>
    <?php
        } else {
            ?>
        <script src="alert_failure.js"></script>
<?php
    }
    mysqli_close($conn);
};
?>