<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container bg-white mt-3 shadow">
    <form action="" method="post">
        <table class="table table-sm">
            <tbody>
                <tr>
                    <th scope="row">Status</th>
                    <td>:</td>
                    <td>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Default</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Priority</th>
                    <td>:</td>
                    <td>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Default</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Category</th>
                    <td>:</td>
                    <td>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Default</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary">Search</button>
    </form>
</div>
<div class="container-fluid bg-white mt-3 shadow">
    <table class="table table-bordered tableAdmin ">
        <thead class="table-light text-center">
            <tr>
                <th scope="col">ID.</th>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Followups-Date</th>
                <th scope="col">Opening Date</th>
                <th scope="col">Last Update</th>
                <th scope="col">Priority</th>
                <th scope="col">Plugins-Info-Ext.</th>
                <th scope="col">Requester-Requester</th>
                <th scope="col">Assigned To - Technician</th>
                <th scope="col">Satisfaction Survey - Satisfaction</th>
                <th scope="col">Plugins Info - Ip Address</th>
                <th scope="col">Category</th>
                <th scope="col">Resolution Date</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td scope="col">Dummy</td>
                <td scope="col">Dummy</td>
                <td scope="col">Dummy</td>
                <td scope="col">Dummy</td>
                <td scope="col">Dummy</td>
                <td scope="col">Dummy</td>
                <td scope="col">Dummy</td>
                <td scope="col">Dummy</td>
                <td scope="col">Dummy</td>
                <td scope="col">Dummy</td>
                <td scope="col">Dummy</td>
                <td scope="col">Dummy</td>
                <td scope="col">Dummy</td>
                <td scope="col">Dummy</td>
                <td scope="col">Dummy</td>
            </tr>
        </tbody>
        <tfoot class="table-light text-center">
            <tr>
                <th scope="col">ID.</th>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Followups-Date</th>
                <th scope="col">Opening Date</th>
                <th scope="col">Last Update</th>
                <th scope="col">Priority</th>
                <th scope="col">Plugins-Info-Ext.</th>
                <th scope="col">Requester-Requester</th>
                <th scope="col">Assigned To - Technician</th>
                <th scope="col">Satisfaction Survey - Satisfaction</th>
                <th scope="col">Plugins Info - Ip Address</th>
                <th scope="col">Category</th>
                <th scope="col">Resolution Date</th>
                <th scope="col">Description</th>
            </tr>
        </tfoot>
    </table>
</div>

<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
// akhir java skript