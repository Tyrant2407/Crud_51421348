<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah data Mahasiswa
                </div>
                <div class="card-body">
                    <!-- <?php if(validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?> -->
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" class="form-control" name="nama">
                            <div class="form-text text-danger"><?= form_error('nama'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="npm">NPM</label>
                            <input type="text" id="npm" class="form-control" name="npm">
                            <div class="form-text text-danger"><?= form_error('npm'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="text" id="email" class="form-control" name="email">
                            <div class="form-text text-danger"><?= form_error('email'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-select" id='jurusan' name='jurusan'>
                                <?php foreach ($jurusan as $j) : ?>
                                    <?php if($j == $mahasiswa['jurusan']) : ?>
                                    <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name='tambah' class="btn btn-primary mt-3 float-sm-end">Tambah data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>