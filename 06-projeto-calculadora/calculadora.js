// Indica se o último botão pressionado foi um botão de operação
var ultimoOp = false;

// Armazena a operação selecionada
var operacao;

// Armazena o valor do primeiro operando
var operando01;


$(document).ready(function () {

  // Cliques nos botões de número
  $(".btnNumero").click(function () {
    if (ultimoOp) {
        $("#output").html($(this).html());
        ultimoOp = false;
    } else {
        $("#output").html(
          parseFloat($("#output").html() + $(this).html()));
    }
  });

  // Cliques nos botões de operação
  $(".btnOperacao").click(function () {
    operando01 = parseFloat($("#output").html());
    operacao = $(this).html();
    ultimoOp = true;
  });

  // Clique no botão igual
  $("#btnIgual").click(function () {
    var resultado;
    var operando02 = parseFloat($("#output").html());

    switch (operacao) {
    case "+":
      resultado = operando01 + operando02;
      break;
    case "-":
      resultado = operando01 - operando02;
      break;
    case "*":
      resultado = operando01 * operando02;
      break;
    case "/":
      resultado = operando01 / operando02;
      break;
    default:
      resultado = "Erro: operação inválida!";
      break;
    }

    $("#output").html(resultado);
  });

});
