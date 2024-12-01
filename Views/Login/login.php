<?php

include('../../Controllers/session.php');

?>
<!doctype html>
<html lang="pt-br">

<head>
    <?php
    include('../Layouts/Head/head.php');
    ?>
    <title>Vidraçaria Jacuípe :: Login</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
    <?php
        include('../Layouts/Navbar/navbar.php');
        ?>
        <main class="flex-fill">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-8 col-lg-6">
                        <h1>Identifique-se, por favor</h1>
                        <form action="../../Controllers/logar.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" name="usuario" class="form-control" placeholder=" " value="<?= $usuario ?>">
                                <label for="txtUsuario">Usuário</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="senha" class="form-control" placeholder=" ">
                                <label for="txtSenha">Senha</label>
                            </div>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" value="" id="chkLembrar" name="chkLembrar">
                                <label for="chkLembrar" class="form-check-label">Lembrar de Mim</label>
                            </div>
                            <input type="submit" value="Entrar" name="entrar" class="btn btn-md btn-primary" href=''></input>
                            <p class="mt-3">Ainda não é cadastrado?
                                <a href="../../Views/Login/cadastro.php">Clique aqui</a>
                                para se cadastrar.
                            </p>
                            <p class="mt-3">
                                Esqueceu sua senha? <a href="../../Views/Login/recuperarsenha.php">Clique aqui</a> para recuperá-la.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php
        include('../Layouts/Footer/footer.php');
        ?>
        <script src=" /node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    </div>
</body>

</html>