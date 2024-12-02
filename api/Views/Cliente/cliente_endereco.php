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
    <title>Vidraçaria Jacuípe :: Área do Cliente :: Endereço</title>
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
                                    list-group-item-action">
                                <i class="bi-mailbox fs-6"></i> Contatos
                            </a>
                            <a href="../Cliente/cliente_endereco.php" class="list-group-item
                                    list-group-item-action bg-primary text-light">
                                <i class="bi-house-door fs-6"></i> Endereço
                            </a>
                            <a href="../../Controllers/logout.php" class="list-group-item
                                    list-group-item-action">
                                <i class="bi-door-open fs-6"></i> Sair
                            </a>

                        </div>
                    </div>
                    <div class="col-8">
                        <div class="col-12">
                            <form method="post" class="row">
                                <div class="mb-3 col-md-6 col-xl-4">
                                    <label for="txtCEP" class="form-label">CEP</label>
                                    <div class="input-group">
                                        <input value="<?php echo $cep ?>" type="text" class="form-control" name="txtCEP" id="txtCEP" disabled>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-12 col-xl-8 align-self-end">
                                    <label for="txtRua" class="form-label">Rua</label>
                                    <input value="<?php echo $rua ?>" type="text" class="form-control" name="txtRua"disabled>
                                </div>
                                <div class="mb-3 col-md-12 col-xl-6">
                                    <label for="txtBairro" class="form-label">Bairro</label>
                                    <input value="<?php echo $bairro ?>" type="text" class="form-control" name="txtBairro" disabled>
                                </div>
                                <div class="mb-3 col-md-9 col-xl-4">
                                    <label for="txtCidade" class="form-label">Cidade</label>
                                    <input value="<?php echo $cidade ?>" type="text" class="form-control" name="txtCidade" disabled>
                                </div>
                                <div class="mb-3 col-md-3 col-xl-2">
                                    <label for="txtEstado" class="form-label">Estado</label>
                                    <input value="<?php echo $estado ?>" type="text" class="form-control" name="txtEstado" disabled>
                                </div>
                                <div class="mb-3 col-md-3 col-xl-2">
                                    <label for="txtNumero" class="form-label">Número</label>
                                    <input value="<?php echo $numero ?>" type="text" class="form-control" name="txtNumero" disabled>
                                </div>
                                <div class="mb-3 col-md-9 col-xl-5">
                                    <label for="txtComplemento" class="form-label">Complemento</label>
                                    <input value="<?php echo $complemento ?>" type="text" class="form-control" name="txtComplemento" disabled>
                                </div>
                                <div class="mb-3 col-md-12 col-xl-5">
                                    <label for="txtReferencia" class="form-label">Referência</label>
                                    <input value="<?php echo $referencia ?>" type="text" class="form-control" name="txtReferencia" disabled>
                                </div>
                            </form>
                        </div>
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