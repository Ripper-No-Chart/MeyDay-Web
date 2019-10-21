<?php include('includes/connection.php');

    $id = intval($_GET['id']);    
    $sql = "SHOW COLUMNS FROM registros";
    $result = mysqli_query($conn, $sql);
    $sql_var = "SELECT * FROM registros WHERE Id = '" . $id . "'";
    $result_var = mysqli_query($conn, $sql_var);
    echo "<table class='table table-striped table-responsive'>";
    echo "<thead class='thead-dark'>";
    echo "<tr><th class='text-center'>Campo</th><th class='text-center'>Valor</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($columns = mysqli_fetch_array($result)) {
        $header[] = $columns['Field'];
    };
    $rows = mysqli_fetch_row($result_var);
    foreach ($header as $item => $val) {
        $val2 = $rows[$item];
        echo "<tr>";
        echo "<td class='text-center'>" . "<b>" . $val . "</b>";
        echo "<td class='text-center'>" . $val2;
        echo "</td>";
    };
    echo '</tr>';
    echo '<tbody>';
    echo '</table>';