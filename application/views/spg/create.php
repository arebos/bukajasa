<h2><?php echo $title; ?></h2>

<div class="alert alert-danger" role="alert">
	<?php echo validation_errors(); ?>
</div>
<?php echo form_open_multipart('spg/create'); ?>
<div class="form-group">
    <label for="nama">Nama SPG/Usher/Talent</label>
    <input type="input" name="nama" class="form-control" /><br />
</div>
<!-- Upload -->
<div class="form-group">
    <label for="foto">Upload Foto</label>
    <input type="file" name="foto" size="20" class="form-control" /><br />
</div><!-- upload -->
<button class="btn btn-default" type="submit" />Upload</button>
</form>