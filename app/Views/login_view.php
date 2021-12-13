<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-3">

  <div class="row pt-5">
    <div class="col"></div>
    <div class="col p-3 border border-success">
      <h2>Login User</h2>
      <p>Masukkan username dan password pada formulir di bawah ini:</p>
      <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <?= session()->getFlashdata('error'); ?>
        </div>
      <?php endif; ?>
      <form action="<?= base_url() ?>/login/submitLogin" method="POST">
        <div class="form-floating mb-3 mt-3">
          <input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username">
          <label for="email">Username</label>
        </div>
        <div class="form-floating mt-3 mb-3">
          <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
          <label for="password">Password</label>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <a href="<?= base_url() ?>/register">Belum punya akun?</a>
    </div>
    <div class="col"></div>

  </div>

</div>
<?= $this->endSection(); ?>