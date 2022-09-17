<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card cardAkun">
                <div class="row">
                    <div class="col text-center mt-2">
                        <h2>Detail Account</h2>
                        <hr>
                    </div>
                </div>
<<<<<<< HEAD
                <div class="row g-0 justify-content-center">
                    <!-- <div class="col-md-4 my-auto">
                        <img src="" class="img-fluid rounded-start" alt="fotoProfil">
                    </div> -->
=======
                <div class="row g-0">
                    <div class="col-md-4 my-auto">
                        <img src="/img/<?= $admin['foto_profil']; ?>" class="img-fluid rounded-start" alt="fotoProfil">
                    </div>
>>>>>>> parent of 5ef7aa3 (update jayanti selesai)
                    <div class="col-md-8">
                        <div class="card-body">
                            <table class="table">
                                <tr class="fs-5 fw-bold">
                                    <td>Nama</td>
                                    <td>: </td>
                                    <td><?= $admin['nama']; ?></td>
                                </tr>
                                <tr class="fs-5 fw-bold">
                                    <td>ID</td>
                                    <td>: </td>
                                    <td><?= $admin['nik']; ?></td>
                                </tr>
                                <tr>
                                    <td>Departement</td>
                                    <td>: </td>
                                    <td>Dummy</td>
                                </tr>
                                <tr>
                                    <td>Division</td>
                                    <td>: </td>
                                    <td>Dummy</td>
                                </tr>
                                <tr>
                                    <td>Leader</td>
                                    <td>: </td>
                                    <td>Dummy</td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>: </td>
                                    <td><?= $admin['password']; ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Klamin</td>
                                    <td>: </td>
                                    <td><?= $admin['jenis_kelamin']; ?></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>: </td>
                                    <td><?= $admin['tempat_lahir']; ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>: </td>
                                    <td><?= $admin['tanggal_lahir']; ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: </td>
                                    <td><?= $admin['email']; ?></td>
                                </tr>
                                <tr>
                                    <td>No. HP</td>
                                    <td>: </td>
                                    <td><?= $admin['nomor_hp']; ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Bergabung</td>
                                    <td>: </td>
                                    <td><?= $admin['tanggal_bergabung']; ?></td>
                                </tr>
                            </table>
                            <a href="/Admin" class="btn btn-secondary">Back</a>
                            <a href="#" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
// akhir java skript