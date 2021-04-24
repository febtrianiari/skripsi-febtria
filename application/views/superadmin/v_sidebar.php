<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/admin/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/admin/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Black Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url()?>assets/admin/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url()?>assets/admin/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url()?>assets/admin/demo/demo.css" rel="stylesheet" />
</head>

<div class="sidebar">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="sidebar-wrapper">
      <div class="logo">
        <a href="<?php echo base_url()?>" class="simple-text logo-normal">
          SISTEM KSU BROSEM
        </a>
      </div>
      <ul class="nav">
        <li class="active ">
          <a href="<?php echo base_url('') ?>">
            <i class="tim-icons icon-chart-pie-36"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('superadmin/c_data_admin') ?>">
            <i class="tim-icons icon-single-02"></i>
            <p>Data Admin</p>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/c_persediaan') ?>">
            <i class="tim-icons icon-pin"></i>
            <p>Penjualan</p>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/PrediksiC/index') ?>">
            <i class="tim-icons icon-pin"></i>
            <p>Persediaan</p>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/HistoryC/index') ?>">
            <i class="tim-icons icon-pin"></i>
            <p>History</p>
          </a>
        </li>
      </ul>
    </div>
  </div>