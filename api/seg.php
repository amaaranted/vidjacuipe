<?php
include('Controllers/session.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
    <?php
    include('Views/Layouts/Head/head.php');
    ?>
    <title>Vidraçaria Jacuípe :: Página Principal</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        <?php
        include('Views/Layouts/Navbar/navbar.php');
        ?>
        <div class="container">
            <div id="carouselMain" class="carousel slide carousel-dark" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="Public/img/slides/slide01.jpg" class="d-none d-md-block w-100" alt="...">
                        <img src="Public/img/slides/slide01small.jpg" class="d-block d-md-none w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="Public/img/slides/slide02.jpg" class="d-none d-md-block w-100" alt="...">
                        <img src="Public/img/slides/slide02small.jpg" class="d-block d-md-none w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="Public/img/slides/slide03.jpg" class="d-none d-md-block w-100" alt="...">
                        <img src="Public/img/slides/slide03small.jpg" class="d-block d-md-none w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
            <hr class="mt-3">
        </div>
        <main class="flex-fill">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5">
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
                        </div>
                    </div>
                </div>
        </main>
        <?php
        include('Views/Layouts/Footer/footer.php')
        ?>
    </div>
</body>

</html>