<!DOCTYPE html>
<html lang="en">
<head>
    <link href="assets/css/header.css" rel="stylesheet">
</head>
<body>
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex justify-content-between align-items-center">

    <div class="logo">
      <a href="index.html">
          <img src="assets/img/logo.svg" alt="Moderna Logo">
      </a>
    </div>
  
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' || basename($_SERVER['PHP_SELF']) == '') ? 'active' : ''; ?>" href="index.html">Domov</a></li>
        <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'prevozi.php') ? 'active' : ''; ?>" href="prevozi.php">Prevozi</a></li>
        <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'warehouse.php') ? 'active' : ''; ?>" href="warehouse.php">Skladiščenje</a></li>
        <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'truckservice.php') ? 'active' : ''; ?>" href="truckservice.php">Servis vozil</a></li>
        <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Kontakti</a></li>
        <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'transportoffers.php') ? 'active' : ''; ?>" href="transportoffers.php">Pridobi ponudbe</a></li>
        <li><a href="https://rok.falco.piltek.com/" class="myb-button">myB</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->    

  </div>
</header><!-- End Header -->

