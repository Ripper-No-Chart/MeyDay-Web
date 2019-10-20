<!DOCTYPE html>
<html lang="es">

<?php include('includes/connection.php') ?>
<?php include('includes/extras.php') ?>

<body>
    <main>
        <?php include('includes/header.php') ?>
        <section class="container mt-5">
            <form action="#" method="POST" class="form-group">
                <div class="card">
                    <div class="card-header bg-info text-white text-center">
                        <div class="lead">Nueva liquidacion</div>
                    </div>
                    <div class="card-body">
                        <input name="idsocio" type="text" class="form-control" placeholder="Socio" required>
                        <input name="importe" type="text" class="form-control mt-2" placeholder="Importe" required>
                        <input name="fecha" type="date" class="form-control mt-2" placeholder="Fecha" required>
                        <textarea name="observaciones" placeholder="Observaciones" class="form-control noresize mt-2" style="resize:none" required></textarea>
                        <input name="guardar" type="submit" class="form-control btn btn-success mt-2" value="Guardar">
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
                                <script type="text/javascript">
                                    var msg = alertify.success('');
                                    msg.delay(2).setContent('Guardado con exito');
                                </script>
                            <?php
                                } else {
                                    ?>
                                <script type="text/javascript">
                                    var msg = alertify.error('');
                                    msg.delay(2).setContent('Error al guardar.');
                                </script>
                        <?php
                            }
                            mysqli_close($conn);
                        };
                        ?>
                    </div>
                </div>
            </form>
        </section>
    </main>
</body>

</html>