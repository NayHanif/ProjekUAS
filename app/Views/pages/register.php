<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid d-flex justify-content-center" style="margin-top: -30px;">
  <form action="<?= base_url() ?>/auth/register" method="POST">
    <?= csrf_field(); ?>
    <div class="container shadow rounded frames border border-5 border-success pt-3">
      <h2 class="text-center">Register</h2>
      <div class="row">
        <div class="col-12">
          <div class="mb-3 mt-3">
            <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" placeholder="Username" name="username" value="<?= old('username') ?>" autofocus>
            <div class="invalid-feedback">
              <?= $validation->getError('username'); ?>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="mt-3 mb-3">
            <input type="password" class="form-control  <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" placeholder="Password" name="password">
            <div class="invalid-feedback">
              <?= ucfirst($validation->getError('password')); ?>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="mt-3 mb-3">
            <input type="password" class="form-control  <?= ($validation->hasError('cpassword')) ? 'is-invalid' : ''; ?>" id="cpassword" placeholder="Konfirmasi Password" name="cpassword">
            <div class="invalid-feedback">
              <?= ucfirst($validation->getError('cpassword')); ?>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="mt-3 mb-3">
            <input type="text" class="form-control  <?= ($validation->hasError('namadepan')) ? 'is-invalid' : ''; ?>" id="namadepan" placeholder="Nama Depan" name="namadepan" value="<?= old('namadepan') ?>">
            <div class="invalid-feedback">
              <?= ucfirst($validation->getError('namadepan')); ?>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="mt-3 mb-3">
            <input type="text" class="form-control  <?= ($validation->hasError('namabelakang')) ? 'is-invalid' : ''; ?>" id="namabelakang" placeholder="Nama Belakang" name="namabelakang" value="<?= old('namabelakang') ?>">
            <div class="invalid-feedback">
              <?= ucfirst($validation->getError('namabelakang')); ?>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="mt-3 mb-3">
            <input type="text" class="form-control  <?= ($validation->hasError('nomorhp')) ? 'is-invalid' : ''; ?>" id="nomorhp" placeholder="Nomor HP" name="nomorhp" value="<?= old('nomorhp') ?>">
            <div class="invalid-feedback">
              <?= ucfirst($validation->getError('nomorhp')); ?>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="mt-3 mb-3">
            <textarea type="text" class="form-control  <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" placeholder="Alamat" name="alamat" value="<?= old('alamat') ?>"></textarea>
            <div class="invalid-feedback">
              <?= ucfirst($validation->getError('alamat')); ?>
            </div>
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