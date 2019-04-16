<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/login.css">
		<link rel="icon" href="https://assets.razerzone.com/razerid/images/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="https://assets.razerzone.com/razerid/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href=" <?php echo base_url();?>/assets/images/razer-logo-png-transparent.png">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
		
		<title><?= $judul ?></title>
	</head>
	<body>
		<section>
			<div class="container">
			<div class="row" style="height: 50px;">
				<a href="<?= base_url();?>index.php/home/login" style="padding-top: 15px;margin-right: 600px"><img src="https://assets.razerzone.com/razerid/images/razer_logo.svg" alt=""></a>
				<span style="color: #eee;padding-top: 20px;font-size: 12px;">Tidak punya akun?</span>
				<button class="daftar">DAFTAR</button>
				<div class="dropdown">
					<span class="btn btn-primary" data-toggle="dropdown" id="bahasa">
						<img src="<?=base_url();?>assets/icon/globe.png" alt="" style="width: 15px;height: 15px;">  BAHASA INDONESIA
					</span>
					<div class="dropdown-menu dropdown-menu-right">
						<li class="bahasa-list" data-lang="en"><a href="" class="bahasa-list">English</a></li>
						<li class="bahasa-list" data-lang="de-de"><a href="" class="bahasa-list">Deutsch</a></li>
						<li class="bahasa-list" data-lang="es-es"><a href="" class="bahasa-list">Español</a></li>
						<li class="bahasa-list" data-lang="fr-fr"><a href="" class="bahasa-list">Français</a></li>
						<li class="bahasa-list" data-lang="jp-jp"><a href="" class="bahasa-list">日本語</a></li>
						<li class="bahasa-list" data-lang="kr-kr"><a href="" class="bahasa-list">한국어</a></li>
						<li class="bahasa-list" data-lang="br-pt"><a href="" class="bahasa-list">Português (Brasileiro)</a></li>
						<li class="bahasa-list" data-lang="ru-ru"><a href="" class="bahasa-list">Русский</a></li>
						<li class="bahasa-list" data-lang="cn-zh"><a href="" class="bahasa-list"><span >简体中文</span></a></li>
						<li class="bahasa-list" data-lang="hk-zh"><a href="" class="bahasa-list"><span >繁體中文</span> (Hong Kong)</a></li>
						<li class="bahasa-list" data-lang="tw-zh"><a href="" class="bahasa-list"><span >繁體中文</span> (Taiwan)</a></li>
						<li class="bahasa-list" data-lang="ms-ms"><a href="" class="bahasa-list">Bahasa Melayu</a></li>
						<li class="bahasa-list" data-lang="th-th"><a href="" class="bahasa-list">ภาษาไทย</a></li>
						<li class="bahasa-list" data-lang="vi-vi"><a href="" class="bahasa-list">Tiếng Việt</a></li>
						<li class="bahasa-list" data-lang="id-id"><a href="" class="bahasa-list highlighted">Bahasa Indonesia</a></li>
					</div>
				</div>
				<a href="#" class="sup"><span class="supp">DUKUNGAN</span></a>
			<div class="color">
				<div class="box">
					<div class="text"></div>
				</div>
			</div>
			<span class="isian-txt" style="color: white;margin-top: 70px;margin-left: -250px;z-index: 3;font-size: 24px;font-family: Titillium">SELAMAT DATANG</span>
				<form action="" method="post" style="margin-top: -340px;">
					<div class="field">
						<input type="text" name="email" id="email" placeholder="" style="width: 45%;line-height: 30px;">
						<label for="email" class="text-label" style="color:white">Email</label>
					</div>
					<div class="field" style="margin-top: -40px;">
						<input type="password" name="pass" id="pass" placeholder="" style="width: 45%;" data-toggle="password">
						<label for="pass" class="text-label" >Sandi</label>
					</div>
				  </form>
				<span toggle="#pass" class="fa fa-fw fa-eye field-icon toggle-password"  style="z-index: 5;margin-top: -240px;margin-left: 50px;height: 5px;"></span>
				<a href="#" style="margin-left:-55px;margin-top: -215px;z-index: 5;color: #888;padding: -10px;height: 5px;width: auto"><small >Lupa sandi?</small></a>
				
				<button id="btn-razer" type="button" class="btn btn-lg btn-block" style="width: 290px;margin-left: -288px;margin-top: -120px;z-index: 5;height: 40px;padding-top: 3px;font-size: 16px;font-family: Titillium;border-radius: 3px;font-weight: bolder">MASUK</button>
				
				<span id="btn-daftar" type="button" class="btn btn-lg btn-block" style="width: 290px;margin-left: -290px;margin-top: -70px;z-index: 5;height: 40px;padding-top: 3px;font-size: 14px;font-family: Titillium;border-radius: 3px;font-weight: bolder" onClick="<?=base_url();?>/index.php/home/daftar">DAFTARKAN AKUN BARU</span>
				<a href="" style="z-index: 6;text-decoration: none;">
					<div  id="googlebtn" >
						<span style="background-color:white;padding-bottom:12px;margin-left:-30px;padding-left:5px;padding-top:6.5px;padding-right: 5px;margin-top: 5px;border-top-left-radius:4px;border-bottom-left-radius: 4px "><img src="https://assets.razerzone.com/razerid/images/ssi_logo_google.svg" alt="" style="width: 30px;height:25px;margin-bottom: 2px"></span>	
						<span style="margin-left: 30px;font-size: 12px;font-family: Titillium">Masuk dengan Google</span>
					</div>
				</a>
				<a href="" style="z-index: 6;text-decoration: none;">
					<div  id="fbbtn" >
						<span style="background-color:#3B5998;padding-bottom:12px;margin-left:-30px;padding-left:5px;padding-top:6.5px;padding-right: 5px;margin-top: 5px;border-top-left-radius:4px;border-bottom-left-radius: 4px; "><img src="https://assets.razerzone.com/razerid/images/ssi_logo_facebook.svg" alt="" style="width: 30px;height:25px;margin-bottom: 2px"></span>	
						<span style="margin-left: 30px;font-size: 12px;font-family: Titillium">Masuk dengan Facebook</span>
					</div>
				</a>
				<a href="" style="z-index: 6;text-decoration: none;">
					<div  id="twitchbtn" >
						<span style="background-color:#5738A1;padding-bottom:11.5px;margin-left:-30px;padding-left:5px;padding-top:6.5px;padding-right: 5px;margin-top: 5px;border-top-left-radius:4px;border-bottom-left-radius: 4px "><img src="https://assets.razerzone.com/razerid/images/ssi_logo_twitch.svg" alt="" style="width: 30px;height:25px;margin-bottom: 2px"></span>	
						<span style="margin-left: 30px;font-size: 12px;font-family: Titillium">Masuk dengan Twitch</span>
					</div>
				</a>
				<pre style="margin-left:170px; text-align: center;margin-top: 25px">
					<span style="color:#01CD01;font-family: Titillium;font-weight:lighter;">FOR GAMERS. BY GAMERS. <sup style="font-size: 9px">TM</sup></span>
				</pre>
				<pre style="margin-left:80px; text-align: center;margin-top: -25px">
					<span style="color:white;font-family: Titillium;font-weight:lighter;font-size: 12px;">Hak Cipta © 2019 Razer Inc. Semua Hak Dilindungi Undang-Undang. </span>
				</pre>
				<pre style="margin-left:80px; text-align: center;margin-top: -40px">
					<span style="color:white;font-family: Titillium;font-weight:lighter;font-size: 12px;">Berlaku <a href="#" class="footer">Ketentuan Layanan</a>, <a href="#" class="footer">Kebijakan Privasi</a> dan <a href="" class="footer">Kebijakan Cookie</a>.</span>
				</pre>
				<pre style="margin-left:200px; text-align: center;margin-top: -30px">
					<span style="color:white;font-family: Titillium;font-weight:bolder;font-size: 12px;">Suka yang Anda lihat? </span>
				</pre>
				<pre style="margin-left:-162px; text-align: center;margin-top: -20px;">
					<button id="btn-razer" type="button" class="btn btn-lg btn-block" style="width: 200px;z-index: 5;height: 30px;padding-top: 3px;font-size: 14px;font-family: Titillium;border-radius: 3px;padding: 0px;font-weight: bolder">PELAJARI SELENGKAPNYA</button>
				</pre>
		</section>
			
		</div>
	</body>
		<script>
			 function myFunction() {
  				var x = document.getElementById("pass");
  				if (x.type === "password") {
    				x.type = "text";
  				} else {
    				x.type = "password";
  				}
			 	} 
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