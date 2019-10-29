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
                    <div class="card-header bg-success text-white text-center">
                        <div class="lead">Busqueda entre fechas</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <input name="fechadesde" type="date" class="form-control col-lg-12 col-md-12 col-sm-12 col-xs-12" required>
                            <input name="fechahasta" type="date" class="form-control col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2" required>
                            <input name="buscar" type="submit" class="btn btn-info btn-block mt-2 col-12" value="Buscar">
                        </div>
                    </div>
                </div>
                </div>
            </form>
            <div class="row">
                <div class="col-12">
                    <?php include('summary_query.php'); ?>
                </div>
            </div>
        </section>
    </main>
</body>

</html>