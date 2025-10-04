$(document).ready(function(){
  $('.catalogo').click(function() {
    $('#catalogo').removeClass('d-none');
    $('#cadastro').addClass('d-none');
    $('#consulta').addClass('d-none');
  });
  $('.cadastro').click(function() {
    $('#catalogo').addClass('d-none');
    $('#cadastro').removeClass('d-none');
    $('#consulta').addClass('d-none');
  });
});

$('#filtro_tabela').on('keyup', function () {
    var nomeFiltro = $(this).val().toLowerCase();
    $('#tabela_dados').find('tr').each(function () {
        var conteudoCelula = $(this).find('td:first').text();
        var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
        $(this).css('display', corresponde ? '' : 'none');
    });
});

function goBack() {
    window.history.back()
}