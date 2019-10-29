<!DOCTYPE html>
<html lang="es">

<?php include('includes/connection.php') ?>
<?php include('includes/extras.php'); ?>

<body>

    <main>
        <?php include('includes/header.php') ?>
        <section class="container mt-3">
            <form action="#" method="POST" class="form-group p-2">
                <div class="card">
                    <div class="card-header bg-success text-white text-center">
                        <div class="lead">Busqueda individual</div>
                    </div>
                    <div class="card-body">
                        <select class="form-control" name="parametro">
                            <option value="DNI">DNI</option>
                            <option value="Apellido">Apellido</option>
                        </select>
                        <input type="text" class="form-control mt-2" name="campo" required />
                        <input type="submit" class="form-control btn-info mt-2" name="buscar" id="buscar" value="Buscar" />
                    </div>
                </div>
            </form>
            <div class="col-12 mt-3">
                <?php include('search_query.php'); ?>
            </div>
        </section>
    </main>

</body>

</html>