<!DOCTYPE html>
<html lang="es">

<?php include('includes/connection.php') ?>
<?php include('../includes/header.php'); ?>
<?php include('includes/extras.php'); ?>

<body>

    <main>
        <?php include('includes/header.php') ?>
        <section class="container mt-3">
            <form action="#" method="POST" class="form-group d-flex justify-content-center p-2 row">
                <div class="col-12 mt-2"><input type="text" class="form-control" name="dni" placeholder="Numero de DNI" /></div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-2"><input type="submit" class="form-control btn-primary" name="buscar" id="buscar" value="Buscar" /></div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-2"><a href="menu_informes.php" class="form-control btn btn-danger btn-block text-white text-decoration-none">Volver</a></div>
            </form>
        </section>
        <section class="container mt-4">
            <?php
            if (isset($_POST['buscar'])) {
                $dni = $_POST['dni'];
                $sql = "SELECT Apellido, Nombre FROM registros WHERE DNI = '$dni'";
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) { ?>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Apellido</th>
                                <th scope="col">Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $row["Apellido"] ?></td>
                                    <td><?php echo $row["Nombre"] ?></td>
                                </tr>
                            <?php }
                                } else { ?>
                            <script type="text/javascript">
                                var msg = alertify.error('');
                                msg.delay(2).setContent('No se encontraron datos.');
                            </script>
                        <?php }; ?>
                        </tbody>
                    </table>
                <?php
                    mysqli_close($conn);
                }; ?>
        </section>
    </main>

</body>

</html>