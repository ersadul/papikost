$(function () {
    $('#datatable').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#reservation').daterangepicker()
    $('.select2').select2()
    $('#datepicker').datepicker({
      autoclose: true
    })
})