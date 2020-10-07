var tabuleiro =   [0,       0,        0,
                   0,       0,        0,
                   0,       0,        0];

var idsBotoes =   ["btn01", "btn02",  "btn03",
                   "btn04", "btn05",  "btn06",
                   "btn07", "btn08",  "btn09"];

var jogador1 = true;

/*
0   1   2
3   4   5
6   7   8
*/
var jogadasVencedoras = [
  [0, 1, 2], // primeira linha
  [3, 4, 5], // segunda linha
  [6, 7, 8], // terceira linha
  [0, 3, 6], // primeira coluna
  [1, 4, 7], // segunda coluna
  [2, 5, 8], // terceira coluna
  [0, 4, 8], // primeira diagonal
  [2, 4, 6]
];

var vencedor = false;

$(document).ready(function () {

  $(".btnCasa").click(function () {

    if (vencedor) {
      alert("O jogo já terminou!");
      return;
    }

    // Recupera o id do botão clicado
    var idClicado = $(this).attr("id");

    // Recupera a posição do id
    var pos = idsBotoes.indexOf(idClicado);

    // Verifica se a casa está vaga
    if (tabuleiro[pos] != 0) {
      alert("Escolha uma casa vaga!");
      return;
    }

    // Atualiza o tabuleiro e o texto do botão
    if (jogador1) {
      tabuleiro[pos] = 1;
      $(this).html("X");
    } else {
      tabuleiro[pos] = 2;
      $(this).html("O");
    }

    // Verifica se há um vencedor
    for (var i = 0; i < 8; ++i) {
      var idx1 = jogadasVencedoras[i][0];
      var idx2 = jogadasVencedoras[i][1];
      var idx3 = jogadasVencedoras[i][2];

      if (tabuleiro[idx1] != 0 &&
          tabuleiro[idx1] == tabuleiro[idx2] &&
          tabuleiro[idx2] == tabuleiro[idx3]) {
            $("#" + idsBotoes[idx1]).addClass("colorBlue");
            $("#" + idsBotoes[idx2]).addClass("colorBlue");
            $("#" + idsBotoes[idx3]).addClass("colorBlue");

            vencedor = true;

            break;
      }
    }

    // Passa a vez para o próximo jogador
    jogador1 = !jogador1;

  });

});
