<?php 
    // Conecta com o banco de dados
    include('../bd/conect.php');
    
    // Pega a opção que o cliente clicou (otimo, regular ou ruim)
    if(isset($_GET["acao"])) {
        $escolha = $_GET["acao"];
        
        // Salva no banco de dados
        Inserir($escolha);
    }

    // Redireciona de volta para a tela inicial após 3 segundos
    header("Refresh: 3; url=../index.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Avaliação Registrada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column justify-content-center align-items-center vh-100 text-center bg-light">
    <div>
        <h2 class="text-success fw-bold">OBRIGADO POR AVALIAR!!!</h2>
        <h4 class="text-secondary">SUA OPINIÃO É MUITO IMPORTANTE</h4>
        <br>
        <div class="spinner-border text-success" role="status"></div>
        <p class="mt-3">Voltando para a tela inicial...</p>
    </div>
</body>
</html>