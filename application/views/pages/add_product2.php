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
							<span class="sub-title-2" id="highlighted">LANGKAH 2</span>	
						</div>
						<div class="col-2" style="margin-left: -30px;padding: 0px">
							<span class="sub-title-2">LANGKAH 3</span>	
						</div>
					</div>
				</div>
			</div>
			
			<div class="row" style="padding: 0px;margin-top: 40px;margin-bottom: -5px;margin-left: -20px;">
				<span class="text-uppercase" style="margin-left: -5px;">Harap diberikan informasi berikut</span>						
			</div>
			<div class="row" style="padding: 0px;margin-top: 30px;margin-bottom: -5px;margin-left: -20px;">
				<form action="<?=base_url();?>index.php/user/add2/" method="post">
					<input type="text" value="<?=$serial_number;?>" id="sn" name="sn" style="display: none">
					<input type="date" value="<?=$transaction_date;?>" id="td" name="td" style="display: none">
					<input type="text" value="<?=$location;?>" id="lc" name="lc" style="display: none">
					<div class="col-12" style="padding: 0px;margin-left: -5px;">
						<div class="row">
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;" for="first_name">Nama Depan</label>
								<input type="text" placeholder="Nama Depan" id="first_name" value="" style="padding: 5px 12px; background-color: transparent;color: white; border: 1px solid #333;width:300px;font-size: 14px;" onKeyUp="cek();" name="first_name" required>	
							</div>
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;" for="last_name">Nama Belakang</label>
								<input type="text" placeholder="Nama Belakang" id="last_name" value="" style="padding: 5px 12px; background-color: transparent;color: white; border: 1px solid #333;width:300px;font-size: 14px;" onKeyUp="cek();" name="last_name" required>	
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;" for="address">Alamat</label>
								<input type="text" id="address" placeholder="Alamat jalan, Kotak Pos, d/a" style="padding: 5px 12px; background-color: transparent;color: white; border: 1px solid #333;width:300px;font-size: 14px;" name="address" required>	
							</div>
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;" for="apart">Apartemen</label>
								<input type="text" id="apart" placeholder="Apartemen, Suit, Unit, Gedung, Lantai" style="padding: 5px 12px; background-color: transparent;color: white; border: 1px solid #333;width:300px;font-size: 14px;" name="apart" required>	
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;" for="city">Kota</label>
								<input type="text" id="city" placeholder="Kota" style="padding: 5px 12px; background-color: transparent;color: white; border: 1px solid #333;width:300px;font-size: 14px;" name="city" required>	
							</div>
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;" for="status">Status</label>
								<input type="text" id="status" placeholder="Negara Bagian, Provinsi, Daerah, Distrik" style="padding: 5px 12px; background-color: transparent;color: white; border: 1px solid #333;width:300px;font-size: 14px;" name="status" required>	
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;" for="zip">ZIP/Kode Pos</label>
								<input type="text" id="zip" placeholder="ZIP/Kode Pos" style="padding: 5px 12px; background-color: transparent;color: white; border: 1px solid #333;width:300px;font-size: 14px;" name="zip" required>	
							</div>
							<div class="col-6">
								<label style="display:block;color:#888;font-size: 12px;" for="location">Lokasi</label>
								<select name="location" id="location" style="padding: 5px 12px; background-color: transparent;color: white; border: 2px solid #555;width:300px" required="required" autocomplete="off">
									<option value="">-</option>
									<option value="AF" >Afganistan</option>
									<option value="AX" >Aland Islands</option>
									<option value="AL" >Albania</option>
									<option value="DZ" >Aljazair</option>
									<option value="AS" >Samoa Amerika</option>
									<option value="AD" >Andorra</option>
									<option value="AO" >Angola</option>
									<option value="AI" >Anguilla</option>
									<option value="AQ" >Antartika</option>
									<option value="AG" >Antigua dan Barbuda</option>
									<option value="AR" >Argentina</option>
									<option value="AM" >Armenia</option>
									<option value="AW" >Aruba</option>
									<option value="AU" >Australia</option>
									<option value="AT" >Austria</option>
									<option value="AZ" >Azerbaijan</option>
									<option value="BS" >Bahama</option>
									<option value="BH" >Bahrain</option>
									<option value="BD" >Bangladesh</option>
									<option value="BB" >Barbados</option>
									<option value="BY" >Belarus</option>
									<option value="BE" >Belgia</option>
									<option value="BZ" >Belize</option>
									<option value="BJ" >Benin</option>
									<option value="BM" >Bermuda</option>
									<option value="BT" >Bhutan</option>
									<option value="BO" >Bolivia</option>
									<option value="BQ" >Bonaire</option>
									<option value="BA" >Bosnia dan Herzegovina</option>
									<option value="BW" >Botswana</option>
									<option value="BV" >Pulau Bouvet</option>
									<option value="BR" >Brasil</option>
									<option value="IO" >Wilayah Samudra Hindia Britania</option>
									<option value="BN" >Brunei Darussalam</option>
									<option value="BG" >Bulgaria</option>
									<option value="BF" >Burkina Faso</option>
									<option value="BI" >Burundi</option>
									<option value="CV" >Cape Verde</option>
									<option value="KH" >Kamboja</option>
									<option value="CM" >Kamerun</option>
									<option value="CA" >Kanada</option>
									<option value="KY" >Kepulauan Cayman</option>
									<option value="CF" >Republik Afrika Tengah</option>
									<option value="TD" >Chad</option>
									<option value="CL" >Chile</option>
									<option value="CN" >Tiongkok</option>
									<option value="CX" >Pulau ChristmasNatal</option>
									<option value="CC" >Cocos (Keeling) Islands</option>
									<option value="CO" >Kolombia</option>
									<option value="KM" >Komoro</option>
									<option value="CD" >Kongo</option>
									<option value="CG" >Republik Demokratik Kongo</option>
									<option value="CK" >Kepulauan Cook</option>
									<option value="CR" >Kosta Rika</option>
									<option value="CI" >Cote d&#039;Ivoire</option>
									<option value="HR" >Kroasia</option>
									<option value="CU" >Kuba</option>
									<option value="CW" >Curacao</option>
									<option value="CY" >Siprus</option>
									<option value="CZ" >Republik Ceko</option>
									<option value="DK" >Denmark</option>
									<option value="DJ" >Djibouti</option>
									<option value="DM" >Dominika</option>
									<option value="DO" >Republik Dominika</option>
									<option value="EC" >Ekuador</option>
									<option value="EG" >Mesir</option>
									<option value="SV" >El Salvador</option>
									<option value="GQ" >Guinea Khatulistiwa</option>
									<option value="ER" >Eritrea</option>
									<option value="EE" >Estonia</option>
									<option value="ET" >Ethiopia</option>
									<option value="FK" >Kepulauan Falkland</option>
									<option value="FO" >Kepulauan Faroe</option>
									<option value="FJ" >Fiji</option>
									<option value="FI" >Finlandia</option>
									<option value="FR" >Prancis</option>
									<option value="GF" >Guyana Prancis</option>
									<option value="PF" >Polinesia Prancis</option>
									<option value="TF" >Wilayah Selatan Prancis</option>
									<option value="GA" >Gabon</option>
									<option value="GM" >Gambia</option>
									<option value="GE" >Georgia</option>
									<option value="DE" >Bahasa Jerman</option>
									<option value="GH" >Ghana</option>
									<option value="GI" >Gibraltar</option>
									<option value="GR" >Yunani</option>
									<option value="GL" >Greenland</option>
									<option value="GD" >Grenada</option>
									<option value="GP" >Guadeloupe</option>
									<option value="GU" >Guam</option>
									<option value="GT" >Guatemala</option>
									<option value="GG" >Guernsey</option>
									<option value="GN" >Guinea</option>
									<option value="GW" >Guinea-Bissau</option>
									<option value="GY" >Guyana</option>
									<option value="HT" >Haiti</option>
									<option value="HM" >Heard Island and McDonald Islands</option>
									<option value="VA" >Tahta Suci Negara Kota Vatikan</option>
									<option value="HN" >Honduras</option>
									<option value="HK" >Hong Kong</option>
									<option value="HU" >Hongaria</option>
									<option value="IS" >Islandia</option>
									<option value="IN" >India</option>
									<option value="ID" selected="selected">Indonesia</option>
									<option value="IR" >Iran</option>
									<option value="IQ" >Irak</option>
									<option value="IE" >Irlandia</option>
									<option value="IM" >Pulau Man</option>
									<option value="IL" >Israel</option>
									<option value="IT" >Italia</option>
									<option value="JM" >Jamaika</option>
									<option value="JP" >Jepang</option>
									<option value="JE" >Jersey</option>
									<option value="JO" >Yordania</option>
									<option value="KZ" >Kazakhstan</option>
									<option value="KE" >Kenya</option>
									<option value="KI" >Kiribati</option>
									<option value="KP" >Korea Utara</option>
									<option value="KR" >Korea Selatan</option>
									<option value="KW" >Kuwait</option>
									<option value="KG" >Kyrgyz Republic</option>
									<option value="LA" >Laos</option>
									<option value="LV" >Latvia</option>
									<option value="LB" >Lebanon</option>
									<option value="LS" >Lesotho</option>
									<option value="LR" >Liberia</option>
									<option value="LY" >Jamahiriya Arab Libya</option>
									<option value="LI" >Liechtenstein</option>
									<option value="LT" >Lithuania</option>
									<option value="LU" >Luksemburg</option>
									<option value="MO" >Macao</option>
									<option value="MK" >Makedonia</option>
									<option value="MG" >Madagaskar</option>
									<option value="MW" >Malawi</option>
									<option value="MY" >Malaysia</option>
									<option value="MV" >Maladewa</option>
									<option value="ML" >Mali</option>
									<option value="MT" >Malta</option>
									<option value="MH" >Kepulauan Marshall</option>
									<option value="MQ" >Martinik</option>
									<option value="MR" >Mauritania</option>
									<option value="MU" >Mauritius</option>
									<option value="YT" >Mayotte</option>
									<option value="MX" >Meksiko</option>
									<option value="FM" >Mikronesia</option>
									<option value="MD" >Moldova</option>
									<option value="MC" >Monaco</option>
									<option value="MN" >Mongolia</option>
									<option value="ME" >Montenegro</option>
									<option value="MS" >Montserrat</option>
									<option value="MA" >Maroko</option>
									<option value="MZ" >Mozambik</option>
									<option value="MM" >Myanmar</option>
									<option value="NA" >Namibia</option>
									<option value="NR" >Nauru</option>
									<option value="NP" >Nepal</option>
									<option value="NL" >Belanda</option>
									<option value="AN" >Antillen Belanda</option>
									<option value="NC" >Kaledonia Baru</option>
									<option value="NZ" >Selandia Baru</option>
									<option value="NI" >Nikaragua</option>
									<option value="NE" >Niger</option>
									<option value="NG" >Nigeria</option>
									<option value="NU" >Niue</option>
									<option value="NF" >Pulau Norfolk</option>
									<option value="MP" >Kepulauan Mariana Utara</option>
									<option value="NO" >Norwegia</option>
									<option value="OM" >Oman</option>
									<option value="PK" >Pakistan</option>
									<option value="PW" >Palau</option>
									<option value="PS" >Palestinian Territory</option>
									<option value="PA" >Panama</option>
									<option value="PG" >Papua Nugini</option>
									<option value="PY" >Paraguay</option>
									<option value="PE" >Peru</option>
									<option value="PH" >Filipina</option>
									<option value="PN" >Pitcairn Islands</option>
									<option value="PL" >Polandia</option>
									<option value="PT" >Portugal</option>
									<option value="PR" >Puerto Rico</option>
									<option value="QA" >Qatar</option>
									<option value="RE" >Penyatuan kembali</option>
									<option value="RO" >Rumania</option>
									<option value="RU" >Federasi Rusia</option>
									<option value="RW" >Rwanda</option>
									<option value="BL" >Saint Barthelemy</option>
									<option value="SH" >Saint Helena</option>
									<option value="KN" >Saint Kitts dan Nevis</option>
									<option value="LC" >Santa Lusia</option>
									<option value="MF" >Saint Martin</option>
									<option value="PM" >Saint Pierre dan Miquelon</option>
									<option value="VC" >Saint Vincent dan Grenadines</option>
									<option value="WS" >Samoa</option>
									<option value="SM" >San Marino</option>
									<option value="ST" >Sao Tome dan Principe</option>
									<option value="SA" >Arab Saudi</option>
									<option value="SN" >Senegal</option>
									<option value="RS" >Serbia</option>
									<option value="SC" >Seychelles</option>
									<option value="SL" >Sierra Leone</option>
									<option value="SG" >Singapura</option>
									<option value="SX" >Sint Maarten</option>
									<option value="SK" >Bahasa Slowakia</option>
									<option value="SI" >Slovenia</option>
									<option value="SB" >Kepulauan Solomon</option>
									<option value="SO" >Somalia, Somali Republic</option>
									<option value="ZA" >Afrika Selatan</option>
									<option value="GS" >Georgia Selatan dan Kepulauan Sandwich Selatan</option>
									<option value="SS" >Sudan Selatan</option>
									<option value="ES" >Spanyol</option>
									<option value="LK" >Sri Lanka</option>
									<option value="SD" >Sudan</option>
									<option value="SR" >Suriname</option>
									<option value="SJ" >Svalbard &amp; Jan Mayen Islands</option>
									<option value="SZ" >Swaziland</option>
									<option value="SE" >Swedia</option>
									<option value="CH" >Swiss</option>
									<option value="SY" >Republik Arab Suriah</option>
									<option value="TW" >Taiwan</option>
									<option value="TJ" >Tajikistan</option>
									<option value="TZ" >Tanzania</option>
									<option value="TH" >Thailand</option>
									<option value="TL" >Timor-Leste</option>
									<option value="TG" >Togo</option>
									<option value="TK" >Tokelau</option>
									<option value="TO" >Tonga</option>
									<option value="TT" >Trinidad dan Tobago</option>
									<option value="TN" >Tunisia</option>
									<option value="TR" >Turki</option>
									<option value="TM" >Turkmenistan</option>
									<option value="TC" >Kepulauan Turks dan Caicos</option>
									<option value="TV" >Tuvalu</option>
									<option value="UG" >Uganda</option>
									<option value="UA" >Ukraina</option>
									<option value="AE" >Uni Emirat Arab</option>
									<option value="GB" >Inggris</option>
									<option value="UM" >Kepulauan Terluar Kecil Amerika Serikat</option>
									<option value="US" >Amerika Serikat</option>
									<option value="UY" >Uruguay</option>
									<option value="UZ" >Uzbekistan</option>
									<option value="VU" >Vanuatu</option>
									<option value="VE" >Venezuela</option>
									<option value="VN" >Vietnam</option>
									<option value="VG" >Kepulauan Virgin Inggris</option>
									<option value="VI" >United States Virgin Islands</option>
									<option value="WF" >Wallis dan Futuna</option>
									<option value="EH" >Sahara Barat</option>
									<option value="YE" >Yaman</option>
									<option value="ZM" >Zambia</option>
									<option value="ZW" >Zimbabwe</option>
									<option value="99" >Unknown</option>
								</select>	
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
								<input id="button_id" type="submit" class="btn btnedit" value="BERIKUTNYA" style="background-color: #01CD01; color:black;padding: 8px 0px;margin-left:-172px;width:150px;text-align: center">
							</div>
						</div>
					</div>	
				</form>		
			</div>
			
			