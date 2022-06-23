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
        <div class="col-3">
            <div class="row mb-1">
                <div class="col d-grid">
                    <button type="button" class="btn btn-light btn-sm text-start">
                        Processing Ticket
                        <span class="badge bg-secondary ">1</span>
                    </button>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col d-grid">
                    <button type="button" class="btn btn-secondary btn-sm text-start">
                        Statisfaction
                        <span class="badge bg-light text-secondary "></span>
                    </button>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col d-grid">
                    <button type="button" class="btn btn-secondary btn-sm text-start">
                        Statistic
                        <span class="badge bg-light text-secondary "></span>
                    </button>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col d-grid">
                    <button type="button" class="btn btn-secondary btn-sm text-start">
                        Approvals
                        <span class="badge bg-light text-secondary "></span>
                    </button>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col d-grid">
                    <button type="button" class="btn btn-secondary btn-sm text-start">
                        Items
                        <span class="badge bg-light text-secondary "></span>
                    </button>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col d-grid">
                    <button type="button" class="btn btn-secondary btn-sm text-start">
                        Historical
                        <span class="badge bg-light text-secondary ">17</span>
                    </button>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col d-grid">
                    <button type="button" class="btn btn-secondary btn-sm text-start">
                        All
                        <span class="badge bg-light text-secondary "></span>
                    </button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="row pe-3 mb-3">
                <div class="col border-bottom">
                    <label for="" class="fw-bold">Action Historical :</label>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-3"></div>
                <div class="col">
                    <div class="card mb-3 cardPengirim" style="max-width: 500px;">
                        <div class="row g-0 justify-content-between">
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">Martin Samuel</h5>
                                    <p class="card-text">Akan diremote, mohon ditunggu.</p>
                                    <p>thanks,<BR>Martin</BR></p>
                                    <p class="card-text"><small class="text-mute">Last updated 10 mins ago</small></p>
                                </div>
                            </div>
                            <div class="col-3 mt-3">
                                <img src="/img/fotoProfil.jpg" class="img-fluid " style="max-width: 100px;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col">
                    <div class="card mb-3 cardPenerima" style="max-width: 550px;">
                        <div class="row g-0">
                            <div class="col-3 ms-4 mt-3">
                                <img src="/img/fotoProfil.jpg" class="img-fluid " style="max-width: 100px;" alt="">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">Trestiani</h5>
                                    <p class="card-text">Dear Koh Martin, nanti tolong bantuannya untuk install ulang corel draw x6 untuk komputer trestiani ip 10.7.8.87</p>
                                    <p class="card-text"><small class="text-mute">Last updated 1 mins ago</small></p>
                                </div>
                            </div>
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