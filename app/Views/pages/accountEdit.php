<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container bg-light mt-3">
    <div class="row">
        <div class="col text-center">
            <h3 class="mt-2">Edit Account</h3>
        </div>
    </div>
    <hr>
    <form action="/Admin/update/<?= $admin['id_account']; ?>" method="post">
        <?= csrf_field(); ?>
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="mb-3">
                    <label for="nik" class="form-label">ID</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" name="nik" placeholder="Input ID" autofocus value="<?= $admin['nik']; ?>" disabled>
                    <div class=" invalid-feedback">
                        <?= $validation->getError('nik'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" placeholder="Input Nama" autofocus value="<?= (old('nama')) ? old('nama') : $admin['nama'] ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Input Password" autofocus value="<?= (old('password')) ? old('password') : $admin['password'] ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('password'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="l">
                        <label class="form-check-label" for="jenis_kelamin">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="p">
                        <label class="form-check-label" for="jenis_kelamin">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" id="tempat_lahir" name="tempat_lahir" placeholder="Input Tempat Lahir" value="<?= (old('tempat_lahir')) ? old('tempat_lahir') : $admin['tempat_lahir'] ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tempat_lahir'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : ''; ?>" id="tanggal_lahir" name="tanggal_lahir" placeholder="Input Tanggal Lahir" value="<?= (old('tanggal_lahir')) ? old('tanggal_lahir') : $admin['tanggal_lahir'] ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tanggal_lahir'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Input Email" value="<?= (old('email')) ? old('email') : $admin['email'] ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('email'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nomor_hp" class="form-label">Nomor Hp</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nomor_hp')) ? 'is-invalid' : ''; ?>" id="nomor_hp" name="nomor_hp" placeholder="Input nomor Hp" value="<?= (old('nomor_hp')) ? old('nomor_hp') : $admin['nomor_hp'] ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nomor_hp'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tanggal_bergabung" class="form-label">Tanggal Bergabung</label>
                    <input type="date" class="form-control <?= ($validation->hasError('tanggal_bergabung')) ? 'is-invalid' : ''; ?>" id="tanggal_bergabung" name="tanggal_bergabung" placeholder="Input Tanggal Bergabung" value="<?= (old('tanggal_bergabung')) ? old('tanggal_bergabung') : $admin['tanggal_bergabung'] ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tanggal_bergabung'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-5 mb-3">
                <a href="/Admin" type="button" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>


<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
// akhir java skript