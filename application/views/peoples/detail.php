<div class="container"></div>
<div class="row mt-3">
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
            Detail data peoples
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $peoples['Name']; ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $peoples['email']; ?></h6>
                <p class="card-text"><?= $peoples['Action']; ?></p>
                <a href="<?= base_url('peoples/index') ?>" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div>