
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('<?php echo site_url("/"); ?>/img/home-bg.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="post-heading">
					<h1><?php echo $aduan->judul; ?></h1>
					<span class="meta">
						<?php
						$query = $this->db->query('SELECT nama FROM taman WHERE id_taman=' . $aduan->id_taman . ' LIMIT 1');
						$taman = $query->row();
						?>
						Created on <?php echo $aduan->tanggal; ?> by <?php echo $aduan->nama; ?> about <?php echo $taman->nama; ?>
						<br/>
						Status: <?php echo $aduan->status; ?>
						<?php if ($this->session->userdata('role') == "admin"): ?>
							<a href="#">[Email]</a> <a href="#">[Verify]</a> <a href="#">[Delete]</a> <?php //TODO: AJAXify?  ?>
						<?php endif; ?>
					</span>
					<h2 class="subheading"><?php echo $aduan->deskripsi; ?></h2>
					<select style="color:#000;">
					<option value="1" style="color:#000;">dinas1</option>
					<option value="2" style="color:#000;">dinas2</option>
					</select>
					<br/><br/> <!-- diakses admin -->

					Laporan : <span><form name="myWebForm" action="mailto:youremail@email.com" method="post">
							<input type="file" name="uploadField" />
						</form></span>
					<!--diakses dinas --> 
				</div>
			</div>
		</div>
	</div>
</header>
<hr>
