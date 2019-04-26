<script type="text/javascript">
		function cek(){
			document.getElementById("pass").addEventListener("keyup",function(){
				var nameInput = document.getElementById("pass").value;
				if (nameInput!=""){
					document.getElementById('button_id').removeAttribute("disabled");
				}else{
					document.getElementById('button_id').setAttribute("disabled",null);
				}
			});
		}
</script>
<div class="body" style="background-color: rgba(34,34,34,1.00);height:652px; ">
	<div class="opc" style="height: 100%;background-color: transparent">
		<div class="container">
			<div class="row" >	
				<?php if ($this->session->flashdata('gagal')) : ?>
					<div id="success" class="btn" style="color: red;border: 1px solid red;padding:15px;width: 100%;text-align: left;margin-top: 40px;">
						<i class="fas fa-times"></i>
						<span><?= $this->session->flashdata('gagal'); ?></span>
					</div>
   				<?php endif; ?>	
				<div class="col-6">
					<div class="row" style="padding: 0px;margin-top: 40px;margin-bottom: -5px;margin-left: -20px;">
						<span class="sub-title">HAPUS AKUN</span>						
					</div>
					<div style="margin-top: 20px;margin-left: -20px; width:800px">
						<span style="font-size: 13px;">Akun Razer Anda akan dihapus secara permanen. <br>Profil, informasi akun, dan semua pengaturan, dan data Anda yang tersimpan di awan akan dihapus; semua ini tidak bisa diambil kembali.</span>
					</div>
					<form action="<?=base_url();?>index.php/user/hapusAkun" method="post" id="form1">
						<div style="margin-left: -20px;margin-top: 30px;font-size: 14px">
							<label style="display:block;color:#eee;font-size: 16px" for="id">MASUKKAN SANDI</label>
							<input type="password" placeholder="Masukkan Sandi" id="pass" value="" style="padding: 5px 12px; background-color: transparent;color: white; border: 2px solid #555;width:300px" onKeyUp="cek();" name="pass" data-toggle="password">
							<span toggle="#pass" class="fa fa-fw fa-eye field-icon toggle-password"  style="z-index: auto;margin-left:-30px;height: 5px;"></span>
						</div>
						<div class="row" style="margin-top: 80px">
							<div class="col-6" style="margin-left: -20px;">
								<a href="<?=base_url();?>index.php/user/account">
								<span class="btn btnedit" style="background-color: #555; color:white;padding: 8px 36px">
									KEMBALI
								</span>
							</a>
							</div>
							<div class="col-6">
								<input id="button_id" type="submit" class="btn btnedit" value="KONFIRMASIKAN" style="background-color: #01CD01; color:black;padding: 8px 36px;margin-left:-132px;"disabled>
							</div>
						</div>
					</form>
				</div>
			</div>