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
                    <h2 class="card-title">Data Persediaan</h2>
                  </div>
                </div>
              </div>
              <div class="card-body">
              <!-- CONTENTT -->
              <?php
                foreach($data_persediaan as $data_persediaan)
                {
              ?>
              <form action="<?php echo base_url('admin/c_persediaan/update_persediaan')?>?id_persediaan=<?php echo $data_persediaan['id_persediaan']?>" method="post">
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Nama Kategori</label>
                        <select class="form-control" name="list_id_kategori">
                        <option value ="<?php echo $data_persediaan['id_kategori']?> "><?php echo $data_persediaan['nama_kategori']?></option>
                          <?php
                          foreach($kategori as $kategori)
                          {
                            if($kategori['id_kategori'] != $data_persediaan['id_kategori']){
                              
                            }

                          ?>
                          <option value ="<?php echo $kategori['id_kategori']?> "><?php echo $kategori['nama_kategori']?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Bulan</label>
                        <select class="form-control" name="list_bulan" style="color:grey">
                          <option value="januari">JANUARI</option>
                          <option value="februari">FEBRUARI</option>
                          <option value="maret">MARET</option>
                          <option value="april">APRIL</option>
                          <option value="mei">MEI</option>
                          <option value="juni">JUNI</option>
                          <option value="juli">JULI</option>
                          <option value="agustus">AGUSTUS</option>
                          <option value="september">SEPTEMBER</option>
                          <option value="oktober">OKTOBER</option>
                          <option value="november">NOVEMBER</option>
                          <option value="desember">DESEMBER</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Tahun</label>
                        <input type="text" class="form-control" name="tahun" value="<?php echo $data_persediaan['tahun']?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Jumlah Persediaan</label>
                        <input type="text" class="form-control" name="jumlah_persediaan" value="<?php echo $data_persediaan['jumlah_persediaan']?>">
                      </div>
                    </div>
                    </div>
                  </div>
                  <?php 
                  }
                  ?>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">Save</button>
                  </div>
                </form>
              <!-- CONTENTT -->
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