<!-- <?php var_dump($mahasiswa); ?> -->
<div class="container">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa<strong> Berhasil</strong>
                    <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>/mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa...." name="keyword">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <?php if (empty($mahasiswa)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Mahasiswa Tidak Ditemukan
                </div>
            <?php endif; ?>

            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger float-sm-end" onclick="return confirm('yakin?');">
                            hapus</a>
                        <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary float-sm-end">
                            Detail</a>
                        <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge text-bg-success float-sm-end">
                            Edit</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- <footer class="top">
    <img src="<?php echo base_url(); ?>">
    <div class="links">
        <div>
            <h2>Platform</h2>
            <a>Directus Core</a>
        </div>
        <div>
            <h2>dkkd</h2>
            <a href="">sss</a>
        </div>
    </div>
</footer> -->
<!-- <footer class="top">
    <div class="legal">
        <span>wwwwwwww</span>
        <a href="">aaa</a>
    </div>
    <div class="links">
        <a href="" class="fa-brands fa-github"></a>
        <a href="" class="fa-brands fa-linkedin"></a>
        <a href="" class="fa-brands fa-docker"></a>
    </div>
</footer> -->
