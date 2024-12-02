<nav class="navbar navbar-expand-lg navbar-dark bg-primary border-bottom shadow-sm mb-3">
    <div class="container">
        <a class="navbar-brand" href="/">
            <strong>
                <img src="../../Public/img/logomarca/logo3.png" width="130px" height="40px">
            </strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collpase navbar-collapse">
            <ul class="navbar-nav flex-grow-1">
                <li class="nav-item">
                    <a href="../../Views/Produtos/produto.php" class="nav-link active text white">Produtos</a>
                </li>
                <li class="nav-item">
                    <a href="../../Views/Contatos/meuscontatos.php" class="nav-link active text white">Meus Contatos</a>
                </li>
                <li class="nav-item">
                    <a href="../../Views/Relacionamento/quemsomos.php" class="nav-link text white">Quem Somos</a>
                </li>
            </ul>
            <div class="aligne-self-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/../../Views/Cliente/cliente.php" class="nav-link text white">Logado como <?php echo ($logado); ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="../../../Controllers/logout.php" class="nav-link text white">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>