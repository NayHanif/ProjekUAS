<?= $this->extend('layout/admin/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid my-4">
  <h2 class="text-success">List User</h2>
  <table class="table overflow-auto">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Username</th>
        <th scope="col">Nama Depan</th>
        <th scope="col">Nama Belakang</th>
        <th scope="col">Nomor HP</th>
        <th scope="col">Alamat</th>
        <th scope="col">Jumlah Penukaran</th>
        <th scope="col">Level</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($list != NULL) : ?>
        <?php $i = 1; ?>
        <?php foreach ($list as $l) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $l['username']; ?></td>
            <td><?= $l['namadepan']; ?></td>
            <td><?= $l['namabelakang']; ?></td>
            <td><?= $l['nomorhp']; ?></td>
            <td><?= $l['alamat']; ?></td>
            <td><?= $l['jumlahtukar']; ?></td>
            <td><?= $l['level']; ?></td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
</div>

<?= $this->endSection(); ?>