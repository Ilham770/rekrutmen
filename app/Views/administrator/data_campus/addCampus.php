<?= $this->extend('administrator/Layout/admin_layout') ?>
<?= $this->section('content') ?>

<form action="/campus/save" method="post" class="mt-2 col-md-12">
    <!--form hanya bisa di akses di halaman ini saja-->
    <?= csrf_field(); ?>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="campus_name">Campus Name</label>
            <input type="text" class="form-control <?= ($validation->hasError('campus_name')) ? 'is-invalid' : '' ?>" id="campus_name" name="campus_name" placeholder="Masukkan nama kampus">
            <div class="invalid-feedback">
                <?= $validation->getError('campus_name') ?>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="form-group col-md-2">
            <input type="submit" name="save" class="btn btn-primary" value="Save">
        </div>
    </div>

</form>

<?= $this->endSection() ?>