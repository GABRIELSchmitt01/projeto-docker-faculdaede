<?php 
    try{
        // CORREÇÃO 1: Senha 'root' adicionada para conectar ao Docker
        $pdo = new PDO('mysql:host=db;dbname=sistema_curso', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "Erro de Conexão <br>";
    }

    // Função Inserir os Dados no Banco
    function Inserir($escolha){
        $pdo = $GLOBALS["pdo"];
        $data = new DateTime('now', new DateTimeZone('America/Araguaina'));
        $sql = $pdo->prepare("INSERT INTO avaliacao VALUES (null,?,?)");
        $sql->execute(array($escolha, $data->format('Y-m-d H:i:s')));
    }

    // Função Consultar do Banco (Para os Gráficos)
    function Consultar($opcao){
        $pdo = $GLOBALS["pdo"];
        
        // CORREÇÃO 2: Trocado 'escolha' pela coluna correta 'opcao'
        $sql = $pdo->prepare("SELECT COUNT(*) FROM avaliacao WHERE opcao = ?");
        $sql->execute(array($opcao));
        $retorno = $sql->fetchAll();

        foreach($retorno as $key => $value){
            echo $value['COUNT(*)'];
        }
    }

    // Função que verifica o login no Banco
    function Verificar($usuario, $senha){
        $pdo = $GLOBALS["pdo"];

        // CORREÇÃO 3: Trocado para a tabela 'usuarios' e removido o md5()
        $sql = $pdo->prepare("SELECT COUNT(*) FROM usuarios WHERE usuario = ? and senha = ?");
        $sql->execute(array($usuario, $senha));

        $consulta = $sql->fetchAll();

        foreach($consulta as $key => $value){
            $retorno = $value['COUNT(*)'];
        }

        return $retorno;
    }
?>