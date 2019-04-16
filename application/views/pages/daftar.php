<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/daftar.css">
		<link rel="icon" href="https://assets.razerzone.com/razerid/images/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="https://assets.razerzone.com/razerid/images/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
		
		<title><?= $judul ?></title>
	</head>

<body>
	<section>
		<nav class="navbar navbar-expand-lg navbar-dark bg-trans justify-content-center" style="margin-top: -8px;">
		  <a class="navbar-brand" href="#" style="margin-left: 80px;">
			<img src="https://assets.razerzone.com/razerid/images/razer_logo.svg" alt="">
		  </a>
		  <div class="collapse navbar-collapse justify-content-end" id="navbarNav" style="margin-right: 80px;">
			<ul class="navbar-nav">
				<span class="nav-link" href="#"  style="color: white;padding-top: 20px;font-size: 12px;margin-top: -8px">
					Sudah punya akun? 
					<span class="sr-only">(current)</span>
				</span>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url();?>/index.php/home/login"><button class="masuk">MASUK</button></a>
				</li>
				<li class="nav-item dropdown">
					<span class="btn btn-primary" data-toggle="dropdown" id="bahasa">
						<img src="<?=base_url();?>assets/icon/globe.png" alt="" style="width: 15px;height: 15px;">  BAHASA INDONESIA
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
				</li>
				<li class="nav-item" style="margin-top: 6px;">
					<a href="#" class="sup"><span class="supp">DUKUNGAN</span></a>
				</li>
			  </ul>
		  </div>
		</nav>
		<div class="container-xl">
			<div class="row">
				<div class="col-xl">
					<div class="color">
						<div class="box">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4"></div>
				<div class="col-xl-4">
					<div style="text-align: center; margin-top: -460px;z-index: 10">
						<span style="color: white;z-index: 10;font-family: Titillium; font-size: 24px;">BERGABUNG DENGAN<br>RAZER</span>
						<form action="" method="post">
							<div class="field" style="margin-top: 30px">
								<input type="text" name="email" id="email" placeholder="" style="width: 65%;line-height: 30px;font-family: Titillium;">
								<label for="email" class="text-label" style="color:white;display: block;margin-left:75px;margin-top: -55px;position: relative;text-align: left;font-family: Titillium;">Email</label>
							</div>
							<div class="field" style="margin-top: 65px">
								<input type="text" name="razerid" id="razerid" placeholder="" style="width: 65%;font-family: Titillium;" data-toggle="razerid">
								<label for="razerid" class="text-label" style="display: block;margin-left:75px;margin-top: -55px;text-align: left;font-family: Titillium;" >Razer ID</label>
							</div>
							<div class="field" style="margin-top: 60px">
								<input type="password" name="pass" id="pass" placeholder="" style="width: 65%;font-family: Titillium;" data-toggle="password">
								<label for="pass" class="text-label" style="display:block; margin-left:75px;margin-top: -55px;text-align: left;font-family: Titillium;">Sandi</label>
								<span toggle="#pass" class="fa fa-fw fa-eye field-icon toggle-password"  style="z-index: 5;margin-top: 0px;margin-right:80px;height: 5px;"></span>
							</div>
							<div class="field" style="margin-top: 100px;">
								<input type="submit" name="submit" value="MULAI" style="width: 280px;z-index: 5;height: 40px;padding-top: 3px;font-size: 16px;font-family: Titillium;border-radius: 2px;font-weight: bolder;border: none" id="btn-razer">	
								<br>
								<a href="<?=base_url();?>/index.php/home/login" style="text-decoration: none;font-family: Titillium;font-size: 16px;">
									<span id="btn-login" class="btn">
										SUDAH PUNYA AKUN?
									</span>
								</a>
							</div>						
						  </form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3"></div>
				<div class="col-xl-6">
					<div class="row justify-content-center" style="margin-top: 15px;margin-left: 5px;">
						<div style="text-align: center;margin-right:60px;margin-top: 22px">
							<a href="#" id="btn-ssi">
								<span style="background-color:white;padding-bottom:5px;margin-left:-30px;padding-left:1px;padding-top:2.5px;padding-right: 1px;margin-top: 5px;border-top-left-radius:3px;border-bottom-left-radius: 3px; "><img src="https://assets.razerzone.com/razerid/images/ssi_logo_google.svg" alt="" style="width: 30px;height:25px;margin-bottom: 2px"></span>
								<span style="margin-top: 20px;height: 30px;font-size: 14px;font-family: Titillium;font-weight: bolder;" id="googlebtn">Masuk dengan Google</span>
							</a>
						</div>
						<div style="text-align: center;margin-right:60px;margin-top: 22px">
							<a href="#" id="btn-ssi">
								<span style="background-color:#3B5998;padding-bottom:5px;margin-left:-30px;padding-top:3px;padding-right: 1px;margin-top: 5px;border-top-left-radius:3px;border-bottom-left-radius: 3px; "><img src="https://assets.razerzone.com/razerid/images/ssi_logo_facebook.svg" alt="" style="width: 30px;height:25px;margin-bottom: 4px;"></span>
								<span style="margin-top: 20px;height: 30px;font-size: 14px;font-family: Titillium;font-weight: bolder;" id="fbbtn">Masuk dengan Facebook</span>
							</a>
						</div>
						<div style="text-align: center;margin-top: 22px">
							<a href="#" id="btn-ssi">
								<span style="background-color:#5738A1;padding-bottom:5px;margin-left:-30px;padding-top:3px;padding-right: 2px;margin-top: 5px;border-top-left-radius:3px;border-bottom-left-radius: 3px; "><img src="https://assets.razerzone.com/razerid/images/ssi_logo_twitch.svg" alt="" style="width: 30px;height:25px;margin-bottom: 4px;"></span>
								<span style="margin-top: 20px;height: 30px;font-size: 14px;font-family: Titillium;font-weight: bolder;" id="twitchbtn">Masuk dengan Twitch</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl"></div>
				<div class="col-xl">
					<div class="justify-content-center" style="text-align: center;margin-top: 20px;">
								<span style="color:#01CD01;font-family: Titillium;font-weight:lighter;">FOR GAMERS. BY GAMERS. <sup style="font-size: 9px">TM</sup></span>
						</div>
						<div style="text-align: center;">
								<span style="color:white;font-family: Titillium;font-weight:lighter;font-size: 12px;">Hak Cipta © 2019 Razer Inc. Semua Hak Dilindungi Undang-Undang. </span>
						</div>
						<div style="text-align: center;">
								<span style="color:white;font-family: Titillium;font-weight:lighter;font-size: 12px;">Berlaku <a href="#" class="footer">Ketentuan Layanan</a>, <a href="#" class="footer">Kebijakan Privasi</a> dan <a href="" class="footer">Kebijakan Cookie</a>.</span>
						</div>
						<div style="text-align: center;margin-left: auto;margin-right: auto">
								<span style="color:white;font-family: Titillium;font-weight:bolder;font-size: 12px;">Suka yang Anda lihat? </span>
						</div>
						<div style="text-align: center;margin-top: 20px;">
							<a href="#" class="btn btn-lg" style="width: 200px;z-index: 5;height: 30px;font-size: 14px;font-family: Titillium;border-radius: 3px;font-weight: bolder;padding: 0px;padding-top:3px;" id="btn-razer">PELAJARI SELENGKAPNYA</a>
						</div>
				</div>
				<div class="col-xl"></div>
			</div>
		</div>
	</section>
</body>
	<script>
			$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
		</script>
</html>
