function minhaFuncao() {
  alert("Mensagem da minha função...");
}


function meuNome() {
  alert("Fernando");
}


// Retorna a soma de n1 e n2
function soma() {

  // Leitura do valor de n1
  var n1 = parseInt(document.getElementById("n1").value);

  // Leitura do valor de n2
  var n2 = parseInt(document.getElementById("n2").value);

  // Atualiza a div de saída
  document.getElementById("saida").innerHTML = n1 + n2;

}


function alteraTexto() {

  document.getElementById("saida").innerHTML = "Novo texto";

}


function ola() {

  // Leitura do campo de texto
  var nome = document.getElementById("nome").value;

  // Atualização da div de saída
  document.getElementById("saida").innerHTML = "Olá " + nome + "!";

}


function parOuImpar() {

  // Exercício 01: ler o valor de x de um campo de texto
  var x = 11;

  if (x % 2 == 0)
    // Exercício 02: utilizar uma div de saída
    console.log("x é par");
  else
    // Exercício 03: utilizar uma div de saída
    console.log("x é ímpar");

}
