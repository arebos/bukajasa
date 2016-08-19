<h3>SPG Submision SUCCESSFUL!</h3>

<h2>Masukkan Lagi Data SPG</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('spg/create'); ?>

<div class="form-group">
    <label for="name">Nama</label>
    <input class="form-control" type="input" name="name" /><br />
</div>
<button class="btn btn-default" type="submit" />Kirim Data SPG</button>

</form>