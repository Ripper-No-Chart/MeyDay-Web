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
                        <div class="lead">Liquidaciones pendientes</div>
                    </div>
                    <div class="card-body">
                        <?php include('pendings_query.php'); ?>                        
                    </div>
                </div>
            </form>
        </section>
    </main>
</body>

</html>