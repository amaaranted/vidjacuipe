<?php
include('../../Controllers/protect.php');
include('../../Controllers/select_contatos.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
    <?php
    include('../Layouts/Head/head.php');
    ?>
    <title>Vidraçaria Jacuípe :: Área do Cliente :: Contatos</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        <?php
        include('../Layouts/Navbar/navbar.php');
        ?>
        <main class="flex-fill">
            <div class="container">
                <h1>Minha Conta</h1>
                <div class="row gx-3">
                    <div class="col-4">
                        <div class="list-group">
                            <a href="../Cliente/cliente_dados.php" class="list-group-item
                                    list-group-item-action">
                                <i class="bi-person fs-6"></i> Dados Pessoais
                            </a>
                            <a href="../Cliente/cliente_contatos.php" class="list-group-item
                                    list-group-item-action bg-primary text-light">
                                <i class="bi-mailbox fs-6"></i> Contatos
                            </a>
                            <a href="../Cliente/cliente_endereco.php" class="list-group-item
                                    list-group-item-action">
                                <i class="bi-house-door fs-6"></i> Endereço
                            </a>
                            <a href="../../Controllers/logout.php" class="list-group-item
                                    list-group-item-action">
                                <i class="bi-door-open fs-6"></i> Sair
                            </a>

                        </div>
                    </div>
                    <div class="col-8">
                        <form action="functions.php" method="post">

                            <div class="form-floating mb-3 col-md-8">
                                <input value="<?php echo $email ?>" class="form-control" type="text" id="txtEmail" placeholder=" " disabled />
                                <label for="txtNome">E-mail</label>
                            </div>
                            <div class="form-floating mb-3 col-md-6">
                                <input value="<?php echo $fone ?>" class="form-control" type="text" id="txtTelefone" placeholder=" " disabled />
                                <label for="txtTelefone">Telefone</label>
                            </div>
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