<div class="alert alert-success" role="alert">
	<i class="fa fa-thumbs-o-up"></i> Well done! Data SPG Berhasil Diupload!
</div>

<?php foreach ($upload_data as $item): ?>
	<div class="col-sm-3 col-xs-6">
		<figure><img src="<?php echo '/assets/img/spg-usher/'.$item->slug.'.jpg'; ?>" class="img-responsive" alt="<?php echo $item->nama; ?>" />
		<figcaption><?php echo $item->nama; ?></figcaption></figure>
	</div>
<?php endforeach; ?>

<h4><i class="fa fa-upload"></i> <?php echo anchor('/spg/create', 'Ingin Upload Lagi?'); ?></h4>