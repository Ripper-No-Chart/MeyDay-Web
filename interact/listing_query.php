<?php
$sql = "SELECT Id, Apellido, Nombre FROM registros";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    echo "<table class='table table-striped table-active' id='tableMain'>";
    echo "<thead class='thead-dark'>";
    echo "<tr>";
    echo "<th class='text-center' scope='col'>Id</th>";
    echo "<th class='text-center' scope='col'>Apellido</th>";
    echo "<th class='text-center' scope='col'>Nombre</th>";
    echo "<th class='text-center' scope='col'>Detalles</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td class='text-center align-middle'>$row[Id]</td>";
        echo "<td class='text-center align-middle'>$row[Apellido]</td>";
        echo "<td class='text-center align-middle'>$row[Nombre]</td>";
        echo "<td class='text-center align-middle'><a href='#' id='hyperlink' class='btn btn-success btn-block'>Ver</a></td>";
        echo "<script type='text/javascript' src='search_id.js'></script>";
        echo "</tr>";
    };
} else {
    echo "<script src='alert_failure.js'></script>";
};
echo "</tbody>";
echo "</table>";
mysqli_close($conn);
