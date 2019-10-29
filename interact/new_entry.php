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
                    <div class="card-header bg-success text-white text-center">
                        <div class="lead">Datos del afiliado</div>
                    </div>
                    <div class="card-body">
                        <input name="apellido" type="text" class="form-control" placeholder="Apellido" required>
                        <input name="nombre" type="text" class="form-control mt-2" placeholder="Nombre" required>
                        <input name="dni" type="text" class="form-control mt-2" placeholder="DNI" required>
                        <input name="cuil" type="text" class="form-control mt-2" placeholder="CUIL" required>
                        <input name="domicilio" type="text" class="form-control mt-2" placeholder="Domicilio" required>
                        <input name="localidad" type="text" class="form-control mt-2" placeholder="Localidad" required>
                        <input name="telefono1" type="text" class="form-control mt-2" placeholder="Telefono 1" required>
                        <input name="telefono2" type="text" class="form-control mt-2" placeholder="Telefono 2" required>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header bg-success text-white text-center">
                        <div class="lead">Datos del Plan</div>
                    </div>
                    <div class="card-body">
                        <input name="formulario" type="text" class="form-control" placeholder="Formulario" required>
                        <input name="plan" type="text" class="form-control mt-2" placeholder="Plan" required>
                        <select class="form-control mt-2" name="tipo">
                            <option value="" disabled selected>Tipo de plan</option>
                            <option value="Desregulado">Desregulado</option>
                            <option value="Directo">Directo</option>
                            <option value="Superador">Superador</option>
                        </select>
                        <input name="valor" type="text" class="form-control mt-2" placeholder="Valor" required>
                        <input name="aporte" type="text" class="form-control mt-2" placeholder="Aporte" required>
                        <input name="ecuacion" type="text" class="form-control mt-2" placeholder="Ecuacion" required>
                        <input name="diferencia" type="text" class="form-control mt-2" placeholder="Diferencia" required>
                        <input placeholder="Fecha de pago diferencia" class="textbox-n form-control mt-2" type="text" onfocus="(this.type='date')" name="f_diferencia" required>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header bg-success text-white text-center">
                        <div class="lead">Fechas</div>
                    </div>
                    <div class="card-body">
                        <input placeholder="Fecha de firma" class="textbox-n form-control mt-2" type="text" onfocus="(this.type='date')" name="f_firma" required>
                        <input placeholder="Fecha de presentacion" class="textbox-n form-control mt-2" type="text" onfocus="(this.type='date')" name="f_presentacion" required>
                        <input placeholder="Fecha de liquidacion" class="textbox-n form-control mt-2" type="text" onfocus="(this.type='date')" name="f_liquidacion" required>
                        <textarea name="observaciones" placeholder="Observaciones" class="form-control noresize mt-2" style="resize:none" required></textarea>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <input type="submit" name="guardar" class="btn btn-block btn-info text-white mb-3" value="Guardar">
                        <?php include('new_entry_query.php'); ?>
                    </div>
                </div>
            </form>
        </section>
    </main>
</body>

</html>