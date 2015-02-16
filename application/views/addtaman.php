
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo site_url("/"); ?>img/contact-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Tambahkan Taman</h1>
                        <hr class="small">
                        <span class="subheading">Kirim Data Taman Kota Bandung</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
	<script>
		var context = "addtaman";
	</script>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2>Form Penambahan Taman</h2>
                <form name="sentMessage" id="contactForm" novalidate>
					<input type="hidden" style="display:none;" id="idTaman" value="<?php echo $idT ?>">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" value="<?php echo $nama ?>" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Lokasi</label>
                            <input type="lokasi" class="form-control" placeholder="Lokasi" value="<?php echo $lokasi ?>" id="lokasi" required data-validation-required-message="Please enter your location.">
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