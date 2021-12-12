<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <h2 class="bg-light border-start border-4 border-success mt-3 ps-2 py-2">Tukar</h2>
      <!-- <div class="container d-flex flex-column justify-content-center align-items-center mt-3">
        <img src="/asset/img/logo2.png" alt="">
      </div> -->
    </div>
  </div>
  <div class="row d-flex justify-content-center align-items-center my-3">
    <div class="col-12 rounded d-flex flex-column border border-3 border-success p-3 w-75">
      <form action="" method="POST">
        <div class="mb-3">
          <label class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" name="namaLengkap">
        </div>
        <div class="mb-3">
          <label class="form-label">Nomor HP</label>
          <input type="number" class="form-control" name="nomorHp">
        </div>
        <div class="mb-3">
          <label class="form-label">Banyak Penukaran</label>
          <input type="number" class="form-control" name="bykPenukaran">
        </div>
        <div class="mb-3">
          <label class="form-label">Kota</label>
          <input type="text" class="form-control" name="kota">
        </div>
        <div class="mb-3">
          <label class="form-label">Alamat</label>
          <input type="text" class="form-control" name="alamat">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>

<!-- pesanan : namaLengkap (string 100), nomorHp (int 16), bykPenukaran (int 10), kota (string 50), alamat (string 250) 
 -->