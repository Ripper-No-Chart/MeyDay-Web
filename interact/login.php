<!DOCTYPE html>
<html lang="es">
<?php include('includes/connection.php') ?>
<?php include('../includes/header.php') ?>
<?php include('includes/extras.php') ?>

<body>
  <main class="container d-flex justify-content-center">
    <section class="mt-3">
      <div class="card text-center">
        <div class="card-header bg-dark">
          <h4 class="text-white">Interact 1.0</h4>
        </div>
        <div class="card-body">
          <form action="#" method="POST" class="form-group">
            <input type="text" class="form-control" name="usuario" placeholder="usuario" />
            <input type="password" class="form-control mt-2" name="password" placeholder="password" />
            <input type="submit" class="btn btn-primary btn-block mt-2" name="login" value="Login" />
            <?php
            if (isset($_POST['login'])) {
              $usuario = $_POST['usuario'];
              $password = $_POST['password'];
              $sql = "SELECT usuario, password FROM usuarios WHERE usuario = '$usuario' AND password = MD5('$password')";
              $result = mysqli_query($conn, $sql);
              if ($result->num_rows > 0) {
                header('Location: index.php');
              } else {
                ?>
                <script src="alert_failure.js"></script>                    
            <?php };
            }
            mysqli_close($conn); ?>
          </form>
        </div>
      </div>
    </section>
  </main>
</body>

</html>