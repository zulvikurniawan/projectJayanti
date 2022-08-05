<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container bg-white mt-3 shadow">
    <div class="row pb-2 border-bottom border-2 border-dark mb-3">
        <div class="col-4">
            <label class="fw-bold">Describe the incident or request</label>
        </div>
        <div class="col-6">
            <label class="fw-bold">( IT Group > PRB )</label>
        </div>
    </div>
    <div class="row mb-2">
        <label for="idTicket" class="col-sm-4 col-form-label">ID Ticket</label>
        <div class="col-3">
            <label for="idTicket" class="col-sm-4 col-form-label"><?= $ticket['id_ticket']; ?></label>
            </select>
        </div>
    </div>
    <div class="row mb-2">
        <label for="type" class="col-sm-4 col-form-label">Type</label>
        <div class="col-3">
            <label for="type" class="col-sm-4 col-form-label"><?= $ticket['type']; ?></label>
            </select>
        </div>
    </div>
    <div class="row mb-2">
        <label for="category" class="col-sm-4 col-form-label">Category</label>
        <div class="col">
            <label for="category" class="col-sm-4 col-form-label"><?= $ticket['category']; ?></label>
        </div>
    </div>
    <div class="row mb-2">
        <label for="uergency" class="col-sm-4 col-form-label">Urgency</label>
        <div class="col">
            <label for="uergency" class="col-sm-4 col-form-label"><?= $ticket['urgency']; ?></label>
        </div>
    </div>
    <div class="row mb-4">
        <label for="priority" class="col-sm-4 col-form-label">Priority</label>
        <div class="col">
            <label for="priority" class="col-sm-4 col-form-label"><?= $ticket['priority']; ?></label>
        </div>
    </div>
    <hr>

    <div class="row mb-2">
        <label for="informMeAboutTheActionTaken" class="col-sm-4 col-form-label">inform me about the action taken
            :</label>
    </div>
    <div class="row mb-2">
        <label for="emailFollowup" class="col-sm-4 col-form-label">Email Followup</label>
        <div class="col">
            <label for="Email" class="col-sm-4 col-form-label"><?= $ticket['email_followup']; ?></label>
        </div>
    </div>
    <hr>

    <div class="row mb-2">
        <label for="assosiatedElements" class="col-sm-4 col-form-label">Assosiated Elements :</label>
        <div class="col">
        </div>
    </div>
    <div class="row mb-2">
        <label for="myDevices" class="col-sm-4 col-form-label">My Devices</label>
        <div class="col">
            <label for="myDevices" class="col-sm-4 col-form-label"><?= $ticket['my_device']; ?></label>
        </div>
    </div>
    <div class="row mb-4">
        <label for="location" class="col-sm-4 col-form-label">Location</label>
        <div class="col">
            <label for="location" class="col-sm-4 col-form-label"><?= $ticket['location']; ?></label>
        </div>
    </div>
    <hr>

    <div class="row mb-2">
        <label for="watcher" class="col-sm-4 col-form-label">Watcher :</label>
    </div>
    <div class="row mb-4">
        <label for="Email" class="col-sm-4 col-form-label">Email Followup</label>
        <div class="col">
            <label for="Email" class="col-sm-4 col-form-label "><?= $ticket['email_watcher']; ?></label>
        </div>
    </div>
    <hr>

    <div class="row mb-4">
        <label for="Email" class="col-sm-4 col-form-label ">Title</label>
        <div class="col">
            <label for="Email" class="col-sm-4 col-form-label "><?= $ticket['title']; ?></label>
        </div>
    </div>
    <div class="row mb-4">
        <label for="Email" class="col-sm-4 col-form-label ">Description</label>
        <div class="col">
            <label for="Email" class="col-sm-4 col-form-label "><?= $ticket['description']; ?></label>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-4"></div>
        <div class="col-5">
            <div class="mb-3">
                <input class="form-control" type="file" id="formFile" hidden>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="Email" class="col-sm-2 col-form-label fw-bold text-end">IP Addres</label>
        <div class="col-sm-2">
            <label for="Email" class="col-sm-2 col-form-label fw-bold text-end"><?= $ticket['ip']; ?></label>
        </div>
        <label for="Email" class="col-sm-2 col-form-label fw-bold text-end">Ext.</label>
        <div class="col">
            <label for="Email" class="col-sm-2 col-form-label fw-bold text-end"><?= $ticket['ext']; ?></label>
        </div>
    </div>
    <div class="row mb-4 text-end me-5">
        <div class="col">
            <a href="/Ticket/list" type="button" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
// akhir java skript