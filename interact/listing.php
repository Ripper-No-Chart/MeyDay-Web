<!DOCTYPE html>
<html lang="es">

<?php include('includes/connection.php') ?>
<?php include('includes/extras.php'); ?>

<body>

    <main>
        <?php include('includes/header.php') ?>
        <section class="container mt-3">
            <div class="card">
                <div class="card-header bg-success text-white text-center">
                    <div class="lead">Listado general</div>
                </div>
                <div class="card-body">
                    <?php include('listing_query.php'); ?>
                </div>
            </div>
        </section>
    </main>
</body>

</html>