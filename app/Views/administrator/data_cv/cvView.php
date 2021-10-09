<?= $this->extend('administrator/Layout/admin_layout') ?>
<?= $this->section('content') ?>

<h2 class="mt-2">Data Jurusan</h2>
<hr>
<a href="/cv/create" class="btn btn-light mb-2"><span data-feather="plus"></span>Tambah Data</a>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Nama Pelamar</th>
                <th>Kampus</th>
                <th>Jurusan</th>
                <th>Lulusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($curvi as $data ) : ?>
                <tr class="text-center">
                    <td><?= $i++ ?></td>
                    <td><?= $data['fullname'] ?></td>
                    <td><?= $data['campus_name'] ?></td>
                    <td><?= $data['major_title'] ?></td>
                    <td><?= $data['title_name'] ?></td>

                    <td>
                        <a href="/cv/edit/<?= $data['id_cv'] ?>" class="btn btn-warning">Ubah</a> ||
                        <a href="/cv/delete/<?= $data['id_cv'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>
<?= $this->endSection() ?>