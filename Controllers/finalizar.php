<?php

if (isset($_POST['btnFinalizar'])) {
    if (isset($_POST['pagamento'])) {
        if (
            !empty($_POST['txtNome']) && !empty($_POST['txtNumero']) && !empty($_POST['txtValidade'])
            && !empty($_POST['txtCodigo']) && !empty($_POST['selParcelas'])
        ) {
            echo "<script>alert('Compra concluída.');</script>";
            echo "<script>location.href='../Views/produtos/fechamento_pedido.php';</script>";
        } else {
            echo "<script>alert(`
                Erro
                Preencha todos os campos
                Para finalizar a compra
            `);</script>";
            echo "<script>location.href='../Views/produtos/produto.php';</script>";
        }
    } else if (isset($_POST['pagamento2'])) {
        if (!empty($_POST['txtTroco'])) {
            echo "<script>alert('Compra concluída.');</script>";
            echo "<script>location.href='../Views/produtos/fechamento_pedido.php';</script>";
        } else {
            echo "<script>alert(`
                Erro
                Preencha todos os campos
                Para finalizar a compra
            `);</script>";
            echo "<script>location.href='../Views/produtos/produto.php';</script>";
        }
    } else {
        echo "<script>alert(`
                Erro!
                Escolha um metódo de pagamento
            `);</script>";
            echo "<script>location.href='../Views/produtos/produto.php';</script>";
    }
}
