<?= $this->extend('administrator/Layout/admin_layout') ?>
<?= $this->section('content') ?>

<h2 class="mt-2">Data Title</h2>
<hr>
<a href="/title/create" class="btn btn-light mb-2"><span data-feather="plus"></span>Add Data</a>

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
                <th>Major Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($title as $data) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $data['title_name'] ?></td>
                    <td>
                        <a href="/title/edit/<?= $data['id'] ?>" class="btn btn-warning">Edit</a> ||
                        <a href="/title/delete/<?= $data['id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>
<?= $this->endSection() ?>