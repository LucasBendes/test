<?php include('includes/header.php'); ?>
<h1>Bem-vindo à Loja Virtual</h1>
<?php
include('conexao.php');
$result = $conn->query("SELECT * FROM produtos");

while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<h2>{$row['nome']}</h2>";
    echo "<p>R$ {$row['preco']}</p>";
    echo "<form method='post' action='carrinho.php'>";
    echo "<input type='hidden' name='produto_id' value='{$row['id']}'>";
    echo "<button type='submit'>Adicionar ao Carrinho</button>";
    echo "</form>";
    echo "</div>";
}
?>
<?php include('includes/footer.php'); ?>
