<!DOCTYPE html>
<html lang="es">

<?php include('includes/connection.php') ?>
<?php include('includes/extras.php'); ?>

<body>

    <main>
        <?php include('includes/header.php') ?>
        <section class="container mt-3">
            <form action="#" method="POST" class="form-group d-flex justify-content-center p-2 row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                    <select class="form-control" name="parametro">
                        <option value="DNI">DNI</option>
                        <option value="Apellido">Apellido</option>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2"><input type="text" class="form-control" name="campo" /></div>
                <div class="col-12 mt-2"><input type="submit" class="form-control btn-info" name="buscar" id="buscar" value="Buscar" /></div>
            </form>
        </section>
        <section class="container mt-4">
            <?php
            if (isset($_POST["buscar"])) {
                $campo = $_POST["campo"];
                $parametro = $_POST["parametro"];
                if ($campo != '') {
                    $sql = "SELECT Id, Apellido, Nombre FROM registros WHERE " . $parametro . " = '$campo'";
                } else {
                    $sql = "SELECT Id, Apellido, Nombre FROM registros";
                };
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) { ?>
                    <table class="table table-striped table-active" id="tableMain">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center" scope="col">Id</th>
                                <th class="text-center" scope="col">Apellido</th>
                                <th class="text-center" scope="col">Nombre</th>
                                <th class="text-center" scope="col">Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td class="text-center align-middle"><?php echo $row["Id"] ?></td>
                                    <td class="text-center align-middle"><?php echo $row["Apellido"] ?></td>
                                    <td class="text-center align-middle"><?php echo $row["Nombre"] ?></td>
                                    <td class="text-center align-middle"><a href="#" id="hyperlink" class="btn btn-success btn-block">Ver</a></td>
                                    <script type="text/javascript">
                                        $("#tableMain").on("click", "a", function Display() {
                                            var ptsID = $(this).closest("tr").find("td:first").text();
                                            xmlhttp = new XMLHttpRequest();
                                            xmlhttp.onreadystatechange = function() {
                                                if (this.readyState == 4 && this.status == 200) {
                                                    document.getElementById("tableMain").innerHTML = this.responseText;
                                                }
                                            };
                                            xmlhttp.open("GET", "search_engine.php?id=" + ptsID, true);
                                            xmlhttp.send();
                                        });
                                    </script>
                                </tr> <?php }; ?>
                        <?php
                            } else { ?>
                                <script src="alert_failure.js"></script>                                                    
                            <?php }; ?>
                        </tbody>
                    </table>
                <?php mysqli_close($conn);
                }; ?>
        </section>
    </main>

</body>

</html>