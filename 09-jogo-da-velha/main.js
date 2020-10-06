var tabuleiro =   [0,       0,        0,
                   0,       0,        0,
                   0,       0,        0];

var idsBotoes =   ["btn01", "btn02",  "btn03",
                   "btn04", "btn05",  "btn06",
                   "btn07", "btn08",  "btn09"];

var jogador1 = true;

$(document).ready(function () {

  $(".btnCasa").click(function () {

    if (jogador1)
      $(this).html("X");
    else
      $(this).html("O");

    jogador1 = !jogador1;

  });

});
