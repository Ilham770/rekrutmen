<?= $this->extend('administrator/Layout/admin_layout') ?>
<?= $this->section('content') ?>

<form action="/jobdesc/save" method="post" class="mt-2 col-md-12">
    <!--form hanya bisa di akses di halaman ini saja-->
    <?= csrf_field(); ?>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="job_name">Title</label>
            <input type="text" class="form-control <?= ($validation->hasError('job_name')) ? 'is-invalid' : '' ?>" id="job_name" name="job_name" placeholder="Masukkan nama">
            <div class="invalid-feedback">
                <?= $validation->getError('job_name') ?>
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