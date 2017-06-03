var inputQuantidade = document.querySelector("#qtd");
var outputTotal = document.querySelector("#total");


qtd.oninput = function()
{
  var preco = document.querySelector("#preco").textContent;
  preco = preco.replace("R$ ", "");
  preco = preco.replace(",",".");
  preco = parseFloat(preco);
  var qtd = inputQuantidade.value;
  var total = qtd * preco;
  total = "R$ " + total.toFixed(2);
  total = total.replace(".", ",");
  outputTotal.value = total;
}
