<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">

        </div>
    </div>

</div>

<form action="/Ticket/Save" method="post">
    <?= csrf_field(); ?>
    <div class="container bg-white mt-3 shadow">
        <div class="row pb-2 border-bottom border-2 border-dark mb-3">
            <div class="col-4">
                <label class="fw-bold">Describe the incident or request</label>
            </div>
            <div class="col-6">
                <label class="fw-bold">( IT Group > PRB )</label>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php if (session()->getFlashdata('messageSuccsess')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('messageSuccsess'); ?>
                    </div>
                <?php endif ?>
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-sm-4 col-form-label">Type</label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" name="type" id="type">
                    <option hidden selected>Request</option>
                    <option value="one">One</option>
                    <option value="two">Two</option>
                    <option value="three">Three</option>
                </select>
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-sm-4 col-form-label">Category</label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" name="category" id="category">
                    <option hidden selected>Network Problem</option>
                    <option value="one">One</option>
                    <option value="two">Two</option>
                    <option value="three">Three</option>
                </select>
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-sm-4 col-form-label">Priority</label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" name="priority" id="priority">
                    <option hidden selected>Default</option>
                    <option value="one">One</option>
                    <option value="two">Two</option>
                    <option value="three">Three</option>
                </select>
            </div>
        </div>

        <div class="row mb-4">
            <label class="col-sm-4 col-form-label">Urgency</label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" id="urgency" name="urgency" disabled>
                    <option hidden selected>Medium</option>
                    <option value="one">One</option>
                    <option value="two">Two</option>
                    <option value="three">Three</option>
                </select>
            </div>
        </div>
        <hr>

        <div class="row mb-2">
            <label class="col-sm-4 col-form-label">inform me about the action taken
                :</label>
            <div class="col-3">
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-sm-4 col-form-label">Email Followup</label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" id="followup" name="followup" onchange="select_followup()">
                    <option selected value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
            </div>
        </div>

        <div class="row mb-4">
            <label class="col-sm-4 col-form-label ">Email</label>
            <div class="col-3">
                <input type="email" class="form-control form-control-sm" id="email_followup" name="email_followup" disabled>
            </div>
        </div>
        <hr>

        <div class="row mb-2">
            <label class="col-sm-4 col-form-label">Assosiated Elements :</label>
            <div class="col-3">
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-sm-4 col-form-label">My Devices</label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" name="my_device" id="my_device">
                    <option hidden selected>-----</option>
                    <option value="one">One</option>
                    <option value="two">Two</option>
                    <option value="three">Three</option>
                </select>
            </div>
            <!-- <div class="col-1">
                <button type="submit" class="btn btn-warning btn-sm">Add</button>
            </div> -->
        </div>

        <div class="row mb-4">
            <label class="col-sm-4 col-form-label">Location</label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" name="location" id="location">
                    <option hidden selected>-----</option>
                    <option value="one">One</option>
                    <option value="two">Two</option>
                    <option value="three">Three</option>
                </select>
            </div>
        </div>
        <hr>

        <div class="row mb-2">
            <label class="col-sm-4 col-form-label">Watcher :</label>
            <div class="col-3">
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-sm-4 col-form-label"><i class="bi bi-person-fill"></i></label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" id="watcher" name="watcher" onchange="select_watcher()">
                    <option selected value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-sm-4 col-form-label">Email Followup</label>
            <div class="col-3">
                <select class="form-select form-select-sm text-center" id="select_email_wathcer" name="select_email_wathcer" onchange="select_email()" disabled>
                    <option selected value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
            </div>
        </div>

        <div class="row mb-4">
            <label class="col-sm-4 col-form-label ">Email</label>
            <div class="col-3">
                <input type="email" class="form-control form-control-sm" name="email_watcher" id="email_watcher" disabled>
            </div>
        </div>
        <hr>

        <div class="row mb-4">
            <label class="col-sm-4 col-form-label ">Title</label>
            <div class="col-5">
                <input type="text" class="form-control form-control-sm" name="title" id="title">
            </div>
        </div>

        <div class="row mb-4">
            <label class="col-sm-4 col-form-label ">Description</label>
            <div class="col-5">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="description" id="description" style="height: 300px"></textarea>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-sm-4"></div>
            <div class="col-5">
                <div class="mb-3">
                    <input class="form-control" type="file" id="inputfile" name="inputfile">
                </div>
            </div>
        </div>

        <div class="row mb-4 d-flex justify-content-start">
            <label class="col-sm-3 col-form-label fw-bold text-end">IP Addres</label>
            <div class="col-sm-2">
                <input type="text" class="form-control form-control-sm" id="ip" name="ip">
            </div>
            <label class="col-sm-1 col-form-label fw-bold text-end">Ext.</label>
            <div class="col-sm-2">
                <input type="text" class="form-control form-control-sm" id="ext" name="ext">
            </div>
        </div>

        <div class=" row mb-4 justify-content-evenly">
            <div class="col-3"></div>
            <div class="col-2">
                <button type="submit" class="btn btn-sm btn-warning" id="submit" name="submit" onclick="kirim()">Submit Massage</button>
            </div>
        </div>
    </div>
</form>
<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>
<script>
    //email followup
    function select_followup() {
        //jika value select no, maka disable = true
        if (document.getElementById("followup").value == "no") {
            document.getElementById("email_followup").disabled = true;
            //jika value select yes, maka disabled = false
        } else {
            document.getElementById("email_followup").disabled = false;
        }
    }

    //watcher
    function select_watcher() {
        //jika value select no, maka disable = true
        if (document.getElementById("watcher").value == "no") {
            document.getElementById("select_email_wathcer").disabled = true;
        }
        //jika value select yes, maka disabled = false
        else {
            document.getElementById("select_email_wathcer").disabled = false;
        }
    }

    //email watcher
    function select_email() {
        //jika value select no, maka disable = true
        if (document.getElementById("select_email_wathcer").value == "no") {
            document.getElementById("email_watcher").disabled = true;
        }
        //jika value select yes, maka disabled = false
        else {
            document.getElementById("email_watcher").disabled = false;
        }
    }


    //submit menapilkan urgency
    function kirim() {
        document.getElementById("urgency").disabled = false;
    }
</script>
<?= $this->endSection(); ?>
// akhir java skript