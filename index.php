<?php
include 'koneksi/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Blank Page</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?php
        include 'navbarAdmin.php';
        include 'sidebar.php';
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data Laptop</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Laptop</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Data Laptop</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <tr>
                        <form class="row g-3" method="GET" action="">
                            <div class="col-auto">
                                <input type="cari" name="cari" class="form-control" id="inputPassword2" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                        <table class="table table-border table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Laptop</th>
                                    <th>Merek</th>
                                    <th>Spesifikasi</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $data = $koneksi->query('SELECT no,nama,merk,spesifikasi,harga FROM laptop');
                                if(isset($_GET['cari'])){
                                    $data=mysqli_query($koneksi,"SELECT * FROM laptop
                                    WHERE 
                                    nama LIKE '%". $_GET['cari']."%' or
                                    merk LIKE '%". $_GET['cari']."%' or
                                    spesifikasi LIKE '%". $_GET['cari']."%' or
                                    harga LIKE '%". $_GET['cari']."%'
                                    ");
                                }
                                if ($data->num_rows > 0) {
                                    while ($row = $data->fetch_assoc()) {
                                        echo '<tr>
                                            <td>' . $row['no'] . '</td>
                                            <td>' . $row['nama'] . '</td>
                                            <td>' . $row['merk'] . '</td>
                                            <td>' . $row['spesifikasi'] . '</td>
                                            <td>' . $row['harga'] . '</td>
                                            <td>
                                            <a href="edit_data.php?no=' . $row['no'] . '" class="btn btn-warning">Edit</a>
                                            <a onclick="return confirm(\'Apakah Anda yakin menghapus data\')" href="hapus_data.php?no=' . $row['no'] . '" class="btn btn-danger">Hapus</a>
                                            </td>
                                            </tr>';
                                    }
                                } else {
                                    echo '<tr>
                                <td colspan="4" class="text-center">Tidak ada data</td>
                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                        <br>
                        <a href="tambah_data.php" class="btn btn-primary">Tambah</a>
                        <!-- <a href="export_data.php" class="btn btn-success">Ekspor</a> -->
                        <a href="ekspor_data.php" class="btn btn-danger">Ekspor PDF</a>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="dist/js/demo.js"></script> -->
</body>

</html>