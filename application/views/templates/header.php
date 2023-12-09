<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $judul; ?></title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--fonts google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&family=Ubuntu:wght@400;500;700&display=swap"     rel="stylesheet">
    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
  </head>
  <body>
    <div class="container-sidebar">
      <div class="sidebar">
        <div class="header">
          <div class="list-item">
            <a href="">
              <span class="description-header">Rizky Putra Perdana</span>
              <img src="<?php echo base_url('') ?>" alt="" class="icon">
            </a>
          </div>  
          <div class="illustration">
            <img src="<?php echo base_url('assets/img/illustration.png') ?>" alt="" class="icon">
          </div>
        </div>

        <div class="main">
          <div class="list-item">
            <a href="<?= base_url('peoples'); ?>">
              <img src="<?php echo base_url('assets/svg/Dashboard.svg') ?>" alt="" class="icon">
              <span class="description">Dashbord</span>
            </a>
          </div>
        </div>
        <div class="main">
          <div class="list-item">
            <a href="<?= base_url('mahasiswa'); ?>">
              <img src="<?php echo base_url('assets/svg/analytic.svg') ?>" alt="" class="icon">
              <span class="description">Table Crud</span>
            </a>
          </div>
        </div>
        <div class="main">
          <div class="list-item">
            <a href="#">
              <img src="<?php echo base_url('assets/svg/categories.svg') ?>" alt="" class="icon">
              <span class="description">categories</span>
            </a>
          </div>
        </div>
        <div class="main">
          <div class="list-item">
            <a href="#">
              <img src="<?php echo base_url('assets/svg/group.svg') ?>" alt="" class="icon">
              <span class="description">group</span>
            </a>
          </div>
        </div>
        
        
        
        
      </div>
      <div class="main-content">
        <div id="menu-button">
          <input type="checkbox" id="menu-checkbox">
          <label for="menu-checkbox" id="menu-label">
            <div id="hamburger"></div>
          </label>
        </div>

    