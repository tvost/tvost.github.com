<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'site1';

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

try {
    // Consultar o banco de dados para verificar as credenciais
    $sql = "SELECT * FROM site1 WHERE email = ?";
    $stmt = mysqli_prepare($conexao, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        if (!$resultado) {
            throw new Exception("Erro ao consultar o banco de dados: " . mysqli_error($conexao));
        }

        $dados = mysqli_fetch_assoc($resultado);

        if ($dados && password_verify($senha, $dados['senha'])) {
            // Iniciar a transação
            mysqli_begin_transaction($conexao);

            echo "Login bem-sucedido! Bem-vindo, " . $dados['usuario'];
            mysqli_commit($conexao); // Confirmar a transação

            // Redirecionar para a página de início
            header("Location: index.html");
            exit();
        } else {
            echo "Credenciais inválidas. Tente novamente.";
        }

        mysqli_stmt_close($stmt);
    } else {
        throw new Exception("Erro na declaração preparada: " . mysqli_error($conexao));
    }
} catch (Exception $e) {
    // Em caso de erro, desfazer a transação
    mysqli_rollback($conexao);
    echo "Erro: " . $e->getMessage();
}

mysqli_close($conexao);
?>
