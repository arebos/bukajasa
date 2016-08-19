<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--9-col mdl-cell--8-col-tablet">
		<h1><?php echo $heading; ?></h1>
		<ul>
		<?php foreach ($todo_list as $item): ?>
			<li><?php echo $item; ?></li>
		<?php endforeach; ?>
		</ul>
	</div>
