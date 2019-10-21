<!DOCTYPE html>
<html lang="es">

<?php include('includes/connection.php') ?>
<?php include('includes/extras.php'); ?>

<body>

    <main>
        <?php include('includes/header.php') ?>
        <section class="container mt-3">
            <form action="#" method="POST" class="form-group d-flex justify-content-center p-2 row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                    <select class="form-control" name="parametro">
                        <option value="DNI">DNI</option>
                        <option value="Apellido">Apellido</option>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2"><input type="text" class="form-control" name="campo" /></div>
                <div class="col-12 mt-2"><input type="submit" class="form-control btn-info" name="buscar" id="buscar" value="Buscar" /></div>
                <div class="col-12 mt-3">
                    <?php include('search_query.php'); ?>
                </div>
            </form>
        </section>        
    </main>

</body>

</html>