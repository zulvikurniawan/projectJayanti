<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container bg-white mt-3 shadow">
     <div class="row">
          <div class="col text-center">
               <h3>Ticket History</h3>
               <hr>
          </div>
     </div>

     <form action="/Ticket/history" method="post">
          <div class="row mb-2">
               <div class="col-2">
                    <h5 class="mb-3">Status</h5>
                    <h5 class="mb-3">From Date</h5>
                    <h5 class="mb-3">Until Date</h5>
               </div>
               <div class="col-3">
                    <select class="form-select form-select-sm text-center mb-2" aria-label="Default select example"
                         id="status" name="status">
                         <option selected value="">Select Status</option>
                         <option value="new">New</option>
                         <option value="Approve">Approve</option>
                         <option value="Rejected">Rejected</option>
                         <option value="Pending">Pending</option>
                         <option value="Solved">Solved</option>
                         <option value="Closed">Closed</option>
                         <option value="Deleted">Deleted</option>
                    </select>
                    <input class="form-control form-control-sm mb-2" type="date" name="fromDate">
                    <input class="form-control form-control-sm" type="date" name="toDate">
               </div>
          </div>
          <div class="row mb-3" style="margin-left:203px;">
               <div class="col">
                    <button class="btn btn-sm btn-primary" href="#">Search</button>
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

                              <!-- detail ticket -->
                              <!-- <th class="text-nowrap">Opening Date</th>
                        <th class="text-nowrap">Last Update</th>
                        <th class="text-nowrap">Plugins-Info-Ext.</th>
                        <th class="text-nowrap">Requester-Requester</th>
                        <th class="text-nowrap">Assigned To - Technician</th>
                        <th class="text-nowrap">Satisfaction Survey - Satisfaction</th>
                        <th class="text-nowrap">Plugins Info - Ip Address</th>
                        <th class="text-nowrap">Resolution Date</th>
                        <th class="text-nowrap">Description</th> -->
                         </tr>
                    </thead>
                    <tbody>
                         <tr>
                              <?php foreach ($ticket as $t) : ?>
                         <tr>
                              <td><?= $t['id_ticket']; ?></td>
                              <td><?= $t['created_at']; ?></td>
                              <td><?= $t['status']; ?></td>
                              <td><?= $t['priority']; ?></td>
                              <td><?= $t['category']; ?></td>
                              <td><?= $t['title']; ?></td>
                              <td><a href="/ticket/detailhistory/<?= $t['id_ticket']; ?>"
                                        class="btn btn-sm btn-warning">Detail</a></td>
                         </tr>
                         <?php endforeach; ?>
                         </tr>
                    </tbody>
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

<script>
$(document).ready(function() {
     $('#tableTicketList').DataTable({
          lengthChange: false,
     });
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