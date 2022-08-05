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
                <td scope="row"><a href="/Ticket/list" style="text-decoration:none">New</a></td>
                <td scope="row" class="text-end">0</td>
            </tr>
            <tr>
                <td scope="row"><a href="" style="text-decoration:none">Approval</a></td>
                <td scope="row" class="text-end">0</td>
            </tr>
            <tr>
                <td scope="row"><a href="" style="text-decoration:none">Pendding</a></td>
                <td scope="row" class="text-end">0</td>
            </tr>
            <tr>
                <td scope="row"><a href="" style="text-decoration:none">Solved</a></td>
                <td scope="row" class="text-end">0</td>
            </tr>
            <tr>
                <td scope="row"><a href="" style="text-decoration:none">Closed</a></td>
                <td scope="row" class="text-end">1</td>
            </tr>
            <tr>
                <td scope="row"><a href="" style="text-decoration:none">Deleted</a></td>
                <td scope="row" class="text-end">0</td>
            </tr>
            <tr>
                <td scope="row"><a href="" style="text-decoration:none">History</a></td>
                <td scope="row" class="text-end">1</td>
            </tr>

        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
// akhir java skript