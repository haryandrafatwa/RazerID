<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="<?= base_url();?>/assets/icon/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?= base_url();?>/assets/icon/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" href="<?= base_url();?>/assets/css/navbar-razerid.css">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/akun_razerid.css">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/profile.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?=base_url();?>/bootstrap/css/bootstrap.css">
	<script src="<?=base_url();?>/bootstrap/js/bootstrap.js"></script>
	<title>
		<?= $judul;?>
	</title>
</head>

<body>
	<section>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center" style="padding: 0px;">
		<div class="container">
			<a class="navbar-brand" href="#" style="padding: 0px;margin-top: -5px;margin-bottom: -5px;margin-left: -20px;margin-right: 50px">
				<img src="<?=base_url();?>/assets/svg/wordmark.svg" alt="" width="115" height="60" >
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> </button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link text-uppercase" href="#">Akun</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-uppercase" href="#">Sambungan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-uppercase" href="#">Produk</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-uppercase" href="#">Dukungan</a>
					</li>
				</ul>
			</div>
			<div class="dropdown">
				<span class="nav-link" style="cursor: pointer;" href="#" id="drp-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img src="<?=base_url();?>/assets/images/sila_separator.jpg" class="rounded-circle" alt="" width="36px" height="36px" style="border: 2px solid white;">
				</span>
				<div class="dropdown-menu" aria-labelledby="drp-menu" id="sub-menu">
					<a class="dropdown-item text-capitalize" href="#">Edit gambar profile</a>
					<a class="dropdown-item text-capitalize" href="#">Keluar</a>
				</div>
			</div>
			<div class="dropdown">
					<span class="btn btn-trs" data-toggle="dropdown" id="bahasa" style="cursor: pointer">
						<img src="<?=base_url();?>assets/icon/globe.png" alt="" style="width: 14px;height: 14px;">  BAHASA INDONESIA
					</span>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a href="" class="dropdown-item">English</a>
						<a href="" class="dropdown-item">Deutsch</a>
						<a href="" class="dropdown-item">Español</a>
						<a href="" class="dropdown-item">Français</a>
						<a href="" class="dropdown-item">日本語</a>
						<a href="" class="dropdown-item">한국어</a>
						<a href="" class="dropdown-item">Português (Brasileiro)</a>
						<a href="" class="dropdown-item">Русский</a>
						<a href="" class="dropdown-item"><span >简体中文</span></a>
						<a href="" class="dropdown-item"><span >繁體中文</span> (Hong Kong)</a>
						<a href="" class="dropdown-item"><span >繁體中文</span> (Taiwan)</a>
						<a href="" class="dropdown-item">Bahasa Melayu</a>
						<a href="" class="dropdown-item">ภาษาไทย</a>
						<a href="" class="dropdown-item">Tiếng Việt</a>
						<a href="" class="dropdown-item" id="highlighted">Bahasa Indonesia</a>
					</div>
				</div>
		</div>
	</nav>