            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Pesanan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Pesanan</li>
                        </ol>                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                List Data Pesanan
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Nama Lengkap</th>
                                            <th>Nomor Hp</th>
                                            <th>Jumlah</th> 
                                            <th>Kota</th>                                         
                                            <th>Alamat</th>     
                                            <th>Status</th>
                                            <th>Aksi</th>                                  
                                        </tr>
                                    </thead>                                  
                                    <tbody>
                                    <?php foreach ($pesanan as $row): ?>
                                        <tr>
                                            <td><?=$row['username']?></td>
                                            <td><?=$row['namaLengkap']?></td>
                                            <td><?=$row['nomorHp']?></td>
                                            <td><?=$row['bykPenukaran']?></td>
                                            <td><?=$row['kota']?></td>
                                            <td><?=$row['alamat']?></td>
                                            <td><?=$row['status']?></td>
                                            <td>
                                            <button type="button" class="btn btn-primary"><i class="fas fa-check"></i></button>
                                            </td>
                                        </tr>         
                                    <?php endforeach; ?>                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url() ?>/asset/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?= base_url() ?>/asset/js/datatables-simple-demo.js"></script>
    </body>
</html>
