<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Wrapper -->
<div class="container-fluid wrapper">
  <div class="row">
    <div class="col-12">

      <!-- Hero Section -->
      <div class="container rounded mt-3 hero-img bg-light p-3 text-center">
        <h2 class="display-6 fw-bold">Lorem ipsum dolor sit amet.</h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, velit.</p>
        <p class="lead">Ea autem totam dolores corrupti veritatis voluptatum mollitia culpa iste!</p>
      </div>
      <!-- End of Hero Section -->

    </div>
  </div>

  <div class="row mt-4">
    <!-- Article Section -->
    <div class="col-12 col-sm-8 col-md-8 col-lg-9">
      <div class="container article-ctn">
        <h2 class="m-2 fw-bold fst-italic text-success">Articles</h2>
        <hr>
        <div class=" row">
          <div class="col">
            <h2 class="fw-bold fst-6">Limbah Minyak Berserakan Di Segala Penjuru Dunia</h2>
            <p class="text-muted">By : Penulis</p>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit esse similique odit molestias illo ducimus aspernatur. Accusantium dicta architecto sapiente.</p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col">
            <h2 class="fw-bold fst-6">Limbah Minyak Berserakan Di Segala Penjuru Dunia</h2>
            <p class="text-muted">By : Penulis</p>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit esse similique odit molestias illo ducimus aspernatur. Accusantium dicta architecto sapiente.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Sidebar Section -->
    <div class="col-12 col-sm-4 col-md-4 col-lg-3">
      <h5 class="fw-bold mt-2 text-center">Tukar Limbah Minyak Anda</h2>
        <div class="container sidebar-ctn bg-success rounded py-2 text-light">
          <p class="lead fs-6 text-center">Lokasi Pembuangan</p>
          <ul>
            <li>Jakarta</li>
            <li>Bekasi</li>
            <li>Tangerang Selatan</li>
          </ul>
        </div>
    </div>
  </div>

  <!-- End of Wrapper -->
</div>

<?= $this->endSection(); ?>