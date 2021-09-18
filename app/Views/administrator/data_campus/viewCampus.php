<?= $this->extend('administrator/Layout/admin_layout') ?>
<?= $this->section('content') ?>

<h2 class="mt-2">Data Campus</h2>
<hr>
<a href="/campus/create" class="btn btn-light mb-2"><span data-feather="plus"></span>Add Data</a>

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
                <th>Job Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($campus as $data) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $data['campus_name'] ?></td>
                    <td>
                        <a href="/campus/edit/<?= $data['id_campus'] ?>" class="btn btn-warning">Edit</a> ||
                        <a href="/campus/delete/<?= $data['id_campus'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>
<?= $this->endSection() ?>