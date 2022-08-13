<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container bg-light mt-3">
     <div class="row">
          <div class="col text-center">
               <h3 class="mt-2">Add Account</h3>
          </div>
     </div>
     <hr>
     <form action="/admin/save" method="post" name="myForm">
          <?= csrf_field(); ?>
          <input type="hidden" id="subaction" name="subaction" value="">
          <div class="row justify-content-center">
               <div class="col-5">
                    <div class="mb-3">
                         <label for="nama" class="form-label">Nama</label>
                         <input type="text"
                              class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama"
                              name="nama" placeholder="Input Nama" autofocus value="<?= old('nama'); ?>">
                         <div class="invalid-feedback">
                              <?= $validation->getError('nama'); ?>
                         </div>
                    </div>
                    <div class="mb-3">
                         <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                         <input
                              class="form-check-input  <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>"
                              type="radio" name="jenis_kelamin" id="jenis_kelamin" value="" hidden checked
                              <?php (old('jenis_kelamin') == '') ? 'checked' : ''; ?>>
                         <div class="form-check">
                              <input
                                   class="form-check-input  <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>"
                                   type="radio" name="jenis_kelamin" id="jenis_kelamin" value="l"
                                   <?php (old('jenis_kelamin') == 'l') ? 'checked' : ''; ?>>
                              <label class="form-check-label" for="jenis_kelamin">
                                   Laki-laki
                              </label>
                         </div>
                         <div class="form-check">
                              <input
                                   class="form-check-input  <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>"
                                   type="radio" name="jenis_kelamin" id="jenis_kelamin" value="p"
                                   <?php (old('jenis_kelamin') == 'p') ? 'checked' : ''; ?>>
                              <label class="form-check-label" for="jenis_kelamin">
                                   Perempuan
                              </label>

                         </div>
                         <div class="invalid-feedback">
                              <?= $validation->getError('jenis_kelamin'); ?>
                         </div>
                    </div>

                    <div class="mb-3">
                         <label for="divisi" class="form-label">Divisi</label>
                         <select id="divisi" name="divisi"
                              class="custom-select form-control <?= ($validation->hasError('divisi')) ? 'is-invalid' : ''; ?>"
                              onchange="ubahDivisi();">
                              <option value="" selected hidden>Open this select menu</option>
                              <?php foreach ($divisi as $d) : ?>
                              <option value="<?= $d['id_jabatan']; ?>" <?= set_select('divisi', $d['id_jabatan']) ?>>
                                   <?= $d['nama']; ?></option>
                              <?php endforeach; ?>
                         </select>
                         <div class="invalid-feedback">
                              <?= $validation->getError('divisi'); ?>
                         </div>
                    </div>
                    <div class="mb-3">
                         <label for="jabatan" class="form-label">jabatan</label>
                         <select id="jabatan" name="jabatan"
                              class="custom-select form-control <?= ($validation->hasError('jabatan')) ? 'is-invalid' : ''; ?>">
                              <option value="" selected hidden>Open this select menu</option>
                              <?php foreach ($jabatan as $d) : ?>
                              <option value="<?= $d['id_jabatan']; ?>" <?= set_select('jabatan', $d['id_jabatan']) ?>>
                                   <?= $d['nama']; ?></option>
                              <?php endforeach; ?>
                         </select>
                         <div class="invalid-feedback">
                              <?= $validation->getError('jabatan'); ?>
                         </div>
                    </div>
                    <div class="mb-3">
                         <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                         <input type="text"
                              class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>"
                              id="tempat_lahir" name="tempat_lahir" placeholder="Input Tempat Lahir"
                              value="<?= old('tempat_lahir'); ?>">
                         <div class="invalid-feedback">
                              <?= $validation->getError('tempat_lahir'); ?>
                         </div>
                    </div>
                    <div class="mb-3">
                         <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                         <input type="date"
                              class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : ''; ?>"
                              id="tanggal_lahir" name="tanggal_lahir" placeholder="Input Tanggal Lahir"
                              value="<?= old('tanggal_lahir'); ?>">
                         <div class="invalid-feedback">
                              <?= $validation->getError('tanggal_lahir'); ?>
                         </div>
                    </div>
                    <div class="mb-3">
                         <label for="email" class="form-label">Email</label>
                         <input type="email"
                              class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>"
                              id="email" name="email" placeholder="Input Email" value="<?= old('email'); ?>">
                         <div class="invalid-feedback">
                              <?= $validation->getError('email'); ?>
                         </div>
                    </div>
                    <div class="mb-3">
                         <label for="nomor_hp" class="form-label">Nomor Hp</label>
                         <input type="text"
                              class="form-control <?= ($validation->hasError('nomor_hp')) ? 'is-invalid' : ''; ?>"
                              id="nomor_hp" name="nomor_hp" placeholder="Input nomor Hp"
                              value="<?= old('nomor_hp'); ?>">
                         <div class="invalid-feedback">
                              <?= $validation->getError('nomor_hp'); ?>
                         </div>
                    </div>
                    <div class="mb-3">
                         <label for="tanggal_bergabung" class="form-label">Tanggal Bergabung</label>
                         <input type="date"
                              class="form-control <?= ($validation->hasError('tanggal_bergabung')) ? 'is-invalid' : ''; ?>"
                              id="tanggal_bergabung" name="tanggal_bergabung" placeholder="Input Tanggal Bergabung"
                              value="<?= old('tanggal_bergabung'); ?>">
                         <div class="invalid-feedback">
                              <?= $validation->getError('tanggal_bergabung'); ?>
                         </div>
                    </div>
               </div>
          </div>
          <div class="row justify-content-end">
               <div class="col-5 mb-3">
                    <a href="/Admin" type="button" class="btn btn-secondary">Back</a>
                    <button class="btn btn-primary" onclick="simpan()">Save</button>
               </div>
          </div>
     </form>
</div>


<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<script>
function ubahDivisi() {
     document.forms['myForm'].submit();
}

function simpan() {
     document.forms['myForm'].subaction.value = 'simpan';
     document.forms['myForm'].submit();
}
</script>

<?= $this->endSection(); ?>
// akhir java skript