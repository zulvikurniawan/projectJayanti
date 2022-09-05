<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container bg-white mt-3 shadow">
     <div class="row">
          <div class="col-1">
               <i class="bi bi-card-list"></i>
          </div>
          <div class="col-10 text-center fw-bold"><i class="bi bi-circle-fill"></i>
               Install ulang corel draw x6 (IT Group > PRB )
          </div>
          <div class="col-1">1/1</div>
     </div>
     <hr>

     <div class="row">
          <div class="col">
               <div class="row">
                    <div class="col">
                         <div class="row pe-3 mb-3">
                              <div class="col border-bottom">
                                   <label for="" class="fw-bold">Action Historical :</label>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col overflow-auto" style="height: 15rem;">
                                   <div class="chat">

                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="row mb-3">
                    <div class="col">
                         <div class="form-floating">
                              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 80px"></textarea>
                              <label for="floatingTextarea2">Message</label>
                         </div>
                    </div>
               </div>
               <div class="row justify-content-end">
                    <div class="col">
                         <form action="/Ticket/done" method="post">
                              <input type="hidden" name="id_ticket" value="<?= $ticket['id_ticket']; ?>">
                              <button type="submit" class="btn btn-success">Solved</button>
                         </form>
                    </div>
                    <div class="col text-end">
                         <form action="/Ticket/send" method="post">
                              <input type="hidden" name="id_ticket" value="<?= $ticket['id_ticket']; ?>">
                              <button type="submit" class="btn btn-warning">Send<i class="bi bi-send ms-4"></i></button>
                              <a class="btn btn-secondary" href="/Ticket/detailsolved/<?= $ticket['id_ticket']; ?>" role="button">Back</a>
                         </form>
                    </div>
               </div>
          </div>
     </div>

</div>

<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<script>
     setInterval(displayHello, 1000);

     function displayHello() {
          document.getElementById("demo").innerHTML += "Hello";
     }
</script>
<?= $this->endSection(); ?>
// akhir java skript