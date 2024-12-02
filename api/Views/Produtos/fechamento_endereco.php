<?php
include('../../Controllers/protect.php');
include('../../Controllers/select_contatos.php');
if (isset($_REQUEST["t"])) {
    $total = $_REQUEST["t"];
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <?php
    include('../Layouts/Head/head.php');
    ?>
    <title>Vidraçaria Jacuípe :: Fechamento da Compra</title>
    <script async src="../../Public/js/loja.js"></script>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        <?php
        include('../Layouts/Navbar/navbar.php');
        ?>
        <main class="flex-fill">
            <div class="container">
                <h1>Selecione o Endereço de Entrega</h1>
                <h3 class="mb-4">
                    Selecione o endereço de entrega e clique em <b>Continuar</b> para
                    prosseguir para a <b>seleção da forma de pagamento</b>
                </h3>
                <div class="d-flex justify-content-around flex-wrap border rounded-top
                        pt-4 px-3">
                    <div class="mb-4 mx-2 flex-even button">
                        <input type="radio" class="btn-check" name="endereco" autocomplete="off" id="end1">
                        <label class="btn btn-outline-dark p-4 h-100 w-100" for="end1">
                            <h3>
                                <b>Minha Casa</b><br>
                                <hr>
                                <?php echo $rua ?>, <?php echo $numero ?><br>
                                <?php echo $complemento ?><br>
                                <?php echo $referencia ?><br>
                                <?php echo $bairro ?><br>
                                <?php echo $cep ?><br>
                                <?php echo $cidade ?><br>
                                <?php echo $estado ?>
                            </h3>
                        </label>
                    </div>


                </div>
                <div class="text-end border border-top-0 rounded-bottom p-4 pb-0 mb-3">
                    <h4 class="text-dark mb-3 cart-total">
                        Valor Total R$ <?php echo $total ?>
                    </h4>
                    <a href="../Produtos/produto.php" class="btn btn-outline-danger btn-lg mb-3">
                        Voltar aos Itens
                    </a>
                    <a href="../Produtos/fechamento_pagamento.php?t=<?php echo $total ?>" class="btn btn-outline-success btn-lg mb-3
                            ms-2 mt-xs-3">Continuar</a>
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