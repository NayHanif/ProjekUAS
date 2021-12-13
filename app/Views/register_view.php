<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mt-3 d-flex flex-column justify-content-center align-items-center">
  <?php if (!empty(session()->getFlashdata('error'))) : ?>
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <?= \Config\Services::validation()->listErrors(); ?>
    </div>
  <?php endif; ?>
  <form action="<?= base_url() ?>/register/submitRegister" method="POST">
    <div class="container shadow rounded frames border border-5 border-success pt-3">
      <h2 class="text-center">Register</h2>
      <div class="row">
        <div class="col-12">
          <div class="mb-3 mt-3">
            <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?= old('username') ?>">
          </div>
        </div>
        <div class="col-6">
          <div class="mt-3 mb-3">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
          </div>
        </div>
        <div class="col-6">
          <div class="mt-3 mb-3">
            <input type="password" class="form-control" id="cpassword" placeholder="Konfirmasi Password" name="cpassword">
          </div>
        </div>
        <div class="col-6">
          <div class="mt-3 mb-3">
            <input type="text" class="form-control" id="namadepan" placeholder="Nama Depan" name="namadepan" value="<?= old('namadepan') ?>">
          </div>
        </div>
        <div class="col-6">
          <div class="mt-3 mb-3">
            <input type="text" class="form-control" id="namabelakang" placeholder="Nama Belakang" name="namabelakang" value="<?= old('namabelakang') ?>">
          </div>
        </div>
        <div class="col-12">
          <div class="container-fluid d-flex justify-content-center my-3">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3 text-center">
            <a href="<?= base_url() ?>/login">Sudah punya akun?</a>
          </div>
        </div>

      </div>
    </div>
  </form>
</div>

<?= $this->endSection(); ?>