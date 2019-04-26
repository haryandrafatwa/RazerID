<div class="body" style="height: 652px;">
	<div class="opc" style="height: 100%;">
		<div class="container">
			<div class="row">
				<?php if ($this->session->flashdata('berhasil')) : ?>
					<div id="success" class="btn" style="color: rgba(0,255,0,1.00);border: 1px solid rgba(0,255,0,1.00);padding:15px;width: 100%;text-align: left;margin-top: 40px;">
						<i class="fas fa-check"></i>
						<span><?= $this->session->flashdata('berhasil'); ?></span>
					</div>
   				<?php endif; ?>	
				<div class="col-12">
					<div class="row" style="padding: 0px;margin-top: 40px;margin-bottom: -5px;margin-left: -20px;">
						<span class="sub-title" style="font-size: 24px">PRODUK TERDAFTAR</span>
					</div>
					<div class="row" style="margin-left: -33px;margin-top: 28px;">
						<div class="col-3">
							<a href="<?=base_url();?>index.php/user/addNew_product" style="text-decoration: none;">
								<div class="card box-ipt" style="width: 13.5rem;height: 8rem;background-color: black;margin-top: 10px;">
									<img src="<?=base_url();?>assets/svg/add_product.svg" class="card-img-top" alt="..." width="40px" height="40px" style="margin-top:25px;">
									<div class="card-body text-center" style="padding: 0px;margin-top: 8px;">
										<p class="card-text text-uppercase" style="font-size: 13px;color: #44d62c">
											Mendaftarkan produk baru
										</p>
									</div>
								</div>
							</a>
						</div>
						<?php foreach ($product as $esgim):?>
						<div class="col-3">
								<div class="card" style="width: 13.5rem;height: 8rem;background-color: black;margin-top: 10px;">
									<?php
										echo '<img src="data:image/png;base64,'.base64_encode($esgim['photo']).'" class="card-img-top" alt="" style="transform:scale(0.7);margin-top:-20px;"/>';
									?>
									<div class="card-body text-center" style="padding: 0px;margin-top: 8px;">
										<p class="card-text text-uppercase" style="font-size: 13px;color: #44d62c">
											<?=$esgim['name_product'];?> <?=$esgim['desc'];?>
										</p>
									</div>
								</div>
						</div>
						<?php endforeach;?>
					</div>
					<div class="row" style="padding: 0px;margin-top: 80px;margin-bottom: -5px;margin-left: -20px;">
						<span class="sub-title" style="font-size: 24px">DUKUNGAN RAZER</span>
					</div>
					<div class="row content" style="width: 600px;height: 50px;">
						<div class="col-lg-4" style="padding: 0px;margin-top: -5px;">Dukungan produk
						</div>
						<div class="col-lg-6 content-txt" style="padding: 0px;margin-left: -20px;margin-top: -16px;">
							Dapatkan bantuan untuk menggunakan produk Razer
						</div>
						<div class="col-lg-2 content-txt" style="padding: 0px">
							<i class="fas fa-chevron-right" style="margin-left: 100px;"></i>
						</div>
					</div>
					<div class="row content" style="width: 600px;height: 50px;">
						<div class="col-lg-4" style="padding: 0px;margin-top: -5px;"> Dukungan RazerStore
						</div>
						<div class="col-lg-6 content-txt" style="padding: 0px;margin-left: -20px;margin-top: -16px;">
							Semua yang perlu diketahui tentang RazerStore
						</div>
						<div class="col-lg-2 content-txt" style="padding: 0px">
							<i class="fas fa-chevron-right" style="margin-left: 100px;"></i>
						</div>
					</div>
				</div>
			</div>