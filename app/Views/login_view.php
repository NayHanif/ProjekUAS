<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mt-3 d-flex flex-column justify-content-center align-items-center">
  <?php if (!empty(session()->getFlashdata('error'))) : ?>
    <div class="alert alert-warning alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <?= session()->getFlashdata('error'); ?>
    </div>
  <?php endif; ?>
  <form action="<?= base_url() ?>/login/submitLogin" method="POST">
    <div class="container shadow rounded frames border border-5 border-success pt-3">
      <h2 class="text-center">Login</h2>
      <div class="row">
        <div class="mb-3 mt-3">
          <input type="text" class="form-control" id="username" placeholder="Username" name="username">
        </div>
        <div class="mt-3 mb-3">
          <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>
        <div class="container-fluid d-flex justify-content-center my-3">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
        <div class="mb-3 text-center">
          <a href="<?= base_url() ?>/register">Belum punya akun?</a>
        </div>
      </div>
    </div>
  </form>

</div>
<?= $this->endSection(); ?>