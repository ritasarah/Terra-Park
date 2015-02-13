
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="site-heading">
					<h1>Taman</h1>
					<hr class="small">
					<a href ="<?php echo site_url("addtaman"); ?>">
						<button type="submit" class="btn btn-default">Tambahkan Taman</button>
                    </a>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Main Content -->
<div class="container">
	<div class="row">
		<?php foreach ($listTaman->result() as $row): ?>
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="post-preview">
					<h2 class="post-title">
						<?php echo $row->nama; ?>
					</h2>
					<div>
						<span>Alamat: <?php echo $row->lokasi; ?></span>
						<br/>
						<?php if ($this->session->userdata('role') == "admin"): ?>
							<span><a href="#">[Delete]</a></span> <?php //TODO: AJAXify? ?>
						<?php endif; ?>
					</div>
				</div>
				<hr>
			</div>
		<?php endforeach ?>
	</div>
</div>

<hr>
