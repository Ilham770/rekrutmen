<?= $this->extend('administrator/Layout/admin_layout') ?>
<?= $this->section('content') ?>

<form action="/jobdesc/update/<?= $jobdesc['id_jobdesc'] ?>" method="post" class="mt-2 col-md-12">
    <!--form hanya bisa di akses di halaman ini saja-->
    <?= csrf_field(); ?>

    <input type="hidden" name="id_jobdesc" value="<?= $jobdesc['id_jobdesc'] ?>">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="job_name">Nama Pekerjaan</label>
            <input type="text" class="form-control <?= ($validation->hasError('job_name')) ? 'is-invalid' : '' ?>" id="job_name" name="job_name" value="<?= $jobdesc['job_name'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('job_name') ?>
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