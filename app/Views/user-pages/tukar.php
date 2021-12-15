<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
  <div class="container rounded border border-success shadow mt-4 py-4">
    <h3 class="text-center text-success">Form Penukaran Limbah Minyak</h3>
    <form action="/tukar/pesan" method="POST">
      <select name="lokasi" class="form-select my-3">
        <option selected>Pilih Lokasi</option>
        <?php foreach ($opsi as $d) { ?>
          <option value="<?php echo $d; ?>"><?php echo $d; ?></option>
        <?php } ?>
      </select>
      <div class="mb-3">
        <input type="number" name="jumlah" class="form-control" placeholder="Jumlah (kg)">
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>
  </div>
</div>

<?= $this->endSection(); ?>