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
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Laptop</h3>

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
                    <?php
                    $no=$_GET['no'];

                    $data=$koneksi->query("SELECT no, nama,merk,spesifikasi,harga FROM laptop WHERE no='$no'");

                    if($data->num_rows==1){
                        $data = $data->fetch_assoc();
                    }
                    ?>
                    
                        <form method="post" action="simpan_data.php?no=<?php echo $no?>">
                            <div class="mb-3">
                                <label>Nama Laptop</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Laptop" value="<?php echo $data['nama']?>">
                            </div>
                            <div class="mb-3">
                                <label>Merk</label>
                                <input type="text" name="merk" class="form-control" placeholder="Masukkan Merek" value="<?php echo $data['merk']?>">
                            </div>
                            <div class="mb-3">
                                <label>Spesifikasi</label>
                                <input type="text"name="spesifikasi" class="form-control" placeholder="Masukkan Spesifikasi"  value="<?php echo $data['spesifikasi']?>">
                            </div>
                            <div class="mb-3">
                                <label>Harga</label>
                                <input type="number"name="harga" class="form-control" placeholder="Masukkan Harga"  value="<?php echo $data['harga']?>">
                            </div>
                            <a href="index.php" class="btn btn-warning">Kembali</a>
                            <button type="submit" name="action" value="edit" class="btn btn-primary">Submit</button>
                        </form>
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
    <script src="dist/js/demo.js"></script>
</body>

</html>