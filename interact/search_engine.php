<?php include('includes/connection.php') ?>

<?php

$id = intval($_GET['id']);
$sql_var = "SELECT * FROM registros WHERE Id = '" . $id . "'";
$result_var = mysqli_query($conn, $sql_var);
echo "<table class='table table-striped table-responsive'>";
echo "<thead class='thead-dark'>";
echo "<tr>";


// for($i = 0; $i < mysqli_num_fields($result_var); $i++) {
    //     $field_info = mysqli_fetch_fields($result_var, $i);
//     echo "<th>{$field_info->name}</th>";
// }
// echo "<th class='text-center'>Id</th>";
// echo "<th class='text-center'>Nombre</th>";
// echo "<th class='text-center'>Apellido</th>";
// echo "<th class='text-center'>DNI</th>";
// echo "<th class='text-center'>CUIL</th>";
echo "</tr>";
echo "</thead>";


while ($rows = mysqli_fetch_row($result_var)) {
    $columnArr = array_column($rows, 'COLUMN_NAME');
    echo "<tr>";
    foreach ($rows as $value) {
        echo "<td class='text-center'>" . $value . "</td>";
    };    
    echo "</tr>";
    unset ($value);
    var_dump($columnArr);
}
echo '</table>';
