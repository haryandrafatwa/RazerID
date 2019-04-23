<script type="text/javascript">
		function cek(){
			document.getElementById("fName").addEventListener("keyup",function(){
				var nameInput = document.getElementById("fName").value;
				if (nameInput!=""){
					document.getElementById('button_id').removeAttribute("disabled");
				}else{
					document.getElementById('button_id').setAttribute("disabled",null);
				}
			});
			
			document.getElementById("lName").addEventListener("keyup",function(){
				var nameInput = document.getElementById("lName").value;
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
						<span class="sub-title">INFO PRIBADI</span>						
					</div>
					<form action="<?=base_url();?>index.php/user/editInfo" method="post" id="form1">
						<div class="row">
							<div class="col-6">
								<div style="margin-left: -20px;margin-top: 30px;font-size: 14px">
									<label style="display:block;color:#888" for="fName">Nama Depan</label>
									<input type="text" placeholder="Nama Depan" id="fName" value="<?=$user['first_name'];?>" style="padding: 5px 12px; background-color: transparent;color: white; border: 2px solid #555;width:300px" onKeyUp="cek();" name="fName">
								</div>
							</div>
							<div class="col-6">
								<div style="margin-top: 30px;font-size: 14px">
									<label style="display:block;color:#888" for="lName">Nama Belakang</label>
									<input type="text" placeholder="Nama Belakang" id="lName" value="<?=$user['last_name'];?>" style="padding: 5px 12px; background-color: transparent;color: white; border: 2px solid #555;width:300px" onKeyUp="cek();" name="lName">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-6">
								<div style="margin-left: -20px;margin-top:10px;font-size: 14px">
									<label style="display:block;color:#888" for="id">Jenis Kelamin</label>
									<select name="gender" id="gender" style="padding: 5px 12px; background-color: transparent;color: white; border: 2px solid #555;width:300px">
									<?php 
										$gender = $user['gender'];
										if($gender=="Manusia"){
									?>
										<option value="-" disabled>-</option>
										<option value="Pria">Pria</option>
										<option value="Wanita">Wanita</option>
										<option value="Manusia" selected>Manusia</option>
									<?php
										}elseif($gender=="Pria"){
									?>
										<option value="-" disabled>-</option>
										<option value="Pria" selected>Pria</option>
										<option value="Wanita">Wanita</option>
										<option value="Manusia">Manusia</option>
									<?php
										}elseif($gender=="Wanita"){
									?>
										<option value="-" disabled>-</option>
										<option value="Pria">Pria</option>
										<option value="Wanita" selected>Wanita</option>
										<option value="Manusia">Manusia</option>
									<?php
										}
									?>
									</select>
								</div>
							</div>
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