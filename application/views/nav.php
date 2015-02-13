
<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="http://www.bandung.go.id/">Pemkot Bandung</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li> <a href="<?php echo site_url("/"); ?>">Home</a> </li>
				
				<?php if ($this->session->userdata('role') == "admin" || $this->session->userdata('role') == "dinas"): ?>
					<li><a href="<?php echo site_url("listtaman"); ?>">List Taman</a></li>
				<?php endif; ?>
				<?php if ($this->session->userdata('role') == "admin"): ?>
					<li><a href="<?php echo site_url("listuser"); ?>">List User</a></li>
				<?php endif; ?>
				
				<?php if ($this->session->userdata('login')): ?>
					<li><a href="<?php echo site_url("logout"); ?>">Logout</a></li>
					<li><span>Logged in as <?php echo $this->session->userdata('login') ?></span></li>
				<?php else : ?>
					<li><a href="<?php echo site_url("login"); ?>">Login</a></li>
				<?php endif; ?>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>