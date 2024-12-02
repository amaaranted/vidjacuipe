<?php
include('../../Controllers/session.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
<?php
    include('../Layouts/Head/head.php');
    ?>
    <title>Vidraçaria Jacuípe :: Mensagem Recebida</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        <?php
        include('../Layouts/Navbar/navbar.php');
        ?>
        <main class="flex-fill">
            <div class="container">
                <h1>Mensagem Recebida!</h1>
                <hr>
                <p>
                    Caro Cliente,
                </p>
                <p>
                    Informamos que sua mensagem foi recebida com sucesso por nossa central de relacionamento com clientes e que em até
                    <b> 24 horas</b>
                    entraremos em contato. Para não haver conflito de de comunicação, não precisa reenviar a mesma mensagem no prazo de resposta.
                </p>
                <p>
                    Agradecemos pela confiança em nossos serviços.
                </p>
                <p>
                    Atenciosamente,
                    <br>
                    Central de Relacionamento Vidraçaria Jacuípe
                </p>
                <p>
                    <a href="../../index.php" class="btn btn-md btn-secondary">Voltar a Página Principal</a>
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