<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url().'assets/assets/img/apple-icon.png'?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'assets/assets/fav.png'?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  E-Kasir Berbasis Cloud
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url().'assets/assets/css/material-dashboard.css?v=2.1.2'?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url().'assets/assets/demo/demo.css'?>" rel="stylesheet" />
  <!-- data table -->
  <link rel="stylesheet" type="text/css" href="assets/assets/arul/jquery.dataTables.min.css">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url().'assets/assets/img/sidebar-1.jpg'?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a class="simple-text logo-normal">
      <i class="material-icons">computer</i>
      E-Kasir Berbasis Cloud
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url().'index.php/User_Read/User_Read' ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url().'index.php/User_Read/User_Read/data_barang' ?>">
              <i class="material-icons">table_view</i>
              <p>Data Barang</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url().'index.php/User_Read/User_Read/transaksi' ?>">
              <i class="material-icons">close_fullscreen</i>
              <p>Transaksi</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
