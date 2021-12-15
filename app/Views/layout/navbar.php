<nav class="navbar navbar-expand-sm navbar-light bg-white sticky-top shadow-sm my-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url(); ?>/"><img src="/assets/img/logo2.png" alt="" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <?php if (!session()->get('logged_in')) : ?>
        <!-- Nav 1 -->
        <div class="navbar-nav">
          <a class="nav-link" href="<?= base_url(); ?>/">Home</a>
          <a class="nav-link" href="<?= base_url(); ?>/article">Articles</a>
          <a class="nav-link" href="<?= base_url(); ?>/about">About</a>
          <a class="nav-link" href="<?= base_url(); ?>/services">Services</a>
        </div>
        <div class="container-fluid d-sm-flex justify-content-sm-end">
          <div class="navbar-nav">
            <a class="nav-link" href="<?= base_url(); ?>/register">Register</a>
            <a class="nav-link" href="<?= base_url(); ?>/login">Login</a>
          </div>
        </div>
        <!-- End of Nav 1 -->
      <?php else :  ?>
        <!-- Nav 2 -->
        <div class="navbar-nav">
          <a class="nav-link" href="<?= base_url(); ?>/dashboard/<?= $items['username']; ?>">Dashboard</a>
          <a class="nav-link" href="<?= base_url(); ?>/article">Articles</a>
          <a class="nav-link" href="<?= base_url(); ?>/tukar/<?= $items['username']; ?>">Tukar</a>
        </div>
        <div class="container-fluid w-75 d-flex justify-content-end">
          <div class="navbar-nav">
            <div class="dropdown">
              <a class="dropdown-toggle btn text-success text-decoration-none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $items['username']; ?>&nbsp;<i class="bi bi-person-circle "></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <hr>
                <li><a class="dropdown-item" href="/auth/logout">Logout&nbsp;<i class="bi bi-box-arrow-left"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End of Nav 2 -->
      <?php endif; ?>
    </div>
  </div>
</nav>