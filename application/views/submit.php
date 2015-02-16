
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/contact-bg.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="page-heading">
					<h1>Ajukan Pengaduan</h1>
					<hr class="small">
					<span class="subheading">Kirim Pengaduan Anda untuk Taman Kota Bandung</span>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Main Content -->
<script>
	var context = "aduan";
</script>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			<h2>Form Pengaduan</h2>
			<form name="sentMessage" id="contactForm" novalidate">
				<div class="row control-group">
					<div class="form-group col-xs-12 floating-label-form-group controls">
						<label>Name</label>
						<input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
						<p class="help-block text-danger"></p>
					</div>
				</div>
				<div class="row control-group">
					<div class="form-group col-xs-12 floating-label-form-group controls">
						<label>Email Address</label>
						<input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
						<p class="help-block text-danger"></p>
					</div>
				</div>
				<div class="row control-group">
					<div class="form-group col-xs-12 floating-label-form-group controls">
						<p class="help-block text-danger"></p>
						<p class="help-block text-danger">
                            <span style="font-size:19px;">Location : </span>
							<select id="park" name="park">
								<?php foreach ($listTaman->result() as $row): ?>
								<option value="<?php echo $row->id_taman; ?>"><?php echo $row->nama; ?></option>
								<?php endforeach ?>
                            </select></p>
					</div>
				</div>
				<div class="row control-group">
					<div class="form-group col-xs-12 floating-label-form-group controls">
						<label>Judul</label>
						<input type="text" class="form-control" placeholder="Title" id="title" required data-validation-required-message="Please enter a title.">
						<p class="help-block text-danger"></p>
					</div>
				</div>
				<div class="row control-group">
					<div class="form-group col-xs-12 floating-label-form-group controls">
						<label>Message</label>
						<textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
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
