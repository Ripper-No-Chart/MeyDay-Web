<?php
$sql = "SELECT Apellido, Nombre, IF(Tipo = 'Desregulado',Ecuacion * 2,Ecuacion) AS Ecuacion, F_Liquidacion AS Ecu_Fecha, Diferencia, F_Diferencia AS Dif_Fecha FROM registros WHERE F_Liquidacion > CAST(CURRENT_TIMESTAMP AS DATE);";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    echo "<table class='table table-striped table-active table-responsive' id='tableMain'>";
    echo "<thead class='thead-dark'>";
    echo "<tr>";
    echo "<th class='text-center' scope='col'>Apellido</th>";
    echo "<th class='text-center' scope='col'>Nombre</th>";
    echo "<th class='text-center' scope='col'>Ecuacion</th>";
    echo "<th class='text-center' scope='col'>Fecha</th>";
    echo "<th class='text-center' scope='col'>Diferencia</th>";
    echo "<th class='text-center' scope='col'>Fecha</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td class='text-center align-middle'>$row[Apellido]</td>";
        echo "<td class='text-center align-middle'>$row[Nombre]</td>";
        echo "<td class='text-center align-middle'>$row[Ecuacion]</td>";
        echo "<td class='text-center align-middle'>$row[Ecu_Fecha]</td>";
        echo "<td class='text-center align-middle'>$row[Diferencia]</td>";
        echo "<td class='text-center align-middle'>$row[Dif_Fecha]</td>";
        echo "</tr>";
    };
} else {
    echo "<script src='alert_failure.js'></script>";
};
echo "</tbody>";
echo "</table>";
$sql = "SELECT SUM(Ecuacion) AS Total_Ecu, SUM(Diferencia) AS Total_Dif FROM registros WHERE F_Liquidacion > CAST(CURRENT_TIMESTAMP AS DATE);";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = $result->fetch_array()) {
        echo "<h5 class='text-right text-primary'>Total ecuacion: $row[Total_Ecu]</h5>";
        echo "<h5 class='text-right text-primary'>Total diferencia: $row[Total_Dif]</h5>";
    };
};
mysqli_close($conn);
