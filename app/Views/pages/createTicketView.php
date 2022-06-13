<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container bg-white mt-3">
    <div class="row pt-3">
        <div class="col-4">
            <label class="fw-bold">Describe the incident or request</label>
        </div>
        <div class="col">
            <label class="fw-bold">(IT Group > PRB)</label>
        </div>
    </div>
    <hr>
    <div class="row pb-2">
        <label for="type" class="col-sm-2 col-form-label">Type</label>
        <div class="col-3">
            <select class="form-select form-select-sm text-center" aria-label="Default select example">
                <option hidden selected>Request</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
    <div class="row pb-2">
        <label for="category" class="col-sm-2 col-form-label">Category</label>
        <div class="col-3">
            <select class="form-select form-select-sm text-center" aria-label="Default select example">
                <option hidden selected>Network Problem</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
    <div class="row pb-4">
        <label for="uergency" class="col-sm-2 col-form-label">Urgency</label>
        <div class="col-3">
            <select class="form-select form-select-sm text-center" aria-label="Default select example">
                <option hidden selected>Medium</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>

    <div class="row pb-2">
        <label for="uergency" class="col-sm-4 col-form-label">inform me about the action taken :</label>
        <div class="col-3">
        </div>
    </div>
    <div class="row pb-2">
        <label for="uergency" class="col-sm-2 col-form-label">Email Followup</label>
        <div class="col-3">
            <select class="form-select form-select-sm text-center" aria-label="Default select example">
                <option selected value="1">Yes</option>
                <option value="2">No</option>
            </select>
        </div>
    </div>
    <div class="row pb-2">
        <label for="uergency" class="col-sm-2 col-form-label">Email </label>
        <div class="col-4">
            <input type="text" class="form-control form-control-sm" id="inputPassword">
        </div>
    </div>
    <div class="row pb-2">
        <label for="uergency" class="col-sm-2 col-form-label">Urgency</label>
        <div class="col-3">
            <select class="form-select form-select-sm text-center" aria-label="Default select example">
                <option hidden selected>Medium</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
// akhir java skript