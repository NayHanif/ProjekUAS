<?= $this->extend('/layout/admin/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid border border-success p-4 shadow">
  <form action="<?= base_url('/admin/createArticle'); ?>" method="POST">
    <?= csrf_field(); ?>
    <div class="mb-3">
      <input type="judul" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" placeholder="Judul" value="<?= old('judul'); ?>" name="judul">
      <div class="invalid-feedback">
        <?= $validation->getError('judul'); ?>
      </div>
    </div>
    <div class="mb-3">
      <input type="penulis" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" placeholder="Penulis" value="<?= old('penulis'); ?>" name="penulis">
      <div class="invalid-feedback">
        <?= $validation->getError('penulis'); ?>
      </div>
    </div>
    <div class="mb-3">
      <textarea type="text" class="form-control <?= ($validation->hasError('isi1')) ? 'is-invalid' : ''; ?>" placeholder="Isi Pertama" value="<?= old('isi1'); ?>" id="isi1" name="isi1" style="height: 100px"></textarea>
      <div class="invalid-feedback">
        <?= $validation->getError('isi1'); ?>
      </div>
    </div>
    <div class="mb-3">
      <textarea type="text" class="form-control <?= ($validation->hasError('isi2')) ? 'is-invalid' : ''; ?>" placeholder="Isi Kedua" value="<?= old('isi2'); ?>" id="isi2" name="isi2" style="height: 100px"></textarea>
      <div class="invalid-feedback">
        <?= $validation->getError('isi2'); ?>
      </div>
    </div>
    <div class="mb-3">
      <textarea type="text" class="form-control <?= ($validation->hasError('isi3')) ? 'is-invalid' : ''; ?>" placeholder="Isi Ketiga" value="<?= old('isi3'); ?>" id="isi3" name="isi3" style="height: 100px"></textarea>
      <div class="invalid-feedback">
        <?= $validation->getError('isi3'); ?>
      </div>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>

<?= $this->endSection(); ?>