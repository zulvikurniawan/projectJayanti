<?php foreach ($chat as $c) : ?>

<?php
     if ($c['pengirim_account_id'] == session()->get('user')['id_account']) {
          $bgchat = "cardPengirim";
          $conten = "";
     } else {
          $bgchat = "cardPenerima";
          $conten = "justify-content-end";
     }
     ?>

<div class="row <?= $conten; ?>">
     <div class="col-8">
          <div class="card mb-3 <?= $bgchat; ?>">
               <div class="row g-0">
                    <div class="col ">
                         <div class="card-body">
                              <h5 class="card-title"><?= $c['nama']; ?></h5>
                              <p class="card-text"><?= $c['isi']; ?></p>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<?php endforeach; ?>