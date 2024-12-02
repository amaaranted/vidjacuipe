<?php
include('../../Controllers/session.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include('../Layouts/Head/head.php');
    ?>
    <title>Vidraçaria Jacuípe :: Cadastro de Cliente</title>
    <script src="../../Public/js/viacep.js" type='module' defer></script>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        <?php
        include('../Layouts/Navbar/navbar.php');
        ?>
        <main class="flex-fill">
            <div class="container">
                <h1>Cadastro de Clientes</h1>
                <hr>
                <form action="../../Controllers/cadastrar.php" method="POST">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <fieldset class="row">
                                <legend>Dados Pessoais</legend>
                                <div class="mb-3 col-xl-10 col-lg-10">
                                    <label for="txtNome" class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="txtNome" required>
                                </div>
                                <div class="mb-3 col-md-6 col-xl-5 col-lg-10">
                                    <label for="txtCPF" class="form-label">CPF</label>
                                    <span class=" col-md-4 form-text">Digite apenas números</span>
                                    <input type="text" class="form-control" name="txtCPF" required minlenght="11" maxlength="11" id="txtCPF">
                                </div>
                                <div class="mb-3 col-md-6 col-xl-5 col-lg-10">
                                    <label for="txtDataNasc" class="form-label">Data de Nascimento</label>
                                    <input type="date" class="form-control" name="txtDataNasc" required>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Contatos</legend>
                                <div class="mb-3 col-md-12 col-xl-10">
                                    <label for="txtEmail" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" name="txtEmail" required>
                                </div>
                                <div class="mb-3 col-md-12 col-xl-8">
                                    <label for="txtTelefone" class="form-label">Telefone</label>
                                    <span class="form-text">Com DDD, somente números</span>
                                    <input type="tel" class="form-control" name="txtTelefone" placeholder=" " required minlenght="11" maxlength="11" id="txtTelefone">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <fieldset class="row">
                                <legend>Endereço</legend>
                                <div class="mb-3 col-md-6 col-xl-4">
                                    <label for="txtCEP" class="form-label">CEP</label>
                                    <span id="msgError" class="msgError" style="color: red;"></span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="txtCEP" required minlenght="8" maxlength="8" id="txtCEP">
                                        <!--<span class="input-group-text p-1">
                                            <svg class="bi" width="24" height="24" fill="currentColor">
                                                <use xlink:href="/bi.svg#hourglass-split" />
                                            </svg>
                                        </span>-->
                                    </div>
                                </div>
                                <div class="mb-3 col-md-12 col-xl-8 align-self-end">
                                    <label for="txtRua" class="form-label">Rua</label>
                                    <input type="text" class="form-control" name="txtRua" id="txtRua" required>
                                </div>
                                <div class="mb-3 col-md-12 col-xl-6">
                                    <label for="txtBairro" class="form-label">Bairro</label>
                                    <input type="text" class="form-control" name="txtBairro" id="txtBairro" required>
                                </div>
                                <div class="mb-3 col-md-9 col-xl-4">
                                    <label for="txtCidade" class="form-label">Cidade</label>
                                    <input type="text" class="form-control" name="txtCidade" id="txtCidade" required>
                                </div>
                                <div class="mb-3 col-md-3 col-xl-2">
                                    <label for="txtEstado" class="form-label">Estado</label>
                                    <input type="text" class="form-control" name="txtEstado" id="txtEstado" required>
                                </div>
                                <div class="mb-3 col-md-3 col-xl-2">
                                    <label for="txtNumero" class="form-label">Número</label>
                                    <input type="text" class="form-control" name="txtNumero" required minlength="1" maxlength="4">
                                </div>
                                <div class="mb-3 col-md-9 col-xl-5">
                                    <label for="txtComplemento" class="form-label">Complemento</label>
                                    <input type="text" class="form-control" name="txtComplemento" id="txtComplemento" minlength="1" maxlength="10">
                                </div>
                                <div class="mb-3 col-md-12 col-xl-5">
                                    <label for="txtReferencia" class="form-label">Referência</label>
                                    <input type="text" class="form-control" name="txtReferencia"minlength="1" maxlength="25">
                                </div>
                            </fieldset>
                            <fieldset class="row">
                                <legend>Usuário e Senha de Acesso</legend>
                                <div class="mb-3 col-md-12 col-xl-6">
                                    <label for="txtUsuario" class="form-label">Usuário</label>
                                    <input type="text" class="form-control" name="txtUsuario" required>
                                </div>
                                <div class="mb-3 col-md-12 col-xl-6">
                                    <label for="txtSenha" class="form-label">Senha</label>
                                    <input type="password" class="form-control" name="txtSenha" required>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <a class="btn btn-secondary" href="/index.php">Cancelar</a>
                        <input type="submit" name="btnCadastrar" value="Criar meu Cadastro" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </main>
        <?php
        include('../Layouts/Footer/footer.php');
        ?>
        <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
        <script>
            
        </script>
    </div>
</body>

</html>