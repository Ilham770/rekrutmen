<?= $this->extend('administrator/Layout/admin_layout') ?>
<?= $this->section('content') ?>

<form action="/admin/update/<?= $admin['id'] ?>" method="post" class="mt-2 col-md-12">
    <!--form hanya bisa di akses di halaman ini saja-->
    <?= csrf_field(); ?>

    <input type="hidden" name="id" value="<?= $admin['id'] ?>">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="nama">Nama</label>
            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" value="<?= $admin['nama'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('nama') ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-3">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" value="<?= $admin['username'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('username') ?>
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="password">Password</label>
            <input type="Password" name="password" id="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" value="<?= $admin['Password'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('password') ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-3">
            <label for="jabatan">Departement</label>
            <select name="jabatan" id="jabatan" class="form-control <?= ($validation->hasError('jabatan')) ? 'is-invalid' : '' ?>">
                <option selected>Pilih Departement</option>
                <option value="Owner">Owner</option>
                <option value="Manajer">Manajer</option>
                <option value="HRD">HRD</option>
                <option value="Staff">Staff</option>
            </select>
            <div class="invalid-feedback">
                <?= $validation->getError('jabatan') ?>
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="kelamin">Jenis Kelamin</label>
            <select name="kelamin" id="kelamin" class="form-control <?= ($validation->hasError('kelamin')) ? 'is-invalid' : '' ?>">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="Laki - laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <div class="invalid-feedback">
                <?= $validation->getError('kelamin') ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>"><?= $admin['alamat'] ?></textarea>
            <div class="invalid-feedback">
                <?= $validation->getError('alamat') ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-3">
            <label for="telepon">Telepon</label>
            <input type="text" class="form-control <?= ($validation->hasError('telepon')) ? 'is-invalid' : '' ?>" name="telepon" id="telepon" value="<?= $admin['telepon'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('telepon') ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-2">
            <input type="submit" name="update" class="btn btn-primary" value="Update">
        </div>
    </div>

</form>

<?= $this->endSection() ?>