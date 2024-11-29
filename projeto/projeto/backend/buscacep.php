<?php
if (isset($_GET['cep'])) {
    $cep = $_GET['cep'];
    $url = "https://viacep.com.br/ws/$cep/json/";
    $endereco = json_decode(file_get_contents($url), true);
    echo "Endereço: " . $endereco['logradouro'];
}
?>
<form method="get">
    <input type="text" name="cep" placeholder="Digite seu CEP" required>
    <button type="submit">Calcular Frete</button>
</form>
