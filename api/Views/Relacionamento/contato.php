<?php
include('../../Controllers/session.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
    <?php
    include('../Layouts/Head/head.php');
    ?>
    <title>Vidraçaria Jacuípe ::</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
    <?php
        include('../Layouts/Navbar/navbar.php');
        ?>
        <main class="flex-fill">
            <div class="container">
                <div class="row justify-content-center">
                    <form action="../../Controllers/contato_registro.php" method="post" class="col-sm-10 col-md-8 col-lg-6">
                        <h1>Entre em Contato</h1>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" name="txtNomeCompleto" class="form-control" placeholder=" " autofocus>
                            <label for="txtNomeCompleto">Nome Completo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="txtEmail" class="form-control" placeholder=" ">
                            <label for="txtEmail">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="txtMensagem" class="form-control" placeholder=" " style="height: 200px;"></textarea>
                            <label for="textMensagem">Mensagem</label>
                        </div>
                        <input name="btnRegistrar" type="submit" class="btn btn-md btn-primary" value="Enviar Mensagem"></input>
                        <p class="mt-3">
                            Entraremos em contato em 24 até horas para entender, solucionar e melhor atender.
                        </p>
                        <p class="mt-3">
                            Atenciosamente,
                            <br>
                            Central de relacionamento, Vidraçaria Jacuípe.
                        </p>
                    </form>
                </div>
            </div>
        </main>
        <?php
        include('../Layouts/Footer/footer.php');
        ?>
        <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    </div>
</body>

</html>