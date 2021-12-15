<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="wrapper container-fluid my-4">

  <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success text-center my-3" role="alert">
      <?= session()->getFlashdata('pesan'); ?>
    </div>
  <?php endif; ?>

  <div class="hero-ctn container rounded bg-success text-center p-3 shadow">
    <!-- Hero Section -->
    <h2 class="text-light">Lorem ipsum dolor sit amet consectetur.</h2>
    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur recusandae, reiciendis, cupiditate debitis, vel neque atque eius error similique impedit suscipit expedita libero asperiores aperiam! Nobis dolores iste deleniti labore.</p>
    <small class="text-light">Lorem, ipsum dolor.</small>
  </div>

  <!-- Content Section -->
  <div class="content-ctn container-fluid my-4">
    <div class="row">
      <!-- Article -->
      <div class="col-12 col-sm-8 col-md-8 col-xl-7">
        <h2 class="text-success">Articles</h2>
        <?php $i = 1; ?>
        <?php foreach ($list as $l) : ?>
          <?php $i++; ?>
          <?php if ($i == 5) {
            break;
          } ?>
          <div class="article my-2">
            <hr>
            <h3><?= $l['judul']; ?></h3>
            <small><?= $l['penulis']; ?></small>
            <hr>
            <p><?= $l['isi1']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      <!-- End of Article -->

      <!-- Sidebar -->
      <div class="col-12 col-sm-4 col-md-4 col-xl-5 sticky-top">
        <div class="card w-100">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-success">Button</a>
          </div>
        </div>
        <div class="mt-4"></div>
        <div class="card w-100">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-success">Button</a>
          </div>
        </div>
      </div>
      <!-- End of Sidebar -->
    </div>
  </div>
  <!-- End of Content Section -->

</div>

<?= $this->endSection(); ?>