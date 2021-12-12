<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col">
      <h2 class="bg-light border-start border-4 border-success mt-3 ps-2 py-2">Articles</h2>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col">
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
  </div>
</div>

<?= $this->endSection(); ?>