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

                <td scope="col">ID.</td>
                <td scope="col"></td>
                <td scope="col">Status</td>
                <td scope="col">Followups-Date</td>
                <td scope="col">Opening Date</td>
                <td scope="col">Last Update</td>
                <td scope="col">Priority</td>
                <td scope="col">Plugins-Info-Ext.</td>
                <td scope="col">Requester-Requester</td>
                <td scope="col">Assigned To - Technician</td>
                <td scope="col">Satisfaction Survey - Satisfaction</td>
                <td scope="col">Plugins Info - Ip Address</td>
                <td scope="col">Category</td>
                <td scope="col">Resolution Date</td>
                <td scope="col">Description</td>

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