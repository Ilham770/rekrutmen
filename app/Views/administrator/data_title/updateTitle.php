<?= $this->extend('administrator/Layout/admin_layout') ?>
<?= $this->section('content') ?>

<form action="/title/update/<?= $studi['id'] ?>" method="post" class="mt-2 col-md-12">
    <!--form hanya bisa di akses di halaman ini saja-->
    <?= csrf_field(); ?>

    <input type="hidden" name="id" value="<?= $studi['id'] ?>">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="title_name">Nama Lulusan</label>
            <input type="text" class="form-control <?= ($validation->hasError('major_title')) ? 'is-invalid' : '' ?>" id="title_name" name="title_name" value="<?= $studi['title_name'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('title_name') ?>
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