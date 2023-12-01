$(document).ready( function () {
    $('#tabela').DataTable();
});

var table = new DataTable('#myTable', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json',
    },
});

$(document).ready ( function() {
    $('#cpf').mask('000.000.000-00');
 });