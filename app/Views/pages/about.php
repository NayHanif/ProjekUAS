<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col">
      <h2 class="bg-light border-start border-4 border-success mt-3 ps-2 py-2">About</h2>
      <div class="container d-flex flex-column justify-content-center align-items-center mt-3">
        <img src="/asset/img/logo2.png" alt="">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="container mt-3 rounded border border-success border-3 text-success p-3">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure odio saepe assumenda est. Dolorum ratione accusamus excepturi magnam corporis. Magnam ducimus repudiandae vitae explicabo?</p>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>