<?php
include('../../Controllers/protect.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
<?php
    include('../Layouts/Head/head.php');
    ?>
    <title>Vidraçaria Jacuípe :: Fechamento da Compra</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
    <?php
        include('../Layouts/Navbar/navbar.php');
        ?>
        <main class="flex-fill">
            <div class="container text-center">
                <h1>Obrigado!</h1>
                <hr>
                <h3>Anote o número de seu pedido</h3>
                <h2 class="text-primary"><b>003417</b></h2>
                <p>Em até 4 horas, seu pedido será entregue. Qualquer dúvida sobre este
                    pedido, entre em contato conosco e informe o número do pedido para
                    que possamos te ajudar.
                </p>
                <p>Atenciosamente,<br>
                    Equipe Vidraçaria Jacuípe
                </p>
                <p>
                    <a href="/index.php" class="btn btn-primary btn-lg">Voltar a Página
                        Principal</a>
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