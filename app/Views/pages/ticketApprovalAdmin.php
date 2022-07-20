<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container bg-white mt-3 shadow">
    <form action="/Ticket/Approval" method="post">

        <div class="row py-2 border-bottom">
            <div class="col-1 fw-bold">
                Priority
            </div>
            <div class="col-1">
                :
            </div>
            <div class="col-sm-5">
                <select name="priority" class="form-select" aria-label="Default select example">
                    <option selected>Default</option>
                </select>
            </div>
        </div>
        <div class="row py-2 border-bottom">
            <div class="col-1 fw-bold">
                Category
            </div>
            <div class="col-1">
                :
            </div>
            <div class="col-sm-5">
                <select name="category" class="form-select" aria-label="Default select example">
                    <option selected>Default</option>
                </select>
            </div>
        </div>
        <button type="button" class="btn btn-primary mt-3">Search</button>
    </form>
</div>

<div class="container">
    <?php if (session()->getFlashdata('approval')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('approval'); ?>
        </div>
    <?php endif ?>
</div>

<div class="container bg-white mt-3 shadow">
    <div class="row">
        <div class="col">
            <div class="scrollmenu">
                <table class="table table-bordered tableAdmin table-striped">
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
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($ticket as $ticket) : ?>
                            <tr>
                                <td><?= $ticket['id_ticket']; ?></td>
                                <td><?= $ticket['title']; ?></td>
                                <td><?= $ticket['status']; ?></td>
                                <td>Followups-Date</td>
                                <td>Opening Date</td>
                                <td>Last Update</td>
                                <td><?= $ticket['priority']; ?></td>
                                <td><?= $ticket['ext']; ?></td>
                                <td>Requester-Requester</td>
                                <td>Assigned To - Technician</td>
                                <td>Satisfaction Survey - Satisfaction</td>
                                <td><?= $ticket['ip']; ?></td>
                                <td><?= $ticket['category']; ?></td>
                                <td>Resolution Date</td>
                                <td><?= $ticket['description']; ?></td>
                                <td>
                                    <form action="/Ticket/Update/<?= $ticket['id_ticket']; ?>" method="post">
                                        <input type="text" class="form-control form-control-sm" id="status" name="status" value="Open" hidden>
                                        <button type="submit" class="btn btn-sm btn-warning">Approval</button>
                                    </form>
                                    <form action="/Ticket/Update" method="post">
                                        <button type="submit" class="btn btn-sm btn-warning">reject</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
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
                            <th scope="col">Action</th>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
// akhir java skript