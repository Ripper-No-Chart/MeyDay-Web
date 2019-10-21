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
                        <div class="lead">Busqueda entre fechas</div>
                    </div>
                    <div class="card-body">
                        <input name="fechadesde" type="date" class="form-control mt-2" required>
                        <input name="fechahasta" type="date" class="form-control mt-2" required>
                        <input name="buscar" type="submit" class="form-control btn btn-success mt-2" value="Buscar">
                        <?php
                        if (isset($_POST['buscar'])) {
                            $fechadesde = $_POST['fechadesde'];
                            $fechahasta = $_POST['fechahasta'];
                            $sql = "SELECT registros.Apellido, registros.Nombre, liquidaciones.Importe, liquidaciones.Observaciones,
                            liquidaciones.Fecha
                            FROM registros
                            LEFT JOIN liquidaciones ON (registros.id = liquidaciones.idSocio)                            
                            WHERE liquidaciones.Fecha BETWEEN '{$fechadesde}' AND ' {$fechahasta}'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result)) {                                
                                ?>
                                <table class="table table-striped table-active mt-5 table-responsive">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center" scope="col">Apellido</th>
                                            <th class="text-center" scope="col">Nombre</th>
                                            <th class="text-center" scope="col">Importe</th>
                                            <th class="text-center" scope="col">Fecha</th>
                                            <th class="text-center" scope="col">Observaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = $result->fetch_assoc()) { ?>
                                            <tr>
                                                <td class="text-center align-middle"><?php echo $row["Apellido"] ?></td>
                                                <td class="text-center align-middle"><?php echo $row["Nombre"] ?></td>
                                                <td class="text-center align-middle"><?php echo $row["Importe"] ?></td>
                                                <td class="text-center align-middle"><?php echo $row["Fecha"] ?></td>
                                                <td class="text-center align-middle"><?php echo $row["Observaciones"] ?></td>
                                            </tr>
                                    </tbody>
                                <?php }; ?>
                                </table>
                    </div>
                    <div class="card-footer text-success text-right">
                        <?php
                                $sql = "SELECT SUM(liquidaciones.Importe) AS Suma
                                FROM liquidaciones
                                WHERE liquidaciones.Fecha BETWEEN '{$fechadesde}' AND ' {$fechahasta}'";
                                $result = mysqli_query($conn, $sql);
                                while ($row = $result->fetch_assoc()) {
                                    ?> <h5>Suma: <?php echo $row['Suma'] ?> </h5>
                        <?php }; ?>
                    </div>
                <?php
                    } else {
                        ?>
                        <script src="alert_failure.js"></script>                    
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