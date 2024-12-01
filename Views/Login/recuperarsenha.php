<?php
include('../../Controllers/session.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
<?php
    include('../Layouts/Head/head.php');
    ?>
    <title>Vidraçaria Jacuípe :: Recuperação de Senha</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
    <?php
        include('../Layouts/Navbar/navbar.php');
        ?>
        <main class="flex-fill">
            <div class="container">
                <div class="row justify-content-center">
                    <form class="col-sm-10 col-md-8 col-lg-6">
                        <h1>Recuperação de Senha</h1>
                        <div class="form-floating mb-3">
                            <input type="email" id="txtEmail" class="form-control" placeholder=" " required autofocus>
                            <label for="txtEmail">E-mail</label>
                        </div>
                        <button type="button" onclick="window.location.href='../../Views/Login/confirmrecupsenha.php'" class="btn btn-md btn-primary">
                            Recuperar Senha
                        </button>
                        <p class="mt-3">Ainda não é cadastrado?
                            <a href="../../Views/Login/cadastro.php">Clique aqui</a>
                            para se cadastrar.
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