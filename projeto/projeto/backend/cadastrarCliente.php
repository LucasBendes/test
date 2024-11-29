<?php include('includes/header.php'); ?>
<h1>Cadastro de Cliente</h1>
<form method="post" action="cadastro_cliente.php">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Cadastrar</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO clientes (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if ($conn->query($sql)) {
        echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>
<?php include('includes/footer.php'); ?>

