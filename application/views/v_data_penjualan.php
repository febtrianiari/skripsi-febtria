<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/admin/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/admin/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
      KSU Brosem | <?php echo $title ?> 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url(); ?>assets/admin/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url()?>assets/admin/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url()?>assets/admin/demo/demo.css" rel="stylesheet" />
</head>

<body class=" ">
  <div class="wrapper ">
    
    <div class="main-panel">
      
      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h4 class="card-category">KSU BROSEM</h4>
                    <h2 class="card-title">Data Penjualan</h2>
                    <a href="<?php echo base_url('admin/c_penjualan/tampil_tambah')?>"><button class="btn btn-light">Tambah Data</button></a>
                    
                    <div class="row" style="margin-top: 10px">
                      <div class="col-sm-3 text-left">
                        <form action="<?php echo base_url('admin/c_penjualan/index')?>" method="post">
                          <select name="id_kategori" required>
                          <option value="" readonly selected>Pilih Kategori</option>
                          <option value="0">Semua</option>
                            <?php
                                foreach($kategori as $kategori)
                                {
                            ?>
                            <option value="<?php echo $kategori['id_kategori']?>"><?php echo $kategori['nama_kategori']?></option>
                            <?php
                              }
                            ?>
                          </select>
                      </div>
                      <div>
                        <select name="id_tahun" required>
                        <option value="" readonly selected>Pilih Tahun</option>
                        <option value="0">Semua</option> 
                        <?php
                          for ($i = $tahun['last']; $i <= $tahun['new'] ; $i++) 
                          { 
                        ?>
                          <option value="<?php echo $i ?>"><?php echo $i ?></option> 
                        <?php
                          }
                        ?>
                        </select>
                      </div>
                      <div>
                        <!-- <button class="fa fa-search" type="submit">Cari</button> -->
                        <button class="btn btn-success btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-search"></i></button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
              <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                    <th style="text-align:center">No</th>
                    <th style="text-align:center">Nama Kategori</th>
                    <th style="text-align:center">Bulan</th>
                    <th style="text-align:center">Tahun</th>
                    <th style="text-align:center">Jumlah Penjualan</th>
                    <th style="text-align:center">Action</th>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach($penjualan as $penjualan)
                            {
                        ?>
                      <tr>
                        <td style="text-align:center"><?php echo $no++; ?></td>
                        <td style="text-align:center"><?php echo $penjualan['nama_kategori']?></td>
                        <td style="text-align:center"><?php echo $penjualan['bulan']?></td>
                        <td style="text-align:center"><?php echo $penjualan['tahun']?></td>
                        <td style="text-align:center"><?php echo $penjualan['jumlah_penjualan']?></td>
                        <td style="text-align:center">
                        <a href="<?php echo base_url('admin/c_penjualan/tampil_update_penjualan')?>?id_penjualan=<?php echo $penjualan['id_penjualan']?>"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                        <a href="<?php echo base_url('admin/c_penjualan/aksi_hapus')?>?id_penjualan=<?php echo $penjualan['id_penjualan']?>"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-trash"></i></button>
                      </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
        
      
      </div>
    </div>
    
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/black-dashboard.min.js?v=1.0.0" type="text/javascript"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
</body>

</html>