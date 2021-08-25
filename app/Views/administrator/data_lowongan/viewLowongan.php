<?= $this->extend('administrator/Layout/admin_layout') ?>
<?= $this->section('content') ?>

<h2 class="mt-2">Data Lowongan</h2>
<hr>
<a href="/lowongan/create" class="btn btn-light mb-2"><span data-feather="plus"></span>Add Data</a>

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
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Jobdesk</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($lowongan as $data) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $data['judul'] ?></td>
                    <td><?= $data['deskripsi'] ?></td>
                    <td></td>
                    <td><img class="img img-circle" src="/public/images/admin/<?= $data['gambar'] ?>" alt="gambar" width="80px"></td>
                    <td>
                        <a href="/lowongan/edit/<?= $data['id'] ?>" class="btn btn-warning mb-2">Edit</a> ||
                        <a href="/lowongan/delete/<?= $data['id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>
<?= $this->endSection() ?>