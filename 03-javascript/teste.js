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

  // Leitura do campo de texto,
  var nome = document.getElementById("nome").value;

  // Atualização da div de saída
  document.getElementById("saida").innerHTML = "Olá " + nome + "!";

}


function parOuImpar() {

  // Exercício 01: ler o valor de x de um campo de texto
  var x = parseInt(document.getElementById('numero').value);

  if (x % 2 == 0)
    // Exercício 02: utilizar uma div de saída
    document.getElementById('output').innerHTML = x + " é par";
  else
    // Exercício 03: utilizar uma div de saída
    document.getElementById('output').innerHTML = x + " é ímpar";

}


function exemplo02() {

  var dia = document.getElementById('dia').value;

  var mensagem;

  switch (dia) {
    case '1':
      mensagem = "Você selecionou Domingo";
      break;
    case '2':
      mensagem = "Você selecionou Segunda-feira";
      break;
    case '3':
      mensagem = "Você selecionou Terça-feira";
      break;
    case '4':
      mensagem = "Você selecionou Quarta-feira";
      break;
    case '5':
      mensagem = "Você selecionou Quinta-feira";
      break;
    case '6':
      mensagem = "Você selecionou Sexta-feira";
      break;
    case '7':
      mensagem = "Você selecionou Sábado";
      break;
    default:
      mensagem = "Dia inválido!";
  }

  document.getElementById('saida02').innerHTML = mensagem;

}


function exemplo03() {

  var x = 0;

  while (x < 10) {
    ++x;
    console.log(x);
  }

}


function exemplo04() {

  var x = 20;

  do {
    ++x;
    console.log(x);
  } while (x < 10);

}


function exemplo05() {

  for (var x = 0; x < 10; ++x) {
    console.log(x);
  }

}
