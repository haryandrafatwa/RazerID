<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<link rel="icon" href="<?= base_url();?>/assets/icon/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?= base_url();?>/assets/icon/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/index.css">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/navbar.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?=base_url();?>/bootstrap/css/bootstrap.css">
	<script src="<?=base_url();?>/bootstrap/js/bootstrap.js"></script>
	<title>
		<?= $judul;?>
	</title>

	<script>
		function myDropdown( e ) {
			e.stopPropagation();
		}
	</script>
	<style>
		html,body{
			width: 100%;
			height: 100%;
			margin: 0px;
			padding: 0px;
			overflow-x: hidden;
		}
	</style>
</head>

<body style="margin: 0px; padding: 0px;">
	<div class="fixed-top" style="padding: 0px;background-color: #222222;"margin: 0px">
		<nav class="navbar navbar-expand-lg navbar-dark" style="margin: -20px;">
		<div class="container" style="margin-left: 180px;margin-right: 180px;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> </button>
			<a class="navbar-brand" href="#"><img src="<?=base_url();?>/assets/svg/wordmark.svg" alt="" width="100" height="50" ></a>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto" style="justify-content: center;vertical-align: middle">
					<li class="nav-item dropdown" id="dropdown">
						<a class="nav-link" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false" style="padding:16px;">
						  PRODUCTS
						</a>
						<ul class="dropdown-menu" id="dropdown-menu" style="background-color: black;" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" id="bodas" href="#">Laptops<sup style="vertical-align: super;font-size: 11px;line-height:0px; top:0px;"> New</sup></a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Mobile</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Mice & Mats</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Keyboards</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Headsets & Audio</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Broadcaster</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Console [PS4 / Xbox]</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Desktops, Displays & Routers <sup style="vertical-align: super;font-size: 11px;line-height:0px; top:0px;">New</sup></a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Licensed & Collections</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Gear, Apparel & Bags</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Razer Gold & Silver</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown" id="dropdown">
						<a class="nav-link" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false" style="padding:16px;">
						  SOFTWARE
						</a>
						<ul class="dropdown-menu" id="dropdown-menu" style="background-color: black;" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" id="bodas" href="#">Cortex Game Booster</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Synapse 3 IOT Drivers (Beta)</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Chroma RGB</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">SoftMiner (beta)</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Surround</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Synapse 2.0 (Legacy)</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown" id="dropdown">
						<a class="nav-link" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false" style="padding:16px;">
						  COMMUNITY
						</a>
						<ul class="dropdown-menu" id="dropdown-menu" style="background-color: black;" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" id="bodas" href="#">Get Started</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Insider</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Esports</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Campaigns</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Developers</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Chroma Workshop</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Made With Blade</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Media & Downloads</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Concepts</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown" id="dropdown">
						<a class="nav-link" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false" style="padding:16px;">
						  STORE
						</a>
						<ul class="dropdown-menu" id="dropdown-menu" style="background-color: black;" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" id="bodas" href="#">RazerStore (Online)</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">RazerStore (Retail)</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown " id="dropdown">
						<a class="nav-link" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false" style="padding:16px;">
						  SUPPORT
						</a>
						<ul class="dropdown-menu" id="dropdown-menu" style="background-color: black;" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" id="bodas" href="#">Product Support</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Returns & Refunds</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">RazerCare Protection Plan</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Product Registration</a>
							</li>
							<li><a class="dropdown-item" id="bodas" href="#">Warranty Information</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<a href="#"><img src="<?=base_url();?>/assets/svg/search.svg" alt="" class="menu-icon"></a>
			<div class="dropdown" style="padding: 0px;">
				<span class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<a href="#"><img src="<?=base_url();?>/assets/svg/cart.svg" alt="" class="menu-icon"></a>
				</span>
				<div class="dropdown-menu sub-menu" aria-labelledby="dropdownMenuButton">
					<div class="container">
						<div class="row">
							<div class="close-cart" style="position: absolute;right: 2rem; top: 1rem;cursor: pointer;font-size: 2rem;line-height:1rem;color: #888">×
							</div>
						</div>
						<div class="row">
							<div class="col-sm">
								<span id="txt-razer">MY CART</span>
							</div>
						</div>
						<div class="dropdown-divider"></div>
						<div class="row justify-content-center" style="padding: 5px;">
							<span class="itm">Your Cart is empty</span>
						</div>
						<div class="row justify-content-center">
							<a href="<?=base_url();?>/index.php/home/login" class="itm">Sign in</a>
						</div>
					</div>
				</div>
			</div>
			<div class="language"> <img src="<?=base_url();?>/assets/icon/US.png" alt="">
				<a href="#" style="text-decoration: none;color: #888;"><span id="us">US</span></a>
			</div>
		</div>
	</nav>
	</div>
	