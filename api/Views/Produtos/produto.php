<!doctype html>
<html lang="pt-br">
<?php
include('../../Controllers/protect.php');
include_once('../../Models/conexao.php');

$sql = "SELECT id, capa, nome, descricao, preco, quantidade_estoque FROM produtos";
$products = $conexao->query($sql);
?>

<head>
    <?php
    include('../Layouts/Head/head.php');
    ?>
    <title>Vidraçaria Jacuípe :: Compra de Produtos</title>
    <script async src="../../Public/js/loja.js"></script>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        <?php
        include('../Layouts/Navbar/navbar.php');
        ?>
        <main class="flex-fill">
            <div class="container">
                <h1> Carrinho de compras</h1>
                <table class="cart-table table">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center">Produto</th>
                            <th scope="col" style="text-align: center">Nome</th>
                            <th scope="col" style="text-align: center">Preço</th>
                            <th scope="col" style="text-align: center">Quantidade</th>
                            <th scope="col" style="text-align: center">Remover</th>
                        </tr>
                    </thead>
                    <tbody id="cart-complete">
                        <!-- <tr class="cart-product" style="text-align: center">
                            <td style="text-align: center">
                                    <div class="imgProduto">
                                        <img src="../../Public/img/produtos/KIT01.png" class="img-thumbnail produtoMiniatura" style="width: 120px;
                                            height: 90px; text-align: center">
                                    </div>
                                </td>
                            <td class="cart-product-title" style="text-align: center">KIT 01</td>
                            <td class="cart-product-price" style="text-align: center">R$ 90,00</td>
                            <td style="text-align: center">
                                <input class="cart-product-qtd" type="number" value="1" min="0" max="100" style="width: 52px;
                                            height: 30px;">
                            </td>
                            <td style="text-align: center"><button class="bottom-card btn btn-danger btn-md mb-1 btn-remove-cart">
                                    Remover
                                </button></td>
                        </tr>
                        <tr class="cart-product" style="text-align: center">
                            <td style="text-align: center; display: flex; align-items: center; justify-content: center;">
                                    <div class="imgProduto">
                                        <img src="../../Public/img/produtos/KIT08.png" class="img-thumbnail produtoMiniatura" style="width: 120px;
                                            height: 90px;">
                                    </div>
                                </td>
                            <td class="cart-product-title" style="text-align: center">KIT 08</td>
                            <td class="cart-product-price" style="text-align: center">R$ 220,00</td>
                            <td style="text-align: center">
                                <input class="cart-product-qtd" type="number" value="1" min="0" max="100" style="width: 52px;
                                            height: 30px;">
                            </td>
                            <td style="text-align: center"><button class="bottom-card btn btn-danger btn-md mb-1 btn-remove-cart">
                                    Remover
                                </button></td>
                        </tr> -->
                    </tbody>
                </table>
                <li class="list-group-item cart-total pt-3 pb-0">
                    <div class="text-end">
                        <h4 class="text-dark mb-3 vlr-total">
                            Total de Produtos R$ 0,00
                        </h4>
                        <button type="button" class="btn btn-outline-danger btn-sm mb-3 ms-2 btn-remove-all">
                            Esvaziar Carrinho
                        </button>
                        <button type="button" class="btn btn-outline-success btn-sm
                                    ms-2 mb-3 btn-finality">Continuar
                        </button>
                    </div>
                </li>
            </div>
            <div class="container">
                <hr class="mt3">
                <div class="row g-3">
                <?php foreach ($products as $product) : ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="p.php?id=<?php echo $product['id']; ?>">
                                    <img src="<?php echo $product['capa'] ?>" class="card-img-top" >
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value" ><?php echo 'R$ ' . number_format($product['preco'], 2, ',', '.'); ?></h6>
                                    <h5 class="card-title cart-title mt-2" ><?php echo $product['nome']; ?></h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- <div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT02.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 52,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 02</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT03.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 39,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 03</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT04.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 27,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 04</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT05.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 59,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 05</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT06.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 62,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 06</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT07.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 73,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 07</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT08.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 220,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 08</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT09.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 83,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 09</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT10.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 58,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 10</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT11.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 92,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 11</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT12.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 79,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 12</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT01C.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 90,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 01 CH</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT02.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 52,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 02 CH</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT03C.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 39,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 03 CH</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT04C.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 27,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 04 CH</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT05C.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 59,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 05 CH</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT06C.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 62,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 06 CH</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT07C.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 73,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 07 CH</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT08C.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 220,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 08 CH</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT09C.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 83,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 09 CH</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT10C.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 58,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 10 CH</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT11C.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 92,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 11 CH</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="produtos/kit05.php">
                                    <img src="/img/produtos/KIT12C.png" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    <h6 class="cart-value">R$ 79,00</h6>
                                    <h5 class="card-title cart-title mt-2">KIT 12 CH</h5>
                                    <button class="bottom-card btn btn-success btn-md mb-1 btn-add-cart">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <hr class="mt3">
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