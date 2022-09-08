<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container bg-light mt-3">
     <div class="row">
          <div class="col text-center">
               <h3 class="mt-2">Add Account</h3>
               <?php if (session()->getFlashdata('success')) : ?>
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('success'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
               <?php endif; ?>
               <?php if (session()->getFlashdata('failed')) : ?>
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('failed'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
               <?php endif; ?>
          </div>
     </div>
     <hr>
     <form action="/Ticket/emailSend" method="post" name="myForm">
          <?= csrf_field(); ?>
          <!-- <input type="hidden" id="subaction" name="subaction" value=""> -->
          <div class="row justify-content-center">
               <div class="form-group">
                    <label for="email_tujuan">Email address</label>
                    <input type="email" class="form-control" id="email_tujuan" name="email_tujuan"
                         placeholder="Enter email">
               </div>
               <div class="form-group">
                    <label for="subject">Subject</label>
                    <input class="form-control" type="text" name="subject" placeholder="Default input">
               </div>
               <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <input class="form-control" type="text" name="pesan" placeholder="Default input">
               </div>
          </div>
          <div class="row justify-content-end">
               <div class="col-5 mb-3">
                    <button class="btn btn-primary">Send</button>
               </div>
          </div>
     </form>
</div>


<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<script>
</script>

<?= $this->endSection(); ?>
// akhir java skript