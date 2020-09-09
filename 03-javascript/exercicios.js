// Exercício 01
function ex01Dobro() {

  // Leitura do campo de texto
  var n = parseInt(document.getElementById("numeroEx01").value);

  // Cálculo do dobro'
  var dobro = n * 2;

  // Saída
  document.getElementById("saidaEx01").innerHTML = "Dobro: " + dobro;

}


function ex01Triplo() {

  var n = parseInt(document.getElementById("numeroEx01").value);

  var triplo = n * 3;

  document.getElementById("saidaEx01").innerHTML = "Triplo: " + triplo;

}


// Exercício 02
function ex02ParImpar() {

  var n = parseInt(document.getElementById("numeroEx02").value);

  var mensagem = "O número " + n + " é par.";

  if (n % 2 != 0)
    mensagem = "O número " + n + " é ímpar.";

  document.getElementById("saidaEx02").innerHTML = mensagem;

}


// Exercicio 03
function ex03Primo() {

  var n = parseInt(document.getElementById("numeroEx03").value);

  var primo = true;

  if (n > 2) {
    if (n % 2 == 0) {
      console.log("divisivel por 2");
      primo = false;
    } else {
      for (var i = 3; i < n; i += 2) {
        if (n % i == 0) {
          console.log("divisivel por " + i);
          primo =  false;
          break;
        }
      }
    }
  }

  if (primo)
    document.getElementById("saidaEx03").innerHTML = "O número " + n + " é primo.";
  else
    document.getElementById("saidaEx03").innerHTML = "O número " + n + " não é primo.";

}
