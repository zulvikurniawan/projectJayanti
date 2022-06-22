<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container bg-white mt-3 shadow">
    <table class="table">
        <thead>
            <tr>
                <th scope="row" colspan="2">Create a Ticket +</th>
            </tr>
            <tr>
                <th scope="row">Tickets</th>
                <th scope="row" style="text-align: right;">Number</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"><a href="/Ticket/list">New</a></td>
                <td scope="row" style="text-align: right;">0</td>
            </tr>
            <tr>
                <td scope="row"><a href="">Processing (Assigned)</a></td>
                <td scope="row" style="text-align: right;">0</td>
            </tr>
            <tr>
                <td scope="row"><a href="">Processing (Planned)</a></td>
                <td scope="row" style="text-align: right;">0</td>
            </tr>
            <tr>
                <td scope="row"><a href="">Pendding</a></td>
                <td scope="row" style="text-align: right;">0</td>
            </tr>
            <tr>
                <td scope="row"><a href="">Solved</a></td>
                <td scope="row" style="text-align: right;">0</td>
            </tr>
            <tr>
                <td scope="row"><a href="">Closed</a></td>
                <td scope="row" style="text-align: right;">0</td>
            </tr>
            <tr>
                <td scope="row"><a href="">Deleted</a></td>
                <td scope="row" style="text-align: right;">0</td>
            </tr>

        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
// akhir java skript