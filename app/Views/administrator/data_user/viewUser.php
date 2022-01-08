<?= $this->extend('administrator/Layout/admin_layout') ?>
<?= $this->section('content') ?>

<h2 class="mt-2">Data Pelamar</h2>
<hr>

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
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>Password</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Tgl/Bln/Thn Lahir</th>
                <th>No.Telp</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($user as $data) : ?>
                <tr class="text-center">
                    <td><?= $i++ ?></td>
                    <td><?= $data['fullname'] ?></td>
                    <td><?= $data['username'] ?></td>
                    <td><?= $data['password'] ?></td>
                    <td><?= $data['address'] ?></td>
                    <td><?= $data['gender'] ?></td>
                    <td><?= $data['date_of_birth'] ?></td>
                    <td><?= $data['phone'] ?></td>
                    <td>
                    <img src="images/user/<?= $data['gambar'] ?>" alt="" width="50px" height="50px" class="img-responsive rounded-circle">    
                    </td>
                    <td>
                        <a href="/user/delete/<?= $data['id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>
<?= $this->endSection() ?>