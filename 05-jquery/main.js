// Seletor: $(document)
// Evento: ready
$(document).ready(function () {

  // Exemplo 01
  // Seletor: $("#btnMensagem") => id = btnMensagem
  // Evento: click
  $("#btnMensagem").click(function () {
    // Recupera o texto digitado pelo usuário
    var texto = $("#msg").val();

    // Exibe a mensagem de saída
    $("#saida").html("Você digitou: " + texto);
  });

  // Exemplo 02
  $(".btnEx02").click(function () {
    console.log("Você clicou no elemento com id " + $(this).prop("id"));
    $("#saida02").html($(this).html());
  });

});
