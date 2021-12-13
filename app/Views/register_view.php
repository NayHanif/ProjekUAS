<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-3">
  <div class="row">
    <div class="col"></div>
    <div class="col p-3 border border-success">
      <h2>Registrasi User</h2>
      <p>Lengkapi isian formulir di bawah ini:</p>
      <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <?= \Config\Services::validation()->listErrors(); ?>
        </div>
      <?php endif; ?>
      <form action="<?= base_url() ?>/register/submitRegister" method="POST">
        <div class="form-floating mb-3 mt-3">
          <input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username" value="<?= old('username') ?>">
          <label for="email">Username</label>
        </div>
        <div class="form-floating mt-3 mb-3">
          <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
          <label for="password">Password</label>
        </div>
        <div class="form-floating mt-3 mb-3">
          <input type="password" class="form-control" id="cpassword" placeholder="Masukkan Konfirmasi Password" name="cpassword">
          <label for="cpassword">Konfirmasi Password</label>
        </div>
        <div class="form-floating mt-3 mb-3">
          <input type="text" class="form-control" id="namadepan" placeholder="Masukkan Nama Depan" name="namadepan" value="<?= old('namadepan') ?>">
          <label for="namadepan">Nama Depan</label>
        </div>
        <div class="form-floating mt-3 mb-3">
          <input type="text" class="form-control" id="namabelakang" placeholder="Masukkan Nama Depan" name="namabelakang" value="<?= old('namabelakang') ?>">
          <label for="namabelakang">Nama Belakang</label>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <a href="<?= base_url() ?>/login">Sudah punya akun?</a>
    </div>
    <div class="col"></div>
  </div>

</div>

<?= $this->endSection(); ?>