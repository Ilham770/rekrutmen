<?= $this->extend('administrator/Layout/admin_layout') ?>
<?= $this->section('content') ?>

<h2 class="mt-2">Data Pekerjaan</h2>
<hr>
<a href="/jobdesc/create" class="btn btn-light mb-2"><span data-feather="plus"></span>Tambah Data</a>

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
                <th>Nama Pekerjaan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($jobdesc as $data) : ?>
                <tr class="text-center">
                    <td><?= $i++ ?></td>
                    <td><?= $data['job_name'] ?></td>
                    <td>
                        <a href="/jobdesc/edit/<?= $data['id_jobdesc'] ?>" class="btn btn-warning"> Ubah</a> ||
                        <a href="/jobdesc/delete/<?= $data['id_jobdesc'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>
<?= $this->endSection() ?>