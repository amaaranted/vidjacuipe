<?php
include('../../Controllers/protect.php');

?>
<!doctype html>
<html lang="pt-br">

<head>
    <?php
    include('../Layouts/Head/head.php');
    ?>
    <title>Vidraçaria Jacuípe :: Meus Contatos</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        <?php
        include('../Layouts/Navbar/navbar.php');
        ?>
        <main class="flex-fill">
            <div class="container">
                <h1>Contatos Realizados</h2><br>
                    <?php
                    include('../../Controllers/contatoscliente.php');
                    foreach ($resultado10 as $contatos1) : ?>
                        <div class="card" style="width: 80rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $contatos1['nome_completo'] ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $contatos1['email_contato'] ?></h6>
                                <p class="card-text"><?php echo $contatos1['mensagem']?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
            </div>
        </main>
        <?php
        include('../Layouts/Footer/footer.php');
        ?>
        <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    </div>
</body>

</html>