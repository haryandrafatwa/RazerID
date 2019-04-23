<script type="text/javascript">
		function cek(){
			document.getElementById("newEmail").addEventListener("keyup",function(){
				var nameInput = document.getElementById("newEmail").value;
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
				<?php if ($this->session->flashdata('flash')) : ?>
					<div id="success" class="btn" style="color: #44d62c;border: 1px solid #44d62c;padding:15px;width: 100%;text-align: left;margin-top: 40px;">
						<i class="fas fa-check"></i>
						<span><?= $this->session->flashdata('flash'); ?></span>
					</div>
   				<?php endif; ?>				
				<div class="col-6">
					<div class="row" style="padding: 0px;margin-top: 40px;margin-bottom: -5px;margin-left: -20px;">
						<span class="sub-title">EMAIL</span>						
					</div>
					<div style="margin-left: -20px;margin-top: 24px;font-size: 14px">
							<label style="display:block;color:white;font-size: 16px;font-weight: bold" for="id">EMAIL TERKINI</label>
							<label style="display:block;color:#888;" for="id">Alamat email Anda yang terverifikasiI</label>
							<input type="text" placeholder="Pilih Razer ID" id="id" value="<?=$user['email'];?>" style="padding: 5px 12px; background-color: transparent;color: white; border: 1px solid #333;width:300px" onKeyUp="cek();" name="id" readonly disabled>
						</div>
					
					<form action="<?=base_url();?>index.php/user/editemail" method="post" id="form1">
						<div style="margin-left: -20px;margin-top: 50px;font-size: 14px">
							<label style="display:block;color:white;font-size: 16px;font-weight: bold" for="id">EMAIL BARU</label>
							<input type="text" placeholder="Email Baru" id="newEmail" value="" style="padding: 5px 12px; background-color: transparent;color: white; border: 2px solid #555;width:300px" onKeyUp="cek();" name="newEmail">
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
								<input id="button_id" type="submit" class="btn btnedit" value="SIMPAN" style="background-color: #01CD01; color:black;padding: 8px 36px;margin-left:-132px;"disabled>
							</div>
						</div>
					</form>
				</div>
			</div>