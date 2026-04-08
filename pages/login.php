<?php include("cabecalho.php") ?>

<link rel="stylesheet" href="../css/style.css">

<div class="container-fluid row">
    <div class="col-sm-6">
        <img src="../img/senha.png" width="100%" alt="">
    </div>
    <div class="col-sm-6">
        <h4>Autenticação</h4>
        <form action="../pages/logar.php" method="POST">
            <div class="mb-3 mt-3">
                <label for="usuario" class="form-label">Usuário:</label>
                <input type="text" class="form-control" id="usuario" placeholder="Informe o Usuário" name="usuario">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="senha" placeholder="Informe a Senha" name="senha">

            </div>

            <button type="submit" class="btn btn-primary">Logar</button>
        </form>
    </div>
</div>

<?php include("rodape.php") ?>