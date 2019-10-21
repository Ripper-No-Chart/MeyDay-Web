    <?php
    if (isset($_POST['buscar'])) {
        $fechadesde = $_POST['fechadesde'];
        $fechahasta = $_POST['fechahasta'];
        $sql = "SELECT registros.Apellido, registros.Nombre, liquidaciones.Importe, liquidaciones.Observaciones,
        liquidaciones.Fecha
        FROM registros
        LEFT JOIN liquidaciones ON (registros.id = liquidaciones.idSocio)
        WHERE liquidaciones.Fecha BETWEEN '{$fechadesde}' AND '{$fechahasta}'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)) {            
            echo "<table class='table table-striped mt-3 table-active table-responsive'>";
            echo "<thead class='thead-dark'>";
            echo "<tr>";
            echo "<th class='text-center' scope='col'>Apellido</th>";
            echo "<th class='text-center' scope='col'>Nombre</th>";
            echo "<th class='text-center' scope='col'>Importe</th>";
            echo "<th class='text-center' scope='col'>Fecha</th>";
            echo "<th class='text-center' scope='col'>Observaciones</th>";
            echo "<tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td class='text-center align-middle'>$row[Apellido]</td>";
                echo "<td class='text-center align-middle'>$row[Nombre]</td>";
                echo "<td class='text-center align-middle'>$row[Importe]</td>";
                echo "<td class='text-center align-middle'>$row[Fecha]</td>";
                echo "<td class='text-center align-middle'>$row[Observaciones]</td>";
                echo "</tr>";
            };
            echo "</tbody>";
            echo "</table>";            
            echo "<div class='text-right text-primary'>";
            $sql = "SELECT SUM(liquidaciones.Importe) AS Suma
            FROM liquidaciones
            WHERE liquidaciones.Fecha BETWEEN '{$fechadesde}' AND ' {$fechahasta}'";
            $result = mysqli_query($conn, $sql);
            while ($row = $result->fetch_assoc()) {
                echo "<h5>Suma: $row[Suma]</h5>";
            };
            echo "</div>";
        } else {
            echo "<script src='alert_failure.js'></script>";
        }
        mysqli_close($conn);
    };
    ?>