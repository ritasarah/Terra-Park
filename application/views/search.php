
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/contact-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Cari Aduan</h1>
                        <hr class="small">
                        <span class="subheading">Pencarian Aduan</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
	<script>
    function validasiTanggal(){
    var validate;
    var tgl = document.getElementById("tngl").value;
    if((tgl.length==10)&&(tgl.match(/^\d{4}-\d{1,2}-\d{1,2}$/))){
        var now = new Date();
        var tanggal=new Date(tgl);
        now.setHours(0000);
        if (tanggal>= now){
        validate=true;}
        else {
        validate=false;}
        }
    else {validate=false;}
    return validate;
    }
	</script>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2>Form Pencarian Aduan</h2>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form name="searchMessage" id="contactForm" novalidate onsubmit="return validasiTanggal()">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Tanggal</label>
                            <input type="text" class="form-control" placeholder="Tanggal" id="tngl" required data-validation-required-message="Please enter your date.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>                            
                            <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <p class="help-block text-danger"></p>
                        <p class="help-block text-danger">
                            <span style="font-size:19px;">Lokasi : </span>
                            <select id="park" name="park">
                                <?php foreach ($listTaman->result() as $row): ?>
                                <option value="<?php echo $row->id_taman; ?>"><?php echo $row->nama; ?></option>
                                <?php endforeach ?>
                            </select></p>
                    </div>
                </div>
                    <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <p class="help-block text-danger"></p>
                        <p class="help-block text-danger">
                            <span style="font-size:19px;">Status : </span>
                            <select id="stat" name="stat">
                                <!--Kode php untuk list statusnya -->
                            </select></p>

                    </div>

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