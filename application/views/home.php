
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="site-heading">
					<h1>Terra Park</h1>
					<hr class="small">
					<a href ="<?php echo site_url("submit"); ?>">
						<button type="submit" class="btn btn-default">Ajukan Pengaduan Anda</button>
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
			<?php foreach ($listTicket->result() as $row): ?>
				<div class="post-preview">
					<a href="<?php echo site_url("view"); ?>/<?php echo $row->id_pengaduan; ?>"><h2 class="post-title">
						<?php echo $row->judul; ?>
					</h2></a>
					<p class="post-meta">
						<?php
						$query = $this->db->query('SELECT nama FROM taman WHERE id_taman=' . $row->id_taman . ' LIMIT 1');
						$taman = $query->row();
						?>
						Created on <?php echo $row->tanggal; ?> by <?php echo $row->nama; ?> about <?php echo $taman->nama; ?>
						<br/>
						Status: <?php echo $row->status; ?>
						<?php if ($this->session->userdata('role') == "admin"): ?>
							<a href="#">[Email]</a> <a href="#">[Verify]</a> <a href="#">[Delete]</a> <?php //TODO: AJAXify?  ?>
						<?php endif; ?>
					</p>
				</div>
				<hr>
			<?php endforeach; ?>
			<!-- Pager -->
			<!--<ul class="pager">
				<li class="next">
					<a href="#">Older Posts &rarr;</a>
				</li>
			</ul>-->
		</div>
	</div>
</div>

<hr>
