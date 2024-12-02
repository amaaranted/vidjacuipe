<?php
include('../../Controllers/protect.php');
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
                <h1>Selecione a Forma de Pagamento</h1>
                <h3 class="mb-4">
                    Selecione a forma de pagamento e clique em
                    <b>Continuar</b>
                    para
                    prosseguir para a
                    <b>conclusão do pedido</b>
                </h3>
                <form action="../../Controllers/finalizar.php" method="POST">
                    <div class="d-flex justify-content-between flex-wrap border rounded-top
                        pt-4 px-3">
                        <div class="mb-4 mx-2 flex-even">
                            <input type="radio" class="btn-check" name="pagamento" autocomplete="off" id="pag1">
                            <label class="btn btn-outline-primary p-4 h-100 w-100" for="pag1">
                                <h3>
                                    <b class="text-dark">Cartão de Crédito</b>
                                </h3>
                                <hr>
                                <div class="form-floating mb-3">
                                    <input type="text" name="txtNome" class="form-control" placeholder=" " autofocus>
                                    <label for="textNome" class="text-black-50">Nome impresso no cartão</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="txtNumero" class="form-control" placeholder=" " minlength="16" maxlength="16">
                                    <label for="textNumero" class="text-black-50">Número do cartão</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="txtValidade" class="form-control" placeholder=" " minlength="5" maxlength="5">
                                    <label for="textValidade" class="text-black-50">Validade (mm/aa)</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="txtCodigo" class="form-control" placeholder=" " minlength="3" maxlength="3">
                                    <label for="textCodigo" class="text-black-50">Código de Segurança</label>
                                </div>
                                <div class="form-floating">
                                    <select name="selParcelas" class="form-select">
                                        <option value="1" selected>Á Vista</option>
                                        <option value="2">2 x sem juros</option>
                                        <option value="3">3 x sem juros</option>
                                        <option value="4">4 x sem juros</option>
                                        <option value="5">5 x sem juros</option>
                                        <option value="6">6 x sem juros</option>
                                    </select>
                                    <label for="seliParcelas" class="text-black-50">Parcelamento</label>
                                </div>
                            </label>
                        </div>
                        <div class="mb-4 mx-2 flex-even">
                            <input type="radio" class="btn-check" name="pagamento2" autocomplete="off" id="pag2">
                            <label class="btn btn-outline-primary p-4 h-100 w-100" for="pag2">
                                <h3>
                                    <b class="text-dark">Dinheiro</b>
                                </h3>
                                <hr>
                                <h4>Valor da Compra:
                                    <b>R$ <?php echo $total ?></b>
                                </h4>
                                <br>
                                <p>
                                    Se precisar de troco informe no campo abaixo
                                </p>
                                <div class="form-floating mb-3">
                                    <input type="text" name="txtTroco" class="form-control" placeholder=" ">
                                    <label for="textTroco" class="text-black-50">Precisa de troco para quanto?</label>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="text-end border border-top-0 rounded-bottom p-4 pb-3">
                        <h4 class="text-dark mb-3">
                            Valor Total R$ <?php echo $total ?>
                        </h4>
                        <a href="../Produtos/fechamento_endereco.php" class="btn btn-outline-success btn-lg mt-3">
                            Voltar aos Endereços
                        </a>
                        <input type="submit" value="Finalizar" class="btn btn-outline-danger btn-lg
                            ms-2 mt-3" name="btnFinalizar"></input>
                    </div>
                </form>
            </div>
        </main>
        <?php
        include('../Layouts/Footer/footer.php');
        ?>
        <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    </div>
</body>

</html>