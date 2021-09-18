<?= $this->extend('administrator/Layout/admin_layout') ?>
<?= $this->section('content') ?>

<form action="/major/update/<?= $major['id'] ?>" method="post" class="mt-2 col-md-12">
    <!--form hanya bisa di akses di halaman ini saja-->
    <?= csrf_field(); ?>

    <input type="hidden" name="id" value="<?= $major['id'] ?>">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="major_title">Major Title</label>
            <input type="text" class="form-control <?= ($validation->hasError('major_title')) ? 'is-invalid' : '' ?>" id="major_title" name="major_title" value="<?= $major['major_title'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('major_title') ?>
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