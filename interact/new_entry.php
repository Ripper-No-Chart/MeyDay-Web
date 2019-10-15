<!DOCTYPE html>
<html lang="es">

<?php include('includes/connection.php') ?>
<?php include('includes/extras.php') ?>

<body>
    <main>
        <?php include('includes/header.php') ?>
        <section class="container mt-3">
            <form action="#" method="POST">
                <div class="card">
                    <div class="card-header bg-info text-white text-center">
                        <div class="lead">Datos del afiliado</div>
                    </div>
                    <div class="card-body">
                        <input name="apellido" type="text" class="form-control" placeholder="Apellido">
                        <input name="nombre" type="text" class="form-control mt-2" placeholder="Nombre">
                        <input name="dni" type="text" class="form-control mt-2" placeholder="DNI">
                        <input name="cuil" type="text" class="form-control mt-2" placeholder="CUIL">
                        <input name="domicilio" type="text" class="form-control mt-2" placeholder="Domicilio">
                        <input name="localidad" type="text" class="form-control mt-2" placeholder="Localidad">
                        <input name="telefono1" type="text" class="form-control mt-2" placeholder="Telefono 1">
                        <input name="telefono2" type="text" class="form-control mt-2" placeholder="Telefono 2">
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header bg-success text-white text-center">
                        <div class="lead">Datos del Plan</div>
                    </div>
                    <div class="card-body">
                        <input name="formulario" type="text" class="form-control" placeholder="Formulario">
                        <input name="plan" type="text" class="form-control mt-2" placeholder="Plan">
                        <input name="tipo" type="text" class="form-control mt-2" placeholder="Tipo">
                        <input name="valor" type="text" class="form-control mt-2" placeholder="Valor">
                        <input name="aporte" type="text" class="form-control mt-2" placeholder="Aporte">
                        <input name="ecuacion" type="text" class="form-control mt-2" placeholder="Ecuacion">
                        <input name="diferencia" type="text" class="form-control mt-2" placeholder="Diferencia">
                        <input placeholder="Fecha de pago diferencia" class="textbox-n form-control mt-2" type="text" onfocus="(this.type='date')" name="f_diferencia">
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header bg-success text-white text-center">
                        <div class="lead">Fechas</div>
                    </div>
                    <div class="card-body">
                        <input placeholder="Fecha de firma" class="textbox-n form-control mt-2" type="text" onfocus="(this.type='date')" name="f_firma">
                        <input placeholder="Fecha de presentacion" class="textbox-n form-control mt-2" type="text" onfocus="(this.type='date')" name="f_presentacion">
                        <input placeholder="Fecha de liquidacion" class="textbox-n form-control mt-2" type="text" onfocus="(this.type='date')" name="f_liquidacion">
                        <textarea name="observaciones" placeholder="Observaciones" class="form-control noresize mt-2" style="resize:none"></textarea>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <input type="submit" name="guardar" class="btn btn-block btn-primary text-white mb-3" value="Guardar">
                        <?php
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