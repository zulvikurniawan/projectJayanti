<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container bg-white mt-3 shadow">
     <table class="table">
          <thead>
               <tr>
                    <th scope="row" colspan="2">
                         <h4>Status Ticket</h4>
                    </th>
               </tr>
               <tr>
                    <th scope="row">Tickets</th>
                    <th scope="row" class="text-end">Number</th>
               </tr>
          </thead>
          <tbody>
               <tr>
                    <td scope="row"><a href="/Ticket/Status/New" style="text-decoration:none">New</a></td>
                    <td scope="row" class="text-end">
                         <?= (array_key_exists('NEW', $statusTicket)) ? $statusTicket['NEW'] : '0'; ?>
                    </td>
               </tr>
               <tr>
                    <td scope="row"><a href="/Ticket/Status/approve" style="text-decoration:none">Approve</a></td>
                    <td scope="row" class="text-end">
                         <?= (array_key_exists('APPROVE', $statusTicket)) ? $statusTicket['APPROVE'] : '0'; ?>
                    </td>
               </tr>
               <tr>
                    <td scope="row"><a href="/Ticket/Status/rejected" style="text-decoration:none">Rejected</a></td>
                    <td scope="row" class="text-end">
                         <?= (array_key_exists('REJECTED', $statusTicket)) ? $statusTicket['REJECTED'] : '0'; ?>
                    </td>
               </tr>
               <tr>
                    <td scope="row"><a href="/Ticket/Status/proses" style="text-decoration:none">Proses</a></td>
                    <td scope="row" class="text-end">
                         <?= (array_key_exists('proses', $statusTicket)) ? $statusTicket['proses'] : '0'; ?>
                    </td>
               </tr>
               <tr>
                    <td scope="row"><a href="/Ticket/Status/solved" style="text-decoration:none">Solved</a></td>
                    <td scope="row" class="text-end">
                         <?= (array_key_exists('SOLVED', $statusTicket)) ? $statusTicket['SOLVED'] : '0'; ?>
                    </td>
               </tr>
               <tr>
                    <td scope="row"><a href="/Ticket/Status/closed" style="text-decoration:none">Closed</a></td>
                    <td scope="row" class="text-end">
                         <?= (array_key_exists('CLOSED', $statusTicket)) ? $statusTicket['CLOSED'] : '0'; ?>
                    </td>
               </tr>
               <tr>
                    <td scope="row"><a href="/Ticket/Status/deleted" style="text-decoration:none">Deleted</a></td>
                    <td scope="row" class="text-end">
                         <?= (array_key_exists('DELETED', $statusTicket)) ? $statusTicket['DELETED'] : '0'; ?>
                    </td>
               </tr>
               <tr>
                    <td scope="row"><a href="/Ticket/history" style="text-decoration:none">History</a></td>
                    <td scope="row" class="text-end">
                         <?= (array_key_exists('HISTORY', $statusTicket)) ? $statusTicket['HISTORY'] : '0'; ?>
                    </td>
               </tr>

          </tbody>
     </table>
</div>

<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
// akhir java skript