<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container bg-white mt-3 shadow">
     <div class="row">
          <div class="col text-center">
               <h3>Solved List</h3>
               <hr>
               <?php if (session()->getFlashdata('success')) : ?>
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('success'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
               <?php endif; ?>
          </div>
     </div>
     <form action="/Ticket/report" method="post">
          <div class="row mb-2">
               <div class="col-2">
                    <h5 class="mb-3">From Date</h5>
                    <h5 class="mb-3">Until Date</h5>
                    <h5 class="mb-3">Category</h5>
               </div>
               <div class="col-3">
                    <input class="form-control form-control-sm mb-2" type="date" name="fromDate">
                    <input class="form-control form-control-sm mb-2" type="date" name="toDate">
                    <select name="category" id="category" class="form-select">
                         <option value="">All</option>
                         <option value="Software Problem">Software Problem</option>
                         <option value="Hardware Problem">Hardware Problem</option>
                         <option value="Network Problem">Network Problem</option>
                    </select>
               </div>
          </div>
          <div class="row mb-3" style="margin-left:203px;">
               <div class="col">
                    <button class="btn btn-sm btn-primary">Search</button>
               </div>
          </div>
     </form>
     <hr>
     <div class="row">
          <div class="col scrollTable" style="overflow-x: auto">
               <table id="tableTicketList" class="table table-striped table-hover" style="width:100%">
                    <thead>
                         <tr>
                              <th class="text-nowrap">ID.</th>
                              <th class="text-nowrap">Date</th>
                              <th class="text-nowrap">Status</th>
                              <th class="text-nowrap">Priority</th>
                              <th class="text-nowrap">Category</th>
                              <th class="text-nowrap">Title</th>
                              <th class="text-nowrap">action</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($ticket as $t) : ?>
                         <tr>
                              <td><?= $t['id_ticket']; ?></td>
                              <td><?= $t['created_at']; ?></td>
                              <td><?= $t['status']; ?></td>
                              <td><?= $t['priority']; ?></td>
                              <td><?= $t['category']; ?></td>
                              <td><?= $t['title']; ?></td>
                              <td><a href="/ticket/detailsolved/<?= $t['id_ticket']; ?>"
                                        class="btn btn-sm btn-warning">Detail</a></td>

                         </tr>
                         <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                         <tr>
                              <th class="text-nowrap">ID.</th>
                              <th class="text-nowrap">Date</th>
                              <th class="text-nowrap">Status</th>
                              <th class="text-nowrap">Priority</th>
                              <th class="text-nowrap">Category</th>
                              <th class="text-nowrap">Title</th>
                              <th class="text-nowrap">action</th>

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