<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php
$ci = new CI_Controller();
$ci = &get_instance();
$ci->load->helper('url');
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<title>Halaman yang ada tuju tidak tersedia</title>

	<!-- Styles -->
	<link href="<?= base_url('assets/') ?>css/page.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">

	<!-- Favicons -->
	<link rel="apple-touch-icon" href="<?= base_url('assets/') ?>img/apple-touch-icon.png">
	<link rel="icon" href="<?= base_url('assets/') ?>img/favicon.png">
</head>

<body class="layout-centered bg-gray">


	<!-- Main Content -->
	<main class="main-content text-center pb-lg-8">
		<div class="container">

			<h1 class="display-1 text-muted mb-7">Halaman tidak ditemukan</h1>
			<p class="lead"></p>
			<br>
			<button class="btn btn-secondary w-150 mr-2" type="button" onclick="window.history.back();">Kembali</button>
			<a class="btn btn-secondary w-150" href="<?= base_url('home') ?>">Beranda</a>

		</div>
	</main><!-- /.main-content -->


	<!-- Scripts -->
	<script src="<?= base_url('assets/') ?>js/page.min.js"></script>
	<script src="<?= base_url('assets/') ?>js/script.js"></script>

</body>

</html>