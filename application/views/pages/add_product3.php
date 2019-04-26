<div class="body" style="background-color: rgba(34,34,34,1.00); ">
	<div class="opc" style="height: 100%;background-color: transparent">
		<div class="container">
			<div class="row" >			
				<div class="col-9">
					<div class="row" style="padding: 0px;margin-top: 40px;margin-bottom: -5px;margin-left: -20px;">
						<span class="sub-title">MENDAFTARKAN PRODUK</span>						
					</div>
					<div class="row" style="padding: 0px;margin-top: 15px;margin-bottom: -5px;margin-left: -20px;">
						<div class="col-2" style="margin: 0px;padding: 0px">
							<span class="sub-title-2">LANGKAH 1</span>	
						</div>
						<div class="col-2" style="margin-left: -30px;padding: 0px">
							<span class="sub-title-2" >LANGKAH 2</span>	
						</div>
						<div class="col-2" style="margin-left: -30px;padding: 0px">
							<span class="sub-title-2" id="highlighted">LANGKAH 3</span>	
						</div>
					</div>
				</div>
			</div>
			
			<div class="row" style="padding: 0px;margin-top: 40px;margin-bottom: -5px;margin-left: -20px;">
				<span class="text-uppercase" style="margin-left: -5px;">Tinjau Informasi Anda</span>						
			</div>
			<div class="row" style="padding: 0px;margin-top: 30px;margin-bottom: -5px;margin-left: -20px;">
				<form action="<?=base_url();?>/index.php/user/add_product">
					<div class="col-12" style="padding: 0px;margin-left: -5px;">
						<div class="row">
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;margin-bottom: -2px" for="sn">Jenis Produk</label>
								<span style="padding:0px; background-color: transparent;color: white; border: none;width:300px;font-size: 14px;"><?= $data['product_type']; ?></span>
							</div>
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;margin-bottom: -2px" for="sn">Nomor seri atau ID Unik</label>
								<span style="padding:0px; background-color: transparent;color: white; border: none;width:300px;font-size: 14px;"><?= $data['serial_number'];?></span>	
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;margin-bottom: -2px" for="sn">Nomor Produk</label>
								<span style="padding:0px; background-color: transparent;color: white; border: none;width:300px;font-size: 14px;"><?=$data['product_number'];?></span>		
							</div>
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;margin-bottom: -2px" for="sn">Tanggal Pembelian</label>
								<span style="padding:0px; background-color: transparent;color: white; border: none;width:300px;font-size: 14px;"><?=$data['transaction_date'];?></span>	
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;margin-bottom: -2px" for="sn">Negara Pembelian</label>
								<span style="padding:0px; background-color: transparent;color: white; border: none;width:500px;font-size: 14px;display: block"><?=$data['location'];?></span>
							</div>
						</div>
						
						<div class="row" style="padding: 0px;margin-top: 40px;margin-bottom: -5px;margin-left: 0px">
							<span class="text-uppercase">Tinjau Informasi Anda</span>		
						</div>
						<div class="row" style="margin-top: 30px;">
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;margin-bottom: -2px" for="sn">Nama Depan</label>
								<span style="padding:0px; background-color: transparent;color: white; border: none;width:300px;font-size: 14px;"><?=$data['first_name'];?></span>		
							</div>
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;margin-bottom: -2px" for="sn">Nama Belakang</label>
								<span style="padding:0px; background-color: transparent;color: white; border: none;width:300px;font-size: 14px;"><?=$data['last_name'];?></span>	
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;margin-bottom: -2px" for="sn">Alamat</label>
								<span style="padding:0px; background-color: transparent;color: white; border: none;width:300px;font-size: 14px;"><?=$data['address'];?></span>		
							</div>
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;margin-bottom: -2px" for="sn">Apartemen</label>
								<span style="padding:0px; background-color: transparent;color: white; border: none;width:300px;font-size: 14px;"><?=$data['apart'];?></span>	
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;margin-bottom: -2px" for="sn">Kota</label>
								<span style="padding:0px; background-color: transparent;color: white; border: none;width:300px;font-size: 14px;"><?=$data['city'];?></span>		
							</div>
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;margin-bottom: -2px" for="sn">Status</label>
								<span style="padding:0px; background-color: transparent;color: white; border: none;width:300px;font-size: 14px;"><?=$data['status'];?></span>	
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;margin-bottom: -2px" for="sn">ZIP/Kode Pos</label>
								<span style="padding:0px; background-color: transparent;color: white; border: none;width:300px;font-size: 14px;"><?=$data['zip'];?></span>		
							</div>
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;margin-bottom: -2px" for="sn">Lokasi</label>
								<span style="padding:0px; background-color: transparent;color: white; border: none;width:300px;font-size: 14px;"><?=$data['location'];?></span>	
							</div>
						</div>
						<div class="row" style="margin-top: 60px;">
							<div class="col-6">
								<a href="<?=base_url();?>index.php/user/add_product">
									<span class="btn btnedit" style="background-color: #555; color:white;padding: 8px 36px">
										KEMBALI
									</span>
								</a>
							</div>
							<div class="col-6">
								<input id="button_id" type="submit" class="btn btnedit" value="DAFTAR" style="background-color: #01CD01; color:black;padding: 8px 0px;margin-left:-100px;width:150px;text-align: center">
							</div>
						</div>
					</div>	
				</form>		
			</div>
			
			