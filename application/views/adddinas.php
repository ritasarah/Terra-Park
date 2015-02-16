
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/contact-bg.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="page-heading">
					<h1>Tambahkan Dinas</h1>
					<hr class="small">
					<span class="subheading">Kirim Data Dinas Taman Kota Bandung</span>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Main Content -->
<script>
	var context = "adduser";
</script>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			<h2>Form Penambahan Dinas</h2>
			<!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
			<!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
			<!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
			<form name="sentMessage" id="contactForm" novalidate>
				<div class="row control-group">
					<div class="form-group col-xs-12 floating-label-form-group controls">
						<label>Username</label>
						<input type="text" class="form-control" placeholder="Dinas" id="dname" required data-validation-required-message="Please enter dinas name.">
						<p class="help-block text-danger"></p>
					</div>
				</div>				
				<br>
				<div id="success"></div>
				<div class="row">
					<div class="form-group col-xs-12">
						<button type="submit" class="btn">Send</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<hr>
