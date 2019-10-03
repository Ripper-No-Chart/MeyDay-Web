<!DOCTYPE html>
<html lang="es">

<?php include('../includes/header.php') ?>

<body>
    <main>
        <?php include('includes/header.php') ?>
        <section class="container mt-3">
            <form action="mysql/qy_nuevo_registro.php" method="POST">
                <div class="card">
                    <div class="card-header bg-info text-white text-center">
                        <h5>Nuevo ingreso</h5>
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
                        <h5>Datos del plan</h5>
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
                    <div class="card-header bg-warning text-white text-center">
                        <h5>Fechas</h5>
                    </div>
                    <div class="card-body">
                        <input placeholder="Fecha de firma" class="textbox-n form-control mt-2" type="text" onfocus="(this.type='date')" name="f_firma">
                        <input placeholder="Fecha de presentacion" class="textbox-n form-control mt-2" type="text" onfocus="(this.type='date')" name="f_presentacion">
                        <input placeholder="Fecha de liquidacion" class="textbox-n form-control mt-2" type="text" onfocus="(this.type='date')" name="f_liquidacion">
                        <textarea name="observaciones" placeholder="Observaciones" class="form-control noresize mt-2" style="resize:none"></textarea>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-ms-6 col-md-12 col-lg-6">
                        <input type="submit" name="guardar" class="btn btn-block btn-primary text-white mb-3" value="Guardar">
                    </div>
                    <div class="col-sm-12 col-ms-6 col-md-12 col-lg-6">
                        <input type="submit" name="cancelar" class="btn btn-block btn-danger text-white mb-3" value="Cancelar">
                    </div>
                </div>
            </form>
        </section>
    </main>
</body>

</html>