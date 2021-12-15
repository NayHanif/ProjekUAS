<?= $this->extend('layout/admin/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid my-4">
  <h2 class="text-success">List Penukaran</h2>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Lokasi</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($list != NULL) : ?>
        <?php $i = 1; ?>
        <?php foreach ($list as $l) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $l['id']; ?></td>
            <td><?= $l['username']; ?></td>
            <td><?= $l['lokasi']; ?></td>
            <td><?= $l['jumlah']; ?></td>
            <td><?= $l['status']; ?>
              <?php if ($l['status'] != 'Accepted') : ?>
                <a href="<?= base_url('/admin/tukar/' . $l['id']); ?>" class="btn btn-success">Edit</a>
              <?php endif; ?>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
</div>

<?= $this->endSection(); ?>