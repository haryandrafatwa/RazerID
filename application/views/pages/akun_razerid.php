<script>
	function editId(){
		return 
	}
</script>
<div class="body">
	<div class="opc">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="row" style="padding: 0px;margin-top: 40px;margin-bottom: -5px;margin-left: -20px;">
						<span class="sub-title">MASUK</span>
					</div>
					<a href="<?=base_url();?>/index.php/user/edit_razerid">
					<button class="content" style="border: none;color: white;width: 556px">
							<div class="row" style="margin-left: 0px;padding: 0px">
								<div class="col-lg-0" style="padding: 0px;"> Razer ID
								</div>
								<div class="col-lg-5 content-txt" style="padding: 0px;margin-left: 0px;"><?=$user['id'];?>
								</div>
								<div class="col-lg-5 content-txt" style="padding: 0px">
									<i class="fas fa-chevron-right" style="margin-left: 240px;"></i>
								</div>
							</div>
						</button>
					</a>
					<a href="<?=base_url();?>/index.php/user/edit_email">
						<button class="content" style="border: none;color: white;width: 556px">
							<div class="row" style="margin-left: 0px;padding: 0px">
								<div class="col-lg-0" style="padding: 0px;"> Email
								</div>
								<div class="col-lg-5 content-txt" style="padding: 0px;margin-left: 16px;"><?=$user['email'];?>
								</div>
								<div class="col-lg-5 content-txt" style="padding: 0px">
									<img src="https://assets.razerzone.com/razerid/web/images/icon_lock_gray.svg" class="profile-info-locked" style="margin-left: 240px;">
								</div>
							</div>
						</button>
					</a>
					<button class="content" style="border: none;color: white;width: 556px">
							<div class="row" style="margin-left: 0px;padding: 0px">
								<div class="col-lg-0" style="padding: 0px;"> Sandi
								</div>
								<div class="col-lg-5 content-txt" style="padding: 0px;margin-left: 16px;">
									<?php
										$psw = str_repeat('*',strlen(base64_decode($user['password'])));
										echo $psw;
									?>
								</div>
								<div class="col-lg-5 content-txt" style="padding: 0px">
									<img src="https://assets.razerzone.com/razerid/web/images/icon_lock_gray.svg" class="profile-info-locked" style="margin-left: 240px;">
								</div>
							</div>
						</button>
						<a href="#">
							<button class="content" style="border: none;color: white;width: 556px">
								<div class="row" style="margin-left: 0px;padding: 0px">
									<div class="col-lg-0" style="padding: 0px;"> Keluar
									</div>
									<div class="col-lg-5 content-txt" style="padding: 0px;margin-left: 100px;">
										Keluar dari semua perangkat Anda 
									</div>
									<div class="col-lg-3 content-txt" style="padding: 0px">
										<i class="fas fa-chevron-right" style="margin-left: 152px;"></i>
									</div>
								</div>
							</button>
						</a>
				</div>
				<div class="col-6">
					<div class="row" style="padding: 0px;margin-top: 40px;margin-bottom: -5px;margin-left: -20px;">
						<span class="sub-title">KEAMANAN</span>
					</div>
					<a href="<?=base_url();?>/index.php/user/edit_2ndemail">
						<button class="content" style="border: none;color: white;width: 556px">
							<div class="row" style="margin-left: 0px;padding: 0px">
								<div class="col-lg-0" style="padding: 0px;"> Email Pemulihan
								</div>
								<div class="col-lg-5 content-txt" style="padding: 0px;margin-left: -52px;">
									<?=
										$user['secondary_email'];
									?>
								</div>
								<div class="col-lg-4 content-txt" style="padding: 0px">
									<img src="https://assets.razerzone.com/razerid/web/images/icon_lock_gray.svg" class="profile-info-locked" style="margin-left: 240px;">
								</div>
							</div>
					</button>
					</a>
					<button class="content" style="border: none;color: white;width: 556px">
							<div class="row" style="margin-left: 0px;padding: 0px">
								<div class="col-lg-0" style="padding: 0px;"> Pusat Privasi
								</div>
								<div class="col-lg-8 content-txt" style="padding: 0px;margin-left: 20px;">
									Mengerti bagaimana data Anda digunakan
								</div>
								<div class="col-lg-1 content-txt" style="padding: 0px">
									<i class="fas fa-chevron-right" style="margin-left: 60px;"></i>
								</div>
							</div>
					</button>
					<button class="content" style="border: none;color: white;width: 556px">
							<div class="row" style="margin-left: 0px;padding: 0px">
								<div class="col-lg-0" style="padding: 0px;"> Otorisasi Aplikasi 
								</div>
								<div class="col-lg-8 content-txt" style="padding: 0px;margin-left: 8px;font-size: 12px">	
									Kontrol aplikasi mana saja yang mengakses data Anda 
								</div>
								<div class="col-lg-1 content-txt" style="padding: 0px">
									<img src="https://assets.razerzone.com/razerid/web/images/icon_lock_gray.svg" class="profile-info-locked" style="margin-left: 44px;">
								</div>
							</div>
					</button>
					<a href="<?=base_url();?>index.php/user/hapus_akun">
						<button class="content" style="border: none;color: white;width: 556px">
								<div class="row" style="margin-left: 0px;padding: 0px">
									<div class="col-lg-0" style="padding: 0px;"> Hapus ID 
									</div>
									<div class="col-lg-8 content-txt" style="padding: 0px;margin-left: px">		
										Hapus permanen akun Anda  
									</div>
									<div class="col-lg-2 content-txt" style="padding: 0px">
										<img src="https://assets.razerzone.com/razerid/web/images/icon_lock_gray.svg" class="profile-info-locked" style="margin-left: 98px;">
									</div>
								</div>
						</button>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="row" style="padding: 0px;margin-top: 40px;margin-bottom: -5px;margin-left: -20px;">
						<span class="sub-title">KONTAK</span>
					</div>
					<a href="<?=base_url();?>index.php/user/edit_info">
						<button class="content" style="border: none;color: white;width: 556px">
								<div class="row" style="margin-left: 0px;padding: 0px">
									<div class="col-lg-0" style="padding: 0px;"> Info Pribadi
									</div>
									<div class="col-lg-5 content-txt" style="padding: 0px;margin-left: 8px;">
										<?=$user['first_name'];?> <?=$user['last_name'];?>, <?=$user['gender'];?>
									</div>
									<div class="col-lg-5 content-txt" style="padding: 0px">
										<i class="fas fa-chevron-right" style="margin-left: 212px;"></i>
									</div>
								</div>
						</button>
					</a>
					<button class="content" style="border: none;color: white;width: 556px">
							<div class="row" style="margin-left: 0px;padding: 0px">
								<div class="col-lg-0" style="padding: 0px;"> Telepon Seluler
								</div>
								<div class="col-lg-3 content-txt" style="padding: 0px;margin-left: 0px;">
									<?=$user['mobile_phone'];?>
								</div>
								<div class="col-lg-6 content-txt" style="padding: 0px">
									<img src="https://assets.razerzone.com/razerid/web/images/icon_lock_gray.svg" class="profile-info-locked" style="margin-left: 284px;">
								</div>
							</div>
					</button>
					<button class="content" style="border: none;color: white;width: 556px">
							<div class="row" style="margin-left: 0px;padding: 0px">
								<div class="col-lg-0" style="padding: 0px;"> Alamat Penagihan
								</div>
								<div class="col-lg-2 content-txt" style="padding: 0px;margin-left: 4px;">
									<?=$user['address'];?>
								</div>
								<div class="col-lg-7 content-txt" style="padding: 0px">
									<img src="https://assets.razerzone.com/razerid/web/images/icon_lock_gray.svg" class="profile-info-locked" style="margin-left: 306px;">
								</div>
							</div>
					</button>
					<button class="content" style="border: none;color: white;width: 556px">
							<div class="row" style="margin-left: 0px;padding: 0px">
								<div class="col-lg-0" style="padding: 0px;"> Notifikasi 
								</div>
								<div class="col-lg-5 content-txt" style="padding: 0px;margin-left: 88px;">
									Pilih cara Anda menerima notifikasi 
								</div>
								<div class="col-lg-3 content-txt" style="padding: 0px">
									<i class="fas fa-chevron-right" style="margin-left: 144px;"></i>
								</div>
							</div>
					</button>
				</div>
			</div>