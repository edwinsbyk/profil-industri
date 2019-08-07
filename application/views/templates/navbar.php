<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <title><?= $title; ?></title>

  <!-- Styles -->
  <link href="<?= base_url('assets/'); ?>css/page.min.css" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="<?= base_url('assets/'); ?>img/apple-touch-icon.png">
  <link rel="icon" href="<?= base_url('assets/'); ?>img/favicon.png">

  <!--  Open Graph Tags -->
  <meta property="og:title" content="Global Intermedia">
  <meta property="og:description" content="Berpikir secara global, bertindak secara global, dan maju bersama maraih kejayaan.">
  <meta property="og:image" content="http://edwinsbyk.me/assets/img/og-img.jpg">
  <meta property="og:url" content="http://edwinsbyk.me/">
  <meta name="twitter:card" content="summary_large_image">
</head>

<body>



  <!-- Navbar -->
  <nav class="<?php $url = current_url();

              if ($url == base_url('home/kontak') or $url == base_url('home/berita')) {
                $nav = ('navbar navbar-expand-lg navbar-dark navbar-stick-dark" data-navbar="sticky');
                // } elseif ($url == base_url('home/berita/' . $this->uri->segment('3'))) {
                //   $nav = ('navbar navbar-expand-lg navbar-dark navbar-stick-dark" data-navbar="smart');
              } else {
                $nav = ('navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="smart');
              }

              echo $nav
              ?>">

    <div class="container">

      <div class="navbar-left mr-auto">
        <button class="navbar-toggler" type="button">&#9776;</button>
        <a class="navbar-brand" href="<?= base_url(''); ?>">
          <img class="logo-dark" src="<?= base_url('assets/'); ?>img/logo-dark.svg" alt="logo">
          <img class="logo-light" src="<?= base_url('assets/'); ?>img/logo-light.svg" alt="logo">
        </a>
      </div>

      <section class="navbar-mobile">
        <nav class="nav nav-navbar mr-auto">
          <a class="nav-link" href="<?= base_url('home/profil'); ?>">Profil</a>
          <a class="nav-link" href="<?= base_url('home/solusi'); ?>">Solusi</a>
          <a class="nav-link" href="<?= base_url('home/portfolio'); ?>">Portfolio</a>
          <a class="nav-link" href="<?= base_url('home/karir'); ?>">Karir</a>
          <a class="nav-link" href="<?= base_url('home/kontak'); ?>">Kontak</a>
          <a class="nav-link" href="<?= base_url('home/galeri'); ?>">Galeri</a>
          <a class="nav-link" href="<?= base_url('home/berita'); ?>">Berita</a>

        </nav>
      </section>
    </div>
  </nav><!-- /.navbar -->