<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>

<div class="container border border-success my-3">

  <h5>Klik untuk menyelesaikan penukaran.</h5>
  <form action="/tukar/button/<?= $list['id']; ?>" method="POST">
    <?= csrf_field(); ?>
    <input type="hidden" value="Accepted" class="form-control" name="button">
    <button type="submit" class="btn btn-success">Done</button>
  </form>
</div>

<?= $this->endSection(); ?>