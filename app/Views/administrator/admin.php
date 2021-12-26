<?= $this->extend('administrator/Layout/admin_layout') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Hi! Selamat Datang <span>Administrator</span></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <img src="/images/icon.png" alt="" width="300px">
    </div>
</div>

<div class="container-fluid">
<div class="d-flex gap-4">

<div class="card col-md-4">
  <div class="card-body">
    <h5 class="card-title">Lowongan</h5>
    <h1>200</h1>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card col-md-4">
  <div class="card-body">
    <h5 class="card-title">CV</h5>
    <h1>200</h1>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card col-md-4">
  <div class="card-body">
    <h5 class="card-title">Pelamar</h5>
    <h1>200</h1>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</div>
</div>

<?= $this->endSection() ?>