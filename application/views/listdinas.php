
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/about-bg.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="site-heading">
					<h1>Dinas</h1>
					<hr class="small">
					<a href ="<?php echo site_url("adddinas"); ?>">
						<button type="submit" class="btn btn-default">Tambahkan Dinas</button>
                    </a>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Main Content -->
<div class="container">
	<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="post-preview">
					<h2 class="post-title">
						<?php echo $row->username; ?>
					</h2>

					<div>						
						<span><a href="#">[Delete]</a></span> <?php //TODO: AJAXify?  ?>
					</div>
				</div>
				<hr>
			</div>
	</div>
</div>

<hr>
