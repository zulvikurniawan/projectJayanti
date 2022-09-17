<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container bg-white mt-3 shadow">
     <div class="row">
          <div class="col">
               <h2>Assign Teknisi</h2>
          </div>
     </div>
     <form action="/Ticket/assignSave" method="POST" name="myForm" onsubmit="return validateForm()">
          <input type="hidden" name="id" value="<?= $ticket['id_ticket']; ?>">
          <div class="row mb-3">
               <div class="col-3 d-flex">
                    <label class="fw-bold me-3">Teknisi</label>
                    <select class="form-select form-select-sm text-center" aria-label="Default select example" id="user"
                         name="user">
                         <option hidden selected value="">Select Teknisi</option>
                         <?php foreach ($assignTo as $a) : ?>
                         <option value="<?= $a['id_account']; ?>"><?= $a['nama']; ?></option>
                         <?php endforeach; ?>
                    </select>
               </div>
          </div>
          <div class="row text-end border-bottom border-2 border-dark">
               <div class="col-3 mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/Ticket/assign" type="button" class="btn btn-secondary">Back</a>
               </div>
          </div>
     </form>

     <div class="row pb-2 border-bottom border-1 border-dark my-3">
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
          <label for="uergency" class="col-sm-4 col-form-label">Urgentcy</label>
          <div class="col">
               <label for="uergency" class="col-sm-4 col-form-label"><?= $ticket['urgentcy']; ?></label>
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
</div>
<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>
<script>
function validateForm() {
     let x = document.forms["myForm"]["user"].value;
     if (x == "") {
          alert("Name must be filled out");
          return false;
     }
}
</script>


<?= $this->endSection(); ?>
// akhir java skript