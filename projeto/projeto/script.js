
let carrinho = [];
let total = 0;

function adicionarAoCarrinho(nomeProduto, precoProduto) {

    carrinho.push({ nome: nomeProduto, preco: precoProduto });


    total += precoProduto;


    atualizarCarrinho();
}


function atualizarCarrinho() {
    const itensCarrinho = document.getElementById("itens-carrinho");
    const totalElement = document.getElementById("total");

   
    itensCarrinho.innerHTML = "";

    
    carrinho.forEach(item => {
        const li = document.createElement("li");
        li.textContent = `${item.nome} - R$ ${item.preco.toFixed(2)}`;
        itensCarrinho.appendChild(li);
    });

    totalElement.textContent = total.toFixed(2);
}
function calcularFrete() {
    const cep = document.getElementById("cep").value;

    if (cep.length !== 8 || isNaN(cep)) {
        alert("CEP inválido!");
        return;
    }

   
    const valorFrete = 20.0; 
    document.getElementById("valor-frete").textContent = valorFrete.toFixed(2);
}
