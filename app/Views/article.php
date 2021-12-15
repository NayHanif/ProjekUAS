<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php if ($list != NULL) : ?>
  <div class="container px-4 py-3">
    <h3 class="text-center text-success">Berita Terbaru</h3>
    <?php foreach ($list as $l) : ?>
      <h3 class="mt-4"><a class="text-success" href="<?= base_url('/article/' . $l['id']); ?>"><?= $l['judul']; ?></a></h3>
      <small class="mt-2 text-secondary"><?= $l['penulis']; ?></small>
      <hr>
      <p><?= $l['isi1']; ?></p>
    <?php endforeach; ?>
  </div>
<?php endif; ?>

<?= $this->endSection(); ?>