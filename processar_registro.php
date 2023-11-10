<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'site1';

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

// Receber dados do formulário
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

// Criptografar a senha
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// Iniciar a transação
mysqli_begin_transaction($conexao);

try {
    // Verificar se o e-mail já existe na tabela
    $verificarEmail = "SELECT * FROM site1 WHERE email = ?";
    $stmtVerificarEmail = mysqli_prepare($conexao, $verificarEmail);

    if ($stmtVerificarEmail) {
        mysqli_stmt_bind_param($stmtVerificarEmail, "s", $email);
        mysqli_stmt_execute($stmtVerificarEmail);
        $resultadoVerificarEmail = mysqli_stmt_get_result($stmtVerificarEmail);

        if ($resultadoVerificarEmail && mysqli_fetch_assoc($resultadoVerificarEmail)) {
            throw new Exception("E-mail já registrado. Escolha outro e-mail.");
        }

        mysqli_stmt_close($stmtVerificarEmail);
    } else {
        throw new Exception("Erro na declaração preparada: " . mysqli_error($conexao));
    }

    // Inserir dados no banco de dados usando declaração preparada
    $inserirUsuario = "INSERT INTO site1 (usuario, email, senha) VALUES (?, ?, ?)";
    $stmtInserirUsuario = mysqli_prepare($conexao, $inserirUsuario);

    if ($stmtInserirUsuario) {
        mysqli_stmt_bind_param($stmtInserirUsuario, "sss", $usuario, $email, $senhaHash);

        if (mysqli_stmt_execute($stmtInserirUsuario)) {
            // Confirmar a transação
            mysqli_commit($conexao);
            echo "Registro bem-sucedido!";
        } else {
            throw new Exception("Erro ao registrar: " . mysqli_error($conexao));
        }

        mysqli_stmt_close($stmtInserirUsuario);
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