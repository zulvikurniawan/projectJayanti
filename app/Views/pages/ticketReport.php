<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container bg-white mt-3 shadow">
     <div class="row">
          <div class="col text-center">
               <h3>Report</h3>
               <hr>
          </div>
     </div>
     <div class="row mb-2">
          <div class="col-2">
               <h5 class="mb-3">From Date</h5>
               <h5 class="mb-3">Until Date</h5>
               <h5 class="mb-3">Category</h5>

          </div>
          <div class="col-3">
               <input class="form-control form-control-sm mb-2" type="date">
               <input class="form-control form-control-sm mb-2" type="date">
               <select name="cars" id="cars" class="form-select">
                    <option value="volvo" hidden disabled>Select Type</option>
                    <option value="volvo">All</option>
                    <option value="volvo">Software Problem</option>
                    <option value="volvo">Hardware Problem</option>
                    <option value="volvo">Network Problem</option>
               </select>
          </div>
     </div>
     <div class="row mb-3" style="margin-left:203px;">
          <div class="col">
               <button class="btn btn-sm btn-primary" href="#">Search</button>
          </div>
     </div>
     <hr>
     <div class="row">
          <div class="col text-center">
               <h6>Total Data : 1</h6>
          </div>
     </div>
     <div class="row">
          <div class="col scrollTable" style="overflow-x: auto">
               <table id="tableTicketList" class="table table-striped table-hover" style="width:100%">
                    <thead>
                         <tr>
                              <th class="text-nowrap">ID.</th>
                              <th class="text-nowrap">Date</th>
                              <th class="text-nowrap">Name Request</th>
                              <th class="text-nowrap">Name Solved</th>
                              <th class="text-nowrap">Final Status</th>
                              <th class="text-nowrap">Category</th>
                         </tr>
                    </thead>
                    <tbody>
                         <!-- <tr>
                              <td><a href="#" class="">170494</a></td>
                              <td>30/07/2022</td>
                              <td>Lasman</td>
                              <td>Zulvi</td>
                              <td>Close</td>
                              <td> Network Problem</td>
                         </tr> -->
                         <!-- <tr>
                              <td><a href="#" class="">170495</a></td>
                              <td>02/08/2022</td>
                              <td>Tiani</td>
                              <td>Zulvi</td>
                              <td>Close</td>
                              <td> Hardware Problem</td>
                         </tr> -->
                         <tr>
                              <td><a href="#" class="">170496</a></td>
                              <td>02/08/2022</td>
                              <td>Sandy</td>
                              <td>Zulvi</td>
                              <td>Close</td>
                              <td> Software Problem</td>
                         </tr>
                         <!-- <tr>
                              <td><a href="#" class="">170497</a></td>
                              <td>03/08/2022</td>
                              <td>Tiani</td>
                              <td>Zulvi</td>
                              <td>Close</td>
                              <td> Network Problem</td>
                         </tr> -->
                    </tbody>
                    <tfoot>
                         <tr>
                              <th class="text-nowrap">ID.</th>
                              <th class="text-nowrap">Date</th>
                              <th class="text-nowrap">Name Request</th>
                              <th class="text-nowrap">Name Solved</th>
                              <th class="text-nowrap">Final Status</th>
                              <th class="text-nowrap">Category</th>
                              <!-- <th>Opening Date</th>
                        <th>Last Update</th>
                        <th>Plugins-Info-Ext.</th>
                        <th>Requester-Requester</th>
                        <th>Assigned To - Technician</th>
                        <th>Satisfaction Survey - Satisfaction</th>
                        <th>Plugins Info - Ip Address</th>
                        <th>Resolution Date</th>
                        <th>Description</th> -->
                         </tr>
                    </tfoot>
               </table>
          </div>
     </div>
</div>



<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>
<!-- datatable -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>

<script>
     $(document).ready(function() {
          var table = $('#tableTicketList').DataTable({
               lengthChange: false,
               buttons: ['print']
          });

          table.buttons().container()
               .appendTo('#tableTicketList_wrapper .col-md-6:eq(0)');
     });
</script>



<!-- filter datatable -->
<!-- <script>
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#tableTicketList thead tr')
            .clone(true)
            .addClass('filters')
            .appendTo('#tableTicketList thead');

        var table = $('#tableTicketList').DataTable({
            orderCellsTop: true,
            fixedHeader: true,
            initComplete: function() {
                var api = this.api();

                // For each column
                api
                    .columns()
                    .eq(0)
                    .each(function(colIdx) {
                        // Set the header cell to contain the input element
                        var cell = $('.filters th').eq(
                            $(api.column(colIdx).header()).index()
                        );
                        var title = $(cell).text();
                        $(cell).html('<input type="text" placeholder="' + title + '" />');

                        // On every keypress in this input
                        $(
                                'input',
                                $('.filters th').eq($(api.column(colIdx).header()).index())
                            )
                            .off('keyup change')
                            .on('change', function(e) {
                                // Get the search value
                                $(this).attr('title', $(this).val());
                                var regexr = '({search})'; //$(this).parents('th').find('select').val();

                                var cursorPosition = this.selectionStart;
                                // Search the column for that value
                                api
                                    .column(colIdx)
                                    .search(
                                        this.value != '' ?
                                        regexr.replace('{search}', '(((' + this.value + ')))') :
                                        '',
                                        this.value != '',
                                        this.value == ''
                                    )
                                    .draw();
                            })
                            .on('keyup', function(e) {
                                e.stopPropagation();

                                $(this).trigger('change');
                                $(this)
                                    .focus()[0]
                                    .setSelectionRange(cursorPosition, cursorPosition);
                            });
                    });
            },
        });
    });
</script> -->


<?= $this->endSection(); ?>
// akhir java skript