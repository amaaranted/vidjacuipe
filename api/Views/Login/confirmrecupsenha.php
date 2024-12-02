<?php
include('../../Controllers/session.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
<?php
    include('../Layouts/Head/head.php');
    ?>
    <title>Vidraçaria Jacuípe :: </title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        <?php
            include('../Layouts/Navbar/navbar.php');
        ?>
        <main class="flex-fill">
            <div class="container">
                <h1>Instruções Enviadas!</h1>
                <hr>
                <p>
                    Caro cliente,
                </p>
                <p>
                    As instruções para realização de cadastro de uma nova senha foram
                    enviadas para o e-mail <b>email@dominio.com.br</b>. Abra a
                    mensagem que lhe enviamos e siga as instruções corretamente para
                    cadastrar uma nova senha
                </p>
                <p>
                    Agradecemos pela confiança em nossos serviços.
                </p>
                <p>
                    Cordialmente,<br>
                    Central de Relacionamentos Vidraçaria Jacuípe
                </p>
                <p>
                    <a href="/index.php" class="btn btn-md btn-secondary">Voltar a Página Principal</a>
                </p>
            </div>
        </main>
        <?php
        include('../Layouts/Footer/footer.php');
        ?>
        <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    </div>
</body>

</html>