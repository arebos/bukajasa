<section class="main">
	<div class="container">
		<div class="row">
			<div class="header col-xs-12">
				<h1 class="heading">SPG Usher &amp; Talent</h1>
				<p class="content">Bukajasa merupakan perusahaan berbadan hukum yang bergerak di bidang penyedia jasa SPG Event maupun SPG Reguler. Didukung oleh team yang berpengalaman kami siap untuk membantu mensukseskan setiap acara anda. Kami memiliki SPG Event ataupun SPG Reguler yang sudah berpengalaman di event nasional maupun Internasional. SPG Event dan SPG Reguler yang kami miliki siap menjalankan tugas yang diberikan baik itu sebagai Usher, Umbrella Girl, Stand Guide, Caddy, dalam acara exhibition, launching product, launching perusahaan, gathering perusahaan, selling product maupun sampling product.</p>
			</div>
		</div>
		<div class="row">
			<?php foreach ($results as $spg): ?>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<figure><img src="<?php echo '/assets/img/spg-usher/'.$spg->slug.'.jpg'; ?>" class="img-responsive" alt="<?php echo $spg->nama; ?>" />
					<figcaption><?php echo $spg->nama; ?></figcaption></figure>
				</div>
			<?php endforeach; ?>
			<!-- Pagination Links -->
			<div id="pagination" class="col-xs-12">
				<p><?php echo $links; ?></p>
			</div>
		</div>
	</div>
</section>