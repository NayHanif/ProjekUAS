<nav class="navbar navbar-expand-sm navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url(); ?>/admin">Reminyak.id</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav justify-content-end">
        <a class="nav-link" aria-current="page" href="<?= base_url(); ?>/admin/user-list">List User</a>
        <a class="nav-link" href="<?= base_url(); ?>/admin/tukar-list">List Tukar</a>
        <a class="nav-link" href="<?= base_url(); ?>/admin/article-list">List Article</a>
        <a class="nav-link" href="<?= base_url(); ?>/admin/article">Buat Article</a>
        <a class="nav-link" href="<?= base_url(); ?>/destroy">Logout</a>
      </div>
    </div>
  </div>
</nav>