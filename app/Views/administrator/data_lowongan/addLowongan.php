<?= $this->extend('administrator/Layout/admin_layout') ?>
<?= $this->section('content') ?>


<form action="/lowongan/save" method="post" class="mt-2 col-md-12">
  <!--form hanya bisa di akses di halaman ini saja-->
  <?= csrf_field(); ?>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="judul">Judul</label>
      <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '' ?>" id="judul" name="judul" placeholder="Masukkan judul">
      <div class="invalid-feedback">
        <?= $validation->getError('judul') ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label for="deskripsi">Deskripsi</label>
      <textarea name="deskripsi" id="deskripsi" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : '' ?>" placeholder="Masukkan Deskripsi Pekerjaan"></textarea>
      <div class="invalid-feedback">
        <?= $validation->getError('deskripsi') ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-3">
      <label for="jobdesc">Jenis Pekerjaan</label>

      <select name="jobdesc" id="jobdesc" class="form-control <?= ($validation->hasError('jobdesc')) ? 'is-invalid' : '' ?>">
        <option selected>- Pilih Jenis Pekerjaan -</option>
        <?php foreach ($addLowongan as $data) : ?>
          <option value="<?= $data['id_jobdesc'] ?>"><?= $data['job_name'] ?></option>
        <?php endforeach; ?>
      </select>
      <div class="invalid-feedback">
        <?= $validation->getError('jobdesc') ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-3">
      <label for="gambar">Gambar</label>
      <input type="file" class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : '' ?>" name="gambar" id="gambar" placeholder="Pilih Gambar">
      <div class="invalid-feedback">
        <?= $validation->getError('gambar') ?>
      </div>
      <br><br>
      <p style="color: red;">* Ukuran file Gambar / File max 4MB</p>
      <p style="color: red;">* Ekstensi file wajib : PNG & JPG/JPEG</p>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-2">
      <input type="submit" name="save" class="btn btn-primary" value="Save">
    </div>
  </div>

</form>

<?= $this->endSection() ?>