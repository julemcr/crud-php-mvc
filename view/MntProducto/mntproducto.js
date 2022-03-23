var tabla;

function init() {
  tabla = $('#tblmntproducto').DataTable({
    "aProcessing": true,
    "aServerSide": true,
    dom: 'Bfrtip',
    buttons: [
      'copyHtml5','excelHtml5','csvHtml5','pdf'
    ],
    language: {
      searchPlaceholder: 'Buscando...',
      sSearch: '',
      lengthMenu: '_MENU_ items/page',
    },
    "ajax":{
      url: '../../controller/productos.php?op=Listar',
      type: "get",
      dataType: "json",
      error: function(e) {
        console.log(e.responseText);
      }
    },
    "bDestroy": true,
    "responsive": true,
    "bInfo": true,
    "iDisplayLength": 10,
    order: [[0, "desc"]]
  });
}

$(document).ready(function() {
  init();
})