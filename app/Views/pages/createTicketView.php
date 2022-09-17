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

     <form action="/Ticket/save" method="post" id="myForm">
          <?= csrf_field(); ?>
          <input type="hidden" id="subaction" name="subaction" value="">
          <div class="row mb-2">
               <label for="type" class="col-sm-4 col-form-label">Type</label>
               <div class="col-3">
                    <select class="form-select form-select-sm text-center" aria-label="Default select example" id="type"
                         name="type">
                         <option hidden selected>Select Type</option>
                         <option value="Request" <?= set_select('type', "Request") ?>>Request</option>
                         <option value="insident" <?= set_select('type', "insident") ?>>insident</option>
                    </select>
               </div>
          </div>
          <div class="row mb-2">
               <label for="category" class="col-sm-4 col-form-label">Category</label>
               <div class="col-3">
                    <select class="form-select form-select-sm text-center" aria-label="Default select example"
                         id="category" name="category">
                         <option hidden selected>Select Category</option>
                         <option value="Network Problem" <?= set_select('category', "Network Problem") ?>>Network
                              Problem</option>
                         <option value="Hardware Problem" <?= set_select('category', "Hardware Problem") ?>>Hardware
                              Problem</option>
                         <option value="Software Problem" <?= set_select('category', "Software Problem") ?>>Software
                              Problem</option>
                    </select>
               </div>
          </div>
          <div class="row mb-4">
               <label for="urgentcy" class="col-sm-4 col-form-label">Urgentcy</label>
               <div class="col-3">
                    <select class="form-select form-select-sm text-center" aria-label="Default select example"
                         id="urgentcy" name="urgentcy">
                         <option hidden selected>Select Urgentcy</option>
                         <option value="low" <?= set_select('urgentcy', "low") ?>>Low</option>
                         <option value="medium" <?= set_select('urgentcy', "medium") ?>>Medium</option>
                         <option value="high" <?= set_select('urgentcy', "High") ?>>High</option>
                    </select>
               </div>
          </div>
          <hr>
          <div class="row mb-2">
               <label for="informMeAboutTheActionTaken" class="col-sm-4 col-form-label">inform me about the action taken
                    :</label>
               <div class="col-3">
               </div>
          </div>
          <div class="row mb-2">
               <label for="emailFollowup" class="col-sm-4 col-form-label">Email Followup</label>
               <div class="col-3">
                    <select class="form-select form-select-sm text-center" name="emailFollupDropdown"
                         id="emailFollupDropdown" onchange="emailFollup();" aria-label="Default select example">
                         <option value="1" <?= set_select('emailFollupDropdown', "1") ?>>Yes</option>
                         <option value="2" <?= set_select('emailFollupDropdown', "2") ?>>No</option>
                    </select>
               </div>
          </div>
          <div class="row mb-4">
               <label for="email-followup" class="col-sm-4 col-form-label">Email</label>
               <div class="col-3">
                    <input type="email" class="form-control form-control-sm" id="email-followup">
               </div>
          </div>
          <hr>

          <div class=" row mb-2">
               <label for="assosiatedElements" class="col-sm-4 col-form-label">Assosiated Elements :</label>
               <div class="col-3">
               </div>
          </div>
          <div class="row mb-2">
               <label for="my_device" class="col-sm-4 col-form-label">My Devices</label>
               <div class="col-3">
                    <select class="form-select form-select-sm text-center" aria-label="Default select example"
                         id="my_device" name="my_device">
                         <option hidden selected>Select Devices</option>
                         <option value="monitor" <?= set_select('my_device', "monitor") ?>>Monitor</option>
                         <option value="computer" <?= set_select('my_device', "computer") ?>>Computer</option>
                         <option value="laptop" <?= set_select('my_device', "laptop") ?>>Laptop</option>
                    </select>
               </div>
               <!-- <div class="col-1">
                <button type="button" class="btn btn-warning btn-sm">Add</button>
            </div> -->
          </div>
          <div class="row mb-4">
               <label for="location" class="col-sm-4 col-form-label">Location</label>
               <div class="col-3">
                    <select class="form-select form-select-sm text-center" aria-label="Default select example"
                         id="location" name="location">
                         <option hidden selected>Select Location</option>
                         <option <?= set_select('location', "production_A") ?> value="production_A">Production A
                         </option>
                         <option <?= set_select('location', "production_B") ?> value="production_B">Production B
                         </option>
                         <option <?= set_select('location', "office_development") ?> value="office_development">Office
                              development</option>
                         <option <?= set_select('location', "office_production") ?> value="office_production">Office
                              production</option>
                         <option <?= set_select('location', "building_A") ?> value="building_A">Building A</option>
                         <option <?= set_select('location', "building_B") ?> value="building_B">Building B</option>
                         <option <?= set_select('location', "building_C") ?> value="building_C">Building C</option>
                         <option <?= set_select('location', "building_D") ?> value="building_D">Building D</option>
                         <option <?= set_select('location', "building_E") ?> value="building_E">Building E</option>
                         <option <?= set_select('location', "building_F") ?> value="building_F">Building F</option>
                         <option <?= set_select('location', "hrd/ga") ?> value="hrd/ga">HRD / GA</option>
                         <option <?= set_select('location', "clinic") ?> value="clinic">Clinic</option>
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
               <label for="watcher" class="col-sm-4 col-form-label"><i class="bi bi-person-fill"></i></label>
               <div class="col-3">
                    <select id="headFollup" name="headFollup" class="form-select form-select-sm text-center"
                         onchange="emailFollup3()" aria-label="Default select example">
                         <?php foreach ($head as $h) : ?>
                         <option value="<?= $h['id_account']; ?>" <?= set_select('headFollup', $h['id_account']) ?>>
                              <?= $h['nama']; ?>
                         </option>
                         <?php endforeach; ?>
                    </select>
               </div>
          </div>
          <div class="row mb-2">
               <label for="emailFollowupWatcher" class="col-sm-4 col-form-label">Email Followup</label>
               <div class="col-3">
                    <select class="form-select form-select-sm text-center" aria-label="Default select example"
                         id="emailFollupHead" name="headFollupVal" onchange="emailFollup2()">
                         <option value="1" <?= set_select('headFollupVal', "1") ?>>Yes</option>
                         <option value="2" <?= set_select('headFollupVal', "2") ?>>No</option>
                    </select>
               </div>
          </div>
          <div class="row mb-4">
               <label for="emailWatcher" class="col-sm-4 col-form-label ">Email</label>
               <div class="col-3">
                    <input type="email" class="form-control form-control-sm" value="<?= $emailHead; ?>"
                         id="emailWatcher" name="emailWatcher">
               </div>
          </div>
          <hr>

          <div class="row mb-4">
               <label for="title" class="col-sm-4 col-form-label ">Title</label>
               <div class="col-5">
                    <input type="text" class="form-control form-control-sm" id="title" name="title">
               </div>
          </div>
          <div class="row mb-4">
               <label for="Email" class="col-sm-4 col-form-label ">Description</label>
               <div class="col-5">
                    <div class="form-floating">
                         <textarea class="form-control" placeholder="Leave a comment here" id="description"
                              name="description" style="height: 300px"></textarea>
                    </div>
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
          <div class="row mb-4 justify-content-center">
               <div class="col-sm-3 d-inline-flex">
                    <label for="Email" class="col-sm-3 col-form-label fw-bold text-end me-3">IP Addres</label>
                    <input type="text" class="form-control form-control-sm" id="ip" name="ip">
               </div>
               <div class="col-sm-3 d-inline-flex">
                    <label for="Email" class="col-sm-3 col-form-label fw-bold text-end me-3">Ext.</label>
                    <input type="text" class="form-control form-control-sm" id="ext" name="ext">
               </div>
          </div>
          <div class="row">
               <div class="col text-end">
                    <button type="submit" class="btn btn-warning shadow">Submit Massage</button>
               </div>
          </div>
     </form>
</div>
<?= $this->endSection(); ?>


<?= $this->section('javascript'); ?>

<script>
window.onload = function() {
     console.log("etst");
     emailFollup();
     emailFollup2();
}


function emailFollup() {
     if (document.getElementById("emailFollupDropdown").value == 2) {
          document.getElementById("email-followup").style.visibility = "collapse";
     } else {
          document.getElementById("email-followup").style.visibility = "";
     }

}

function emailFollup2() {
     if (document.getElementById("emailFollupHead").value == 2) {
          document.getElementById("emailWatcher").style.visibility = "collapse";
     } else {
          document.getElementById("emailWatcher").style.visibility = "";
     }

}

function emailFollup3() {
     document.getElementById("subaction").value = "headFollup";
     document.getElementById("myForm").submit();
}
</script>

<?= $this->endSection(); ?>
// akhir java skript