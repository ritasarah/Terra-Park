
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/contact-bg.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="page-heading">
					<h1>Tambahkan User</h1>
					<hr class="small">
					<span class="subheading">Kirim Data User Dinas Taman Kota Bandung</span>
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
			<h2>Form Penambahan User</h2>
			<form name="sentMessage" id="contactForm" novalidate>
				<div class="row control-group">
					<div class="form-group col-xs-12 floating-label-form-group controls">
						<label>Username</label>
						<input type="email" class="form-control" placeholder="User Email" id="name" required data-validation-required-message="Please enter your username.">
						<p class="help-block text-danger"></p>
					</div>
				</div>
				<div class="row control-group">
					<div class="form-group col-xs-12 floating-label-form-group controls">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Password" id="pw" required data-validation-required-message="Please enter your Password.">
						<p class="help-block text-danger"></p>
					</div>
				</div>
				<div class="row control-group">
					<div class="form-group col-xs-12 floating-label-form-group controls">
						<p class="help-block text-danger"></p>
						<p class="help-block text-danger">
                            <span style="font-size:19px;">Role : </span>
							<select id="role" name="role">
								<option value="dinas">Dinas</option>
								<option value="admin">Admin</option>
                            </select></p>
					</div>
				</div>
				<div class="row control-group">
					<div class="form-group col-xs-12 floating-label-form-group controls">
						<p class="help-block text-danger"></p>
						<p class="help-block text-danger">
                            <span style="font-size:19px;">SKPD : </span>
							<select id="affi" name="affi">
								<?php foreach ($listAff->result() as $row): ?>
								<option value="<?php echo $row->id_skpd; ?>"><?php echo $row->nama; ?></option>
								<?php endforeach ?>
                            </select></p>
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
