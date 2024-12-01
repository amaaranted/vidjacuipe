<?php
include('../../Controllers/protect.php');
?>
<?php
if (isset($_REQUEST['id'])) {
    $id = $_GET['id'];
    include('../../Models/conexao.php');
    $sql = "SELECT id, capa, nome, descricao, preco, quantidade_estoque FROM produtos WHERE id = '$id'";
    $products = $conexao->query($sql);
    foreach ($products as $product) :
        $product['id'];
        $product['capa'];
        $product['nome'];
        $product['descricao'];
        $product['preco'];
        $product['quantidade_estoque'];
    endforeach;
    $nome = $product['nome'];
    $capa = $product['capa'];
    $preco = $product['preco'];
    $descricao = $product['descricao'];
    $quantidade = $product['quantidade_estoque'];
}
?>

<!doctype html>
<html lang="pt-br">

<head>
    <?php
    include('../Layouts/Head/head.php');
    ?>
    <title>Vidraçaria Jacuípe :: Produto <?php echo $nome ?></title>
    <script async src="../../Public/js/loja.js"></script>
</head>


<body>
    <div class="d-flex flex-column wrapper">
        <?php
        include('../Layouts/Navbar/navbar.php');
        ?>
        <main class="flex-fill">
            <div class="container">
                <h1>Produtos</h1>
                <div class="row gx-3">
                    <div class="col-4 mb-3 mt-3">
                        <div class="card text-center bg-light">
                            <a href="?id=1" class="position-absolute end-0 p-2 text-danger">
                            </a>
                            <img src="<?php echo $capa ?>" class="card-img-top">
                            <div class="card-header">
                                <h4>R$ <?php echo number_format($preco, 2, ',', '.') ?></h4>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $nome ?></h5>
                                    <p class="card-text truncar-3l">
                                        <?php echo $descricao ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="../Produtos/produto.php" class="btn btn-primary mt-2 d-block">
                                        Voltar ao carrinho
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-3 mt-3">
                    </div>
                    <div class="col-5">
                        <h1 class="mb-3"><?php echo $nome ?></h1>
                        <p>
                            O <?php echo $descricao ?> da AL Indústria veio para revolucionar o mercado em termos de qualidade, somos referência em materiais de polímero de alta resistência e durabilidade.<br>
                            Kit designado para profissionais vidreiros e serralheiros para atender aos mais variados projetos e aprovados por normas regulamentadoras.
                        </p>
                        
                        <h4>
                            Adquira o seu Kit e entregamos até você!
                        </h4>
                        <img class="mt-3" src="../../Public/img/slides/slide02.1.jpg">
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