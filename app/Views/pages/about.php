<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
  <h2 class="text-center text-success my-4">About Us</h2>
  <div class="container rounded border border-5 border-success d-flex justify-content-center align-items-center flex-column p-4 shadow">
    <img src="/assets/img/logo2.png" alt="">
    <p class="lead mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, dolorem fuga amet laboriosam quasi ipsa voluptate ea eveniet sint, repellendus distinctio laudantium, deleniti vel repudiandae! Incidunt quia modi iusto praesentium.</p>
  </div>
</div>
<?= $this->endSection(); ?>