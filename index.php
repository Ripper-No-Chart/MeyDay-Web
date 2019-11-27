<!DOCTYPE html>
<html lang="es">

<?php include('includes/head.php') ?>
<?php include('includes/header.php') ?>

<body>
    <main class="text-center">        
        <section class="text-center mt-5 bg-banner">
            <img class="img-fluid" id="banner" src="src/banner/first.jpg" alt="First slide">
        </section>
        <article class="container mt-5">
            <div class="card card-block">
                <div class="card-header">
                    <h3>¿Quienes Somos?</h3>
                </div>
                <div class="card-body row d-flex justify-content-center align-items-center">
                    <div class="col-4">
                        <img class="img-fluid rounded" src="src/index/cards/question.png" alt="question">
                    </div>
                    <div class="col-8 text-right">
                        <p> MeyDay es una empresa dedicada al desarrollo y diseño de software, aplicaciones móviles y paginas web.
                            Implementamos lo último en tecnología y nos capacitamos constantemente para que tu idea se convierta en un proyecto.
                        </p>
                    </div>
                </div>
            </div>
        </article>
        <article class="container mt-5">
            <div class="card card-block">
                <div class="card-header">
                    <h3>¿Que nos caracteriza?</h3>
                </div>
                <div class="card-body row d-flex justify-content-center align-items-center">
                    <div class="col-8 text-left">
                        <p> Nunca comprometemos nuestros altos estándares, para ello utilizamos metodologías agiles, círculos de calidad, coaching para el personal y tecnología de vanguardia.
                            Todo esto lo hacemos con la finalidad de poder alcanzar el más alto nivel. Lo que nos apasiona es 'Codificar'.
                        </p>
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="src/index/cards/logo-blanco.png" alt="logo">
                    </div>
                </div>
            </div>
        </article>
        <article class="container mt-5">
            <div class="card card-block">
                <div class="card-header">
                    <h3>Nuestras tecnologías</h3>
                </div>
                <div class="card-body row d-flex justify-content-center align-items-center">
                    <div class="col-4">
                        <img class="img-fluid rounded" src="src/index/cards/foco.png" alt="foco">
                    </div>
                    <div class="col-8 text-right">
                        <p> Desarrollamos aplicaciones responsivas a medida del cliente, al mismo tiempo, realizamos desarrollos para los sistemas operativos Android y iOS.
                            Asegurandonos siempre de aplicar los últimos avances tecnológicos, que permitan soluciones escalables y de fácil mantenimiento a lo largo del ciclo de vida del proyecto.
                            Analizamos previamente las necesades de nuestros clientes, tomando en cuenta sus preferencias para así, asegurar la calidad del producto entregado.
                        </p>
                    </div>
                </div>
            </div>
        </article>
        <?php include('includes/footer.php') ?>
    </main>
    <?php include('includes/scripts.php') ?>
</body>

</html>