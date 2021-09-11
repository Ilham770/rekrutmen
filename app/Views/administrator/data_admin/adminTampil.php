<?= $this->extend('administrator/Layout/admin_layout') ?>
<?= $this->section('content') ?>

<h2 class="mt-2">Data Admin</h2>
<hr>
<a href="/admin/create" class="btn btn-light mb-2"><span data-feather="plus"></span>Add Data</a>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr align="center">
                <th>No</th>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Department</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($admin as $data) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['username'] ?></td>
                    <td><?= $data['Password'] ?></td>
                    <td><?= $data['jabatan'] ?></td>
                    <td><?= $data['kelamin'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['telepon'] ?></td>
                    <td>
                        <a href="/admin/edit/<?= $data['id'] ?>" class="btn btn-warning">Edit</a> ||
                        <a href="/admin/delete/<?= $data['id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>
<?= $this->endSection() ?>