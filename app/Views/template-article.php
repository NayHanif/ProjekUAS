<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
  <h3><?= $list['judul']; ?></h3>
  <small><?= $list['penulis']; ?>&nbsp;<span><?= $list['created_at']; ?></span></small>
  <hr>
  <p><?= $list['isi1']; ?></p>
  <p class="mt-4"><?= $list['isi2']; ?></p>
  <p class="mt-4"><?= $list['isi3']; ?></p>
</div>

<?= $this->endSection(); ?>