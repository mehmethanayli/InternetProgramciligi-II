<!DOCTYPE html>
<html lang="tr">

<?php  $this->load->view("includes/header.php"); ?>

<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form method="POST" action="<?php echo base_url("formApp/insert") ?> " class="contact100-form validate-form">
				<span class="contact100-form-title">
					Formu doldurunuz.
				</span>

				<div class="wrap-input100 validate-input" data-validate="Bu alan zorunludur.">
					<span class="label-input100">İsminiz</span>
					<input class="input100" type="text" name="name" placeholder="İsminizi Giriniz.">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Bu alan zorunludur: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="E-mail adresinizi giriniz.">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Hizmet Seçiniz</span>
					<div>
						<select class="selection-2" name="service">
							<option>Hizmetler</option>
							<option>Müşteri İlişkileri</option>
							<option>Yazılım Geliştirme</option>
							<option>Proje Yürütücüsü</option>
							<option>Muhasebe</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Maaş</span>
					<div>
						<select class="selection-2" name="budget">
							<option>Maaş Seçiniz</option>
							<option value="5500">5500 TL</option>
							<option value="6000">6000 TL</option>
							<option value="4500">4500 TL</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Bu alan zorunludur">
					<span class="label-input100">Mesajınız</span>
					<textarea class="input100" name="message" placeholder="Mesajınızı buraya yazabilirsiniz..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Formu Gönder
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

	<?php  $this->load->view("includes/footer.php"); ?>

</body>

</html>