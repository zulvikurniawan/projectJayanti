<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container bg-white mt-3 shadow">
    <form action="" method="post">
        <div class="row pb-2 border-bottom border-2 border-dark mb-3">
            <div class="col-4">
                <label class="fw-bold">Describe the incident or request</label>
            </div>
            <div class="col-6">
                <label class="fw-bold">( IT Group > PRB )</label>
            </div>
        </div>


        <div class="row mb-2">
            <label for="type" class="col-sm-4 col-form-label">Type</label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" aria-label="Default select example">
                    <option hidden selected>Request</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <label for="category" class="col-sm-4 col-form-label">Category</label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" aria-label="Default select example">
                    <option hidden selected>Network Problem</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="row mb-4">
            <label for="uergency" class="col-sm-4 col-form-label">Urgency</label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" aria-label="Default select example">
                    <option hidden selected>Medium</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <hr>

        <div class="row mb-2">
            <label for="informMeAboutTheActionTaken" class="col-sm-4 col-form-label">inform me about the action taken :</label>
            <div class="col-3">
            </div>
        </div>
        <div class="row mb-2">
            <label for="emailFollowup" class="col-sm-4 col-form-label">Email Followup</label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" aria-label="Default select example">
                    <option selected value="1">Yes</option>
                    <option value="2">No</option>
                </select>
            </div>
        </div>
        <div class="row mb-4">
            <label for="Email" class="col-sm-4 col-form-label ">Email</label>
            <div class="col-3">
                <input type="text" class="form-control form-control-sm" id="email">
            </div>
        </div>
        <hr>

        <div class="row mb-2">
            <label for="assosiatedElements" class="col-sm-4 col-form-label">Assosiated Elements :</label>
            <div class="col-3">
            </div>
        </div>
        <div class="row mb-2">
            <label for="myDevices" class="col-sm-4 col-form-label">My Devices</label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" aria-label="Default select example">
                    <option hidden selected>Medium</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-1">
                <button type="submit" class="btn btn-warning btn-sm">Add</button>
            </div>
        </div>
        <div class="row mb-4">
            <label for="location" class="col-sm-4 col-form-label">Location</label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" aria-label="Default select example">
                    <option hidden selected>-----</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <hr>

        <div class="row mb-2">
            <label for="watcher" class="col-sm-4 col-form-label">Watcher :</label>
            <div class="col-3">
            </div>
        </div>
        <div class="row mb-2">
            <label for="emailFollowup" class="col-sm-4 col-form-label"><i class="bi bi-person-fill"></i></label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" aria-label="Default select example">
                    <option selected value="1">Yes</option>
                    <option value="2">No</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <label for="emailFollowup" class="col-sm-4 col-form-label">Email Followup</label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" aria-label="Default select example">
                    <option selected value="1">Yes</option>
                    <option value="2">No</option>
                </select>
            </div>
        </div>
        <div class="row mb-4">
            <label for="Email" class="col-sm-4 col-form-label ">Email</label>
            <div class="col-3">
                <input type="text" class="form-control form-control-sm" id="email">
            </div>
        </div>
        <hr>

        <div class="row mb-4">
            <label for="Email" class="col-sm-4 col-form-label ">Title</label>
            <div class="col-5">
                <input type="text" class="form-control form-control-sm" id="email">
            </div>
        </div>
        <div class="row mb-4">
            <label for="Email" class="col-sm-4 col-form-label ">Description</label>
            <div class="col-5">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px"></textarea>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-4"></div>
            <div class="col-5">
                <div class="mb-3">
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <label for="Email" class="col-sm-2 col-form-label fw-bold text-end">IP Addres</label>
            <div class="col-sm-2">
                <input type="text" class="form-control form-control-sm" id="email">
            </div>
            <label for="Email" class="col-sm-2 col-form-label fw-bold text-end">Ext.</label>
            <div class="col-sm-2">
                <input type="text" class="form-control form-control-sm" id="email">
            </div>
        </div>
        <div class="row mb-4 justify-content-center">
            <div class="col-4"></div>
            <div class="col-2">
                <button type="button" class="btn btn-sm btn-warning">Submit Massage</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
// akhir java skript