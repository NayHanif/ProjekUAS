<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid my-4">
  <div class="row">
    <div class="col-12 col-sm-7 col-lg-8 col-xl-9">
      <div class="container rounded border border-success shadow-sm p-4">
        <div class="d-flex justify-content-center mb-4">
          <img src="/assets/img/user.png" alt="" style="width: 150px;">
        </div>
        <h5 class="text-center"><?= ucfirst($items['namadepan']); ?> <?= ucfirst($items['namabelakang']); ?></h4>
          <hr>
          <p class="text-center"><?= $items['nomorhp']; ?></p>
          <hr>
          <p class="text-center"><?= $items['alamat']; ?></p>
          <hr>
          <p class="text-center">Jumlah Tukar : <br><?= $items['jumlahtukar']; ?></p>
      </div>
    </div>
    <div class="col-12 col-sm-5 col-lg-4 col-xl-3">
      <div class="container px-2 py-3 border border-success rounded shadow-sm">
        <?php if ($items2 == NULL) :  ?>
          <h3 class="text-center text-success">Status Penukaran Minyak</h3>
          <p>ID penukaran : </p>
          <p>Lokasi : </p>
          <p>Berat : </p>
          <p>Status : </p>
        <?php else : ?>
          <h3 class="text-center text-success">Status Penukaran Minyak</h3>
          <p>ID penukaran : <span class="text-success" style="cursor:pointer;"><?= '#' . $items2['id']; ?><span></p>
          <p>Lokasi : <?= $items2['lokasi']; ?></p>
          <p>Berat : <?= $items2['jumlah']; ?> kilogram</p>
          <p>Status : <?= $items2['status']; ?></p>
        <?php endif; ?>
      </div>
      <div class="container mt-3 px-2 py-3 bg-success rounded shadow-sm text-light">
        <h5 class="text-center">Tukar Limbah Minyak</h5>
        <p class="text-center">Lokasi Tersedia : </p>
        <ul>
          <li>Jakarta</li>
          <li>Bekasi</li>
          <li>Depok</li>
          <li>Tangerang Selatan</li>
          <li>Bogor</li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-7 col-lg-8 col-xl-9">
      <div class="container px-4 py-3">
        <h3 class="text-center text-success">Berita Terbaru</h3>
        <?php $i = 1; ?>
        <?php foreach ($list as $l) : ?>
          <?php $i++; ?>
          <?php if ($i == 5) {
            break;
          } ?>
          <div class="article my-2">
            <hr>
            <h3><?= $l['judul']; ?></h3>
            <small><?= $l['penulis']; ?></small>
            <hr>
            <p><?= $l['isi1']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
</div>

<?= $this->endSection(); ?>