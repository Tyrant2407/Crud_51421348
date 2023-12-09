<div class="container justify-content-center">
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Detail data Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $mahasiswa['email']; ?></h6>
                    <p class="card-text"><?= $mahasiswa['npm']; ?></p>
                    <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
                    <a href="<?= base_url('mahasiswa/index') ?>" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
