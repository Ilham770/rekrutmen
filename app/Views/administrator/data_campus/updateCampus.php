<?= $this->extend('administrator/Layout/admin_layout') ?>
<?= $this->section('content') ?>

<form action="/campus/update/<?= $campus['id_campus'] ?>" method="post" class="mt-2 col-md-12">
    <!--form hanya bisa di akses di halaman ini saja-->
    <?= csrf_field(); ?>

    <input type="hidden" name="id_campus" value="<?= $campus['id_campus'] ?>">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="campus_name">Nama Kampus</label>
            <input type="text" class="form-control <?= ($validation->hasError('campus_name')) ? 'is-invalid' : '' ?>" id="campus_name" name="campus_name" value="<?= $campus['campus_name'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('campus_name') ?>
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