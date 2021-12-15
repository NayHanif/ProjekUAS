<?= $this->extend('layout/admin/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid my-4">
  <h2 class="text-success">List Artikel</h2>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ID</th>
        <th scope="col">Judul</th>
        <th scope="col">Penulis</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($list != NULL) : ?>
        <?php $i = 1; ?>
        <?php foreach ($list as $l) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $l['id']; ?></td>
            <td><?= $l['judul']; ?></td>
            <td><?= $l['penulis']; ?></td>
            <td>
              <form action="/admin/deleteArticle/<?= $l['id']; ?>" method="POST" class="d-inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus artikel ini?')">Delete</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
</div>

<?= $this->endSection(); ?>