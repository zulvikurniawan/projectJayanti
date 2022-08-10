<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container bg-white mt-3 shadow">
     <div class="row">
          <div class="col text-center">
               <h3>Ticket List</h3>
               <hr>
               <?php if (session()->getFlashdata('tambahData')) : ?>
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('tambahData'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
               <?php endif; ?>
               <?php if (session()->getFlashdata('hapusData')) : ?>
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('hapusData'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
               <?php endif; ?>
          </div>
     </div>
     <div class="row mb-2">
          <div class="col-2">
               <h5 class="mb-3">Status</h5>
               <h5 class="mb-3">Priority</h5>
               <h5 class=>Category</h5>
          </div>
          <div class="col-3">
               <select class="form-select form-select-sm mb-2" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
               </select>
               <select class="form-select form-select-sm mb-2" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
               </select>
               <select class="form-select form-select-sm" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
               </select>
          </div>
     </div>
     <div class="row mb-3" style="margin-left:203px;">
          <div class="col">
               <a class="btn btn-sm btn-primary" href="#">Submit</a>
          </div>
     </div>
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
                         <?php foreach ($ticket as $t) : ?>
                         <tr>
                              <td><?= $t['id_ticket']; ?></td>
                              <td><?= $t['created_at']; ?></td>
                              <td><?= $t['status']; ?></td>
                              <td><?= $t['priority']; ?></td>
                              <td><?= $t['category']; ?></td>
                              <td><?= $t['title']; ?></td>
                              <td><a href="/ticket/detail/<?= $t['id_ticket']; ?>"
                                        class="btn btn-sm btn-warning">Detail</a></td>
                              <!-- <td>dummy</td>
                        <td>dummy</td>
                        <td>dummy</td>
                        <td>dummy</td>
                        <td>dummy</td>
                        <td>dummy</td>
                        <td>dummy</td>
                        <td>dummy</td>
                        <td>dummy</td> -->
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