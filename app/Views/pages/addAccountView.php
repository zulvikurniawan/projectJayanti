<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col text-center">
            <h3 class="mt-2">Add Account</h3>
        </div>
    </div>
    <hr>
    <form action="">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="mb-3">
                    <label for="nik" class="form-label">ID</label>
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Input ID" autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Input Password">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama">
                </div>
                <div class="mb-3">
                    <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin" value="l">
                        <label class="form-check-label" for="jenisKelamin">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin" value="p">
                        <label class="form-check-label" for="jenisKelamin">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Input Tempat Lahir">
                </div>
                <div class="mb-3">
                    <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="Input Tanggal Lahir">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Input Email">
                </div>
                <div class="mb-3">
                    <label for="nomorHp" class="form-label">Nomor Hp</label>
                    <input type="text" class="form-control" id="nomorHp" name="nomorHp" placeholder="Input nomor Hp">
                </div>
                <div class="mb-3">
                    <label for="tanggalBergabung" class="form-label">Tanggal Bergabung</label>
                    <input type="date" class="form-control" id="tanggalBergabung" name="tanggalBergabung" placeholder="Input Tanggal Bergabung">
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-5">
                <a href="/admin" type="button" class="btn btn-secondary">Back</a>
                <a type="submit" class="btn btn-primary">Save</a>
            </div>
        </div>
    </form>
</div>


<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
// akhir java skript