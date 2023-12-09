<div class="container">
    <div class="row mt-3">
        <div class="col-md-10">
            <h3 class="mt-3">List of People</h3>

            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1;
                    foreach ($peoples as $people) : ?>
                        <tr>
                            <th><?= $i++; ?></th>
                            <td><?= $people['name']; ?></td>
                            <td><?= $people['email']; ?></td>
                            <td>
                                <a href="" class="btn btn-warning">Detail</a>
                                <a href="" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?php echo $this->pagination->create_links(); ?>

        </div>
    </div>
</div>