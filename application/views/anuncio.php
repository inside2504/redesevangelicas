<section class="container">
 	<div class="center">
		<h2>Eventos</h2>
 	</div>
	<div>
		<hr>
		<?php if ($this->my_model->getTables() !=0):?>
    		<?php foreach ($results as $row): ?>
			    <!-- Post Content -->
			    <div class="col-md-6 col-sm-6">
				    <img src="<?= base_url('').'assets/eventos/'.$this->my_model->getImg($row->id) ?>" class="banner">
				    <h3><?php echo $row->title ?></h3>
					<p><?php echo $row->body ?></p>
					<p>Fecha de inicio: <?php echo ($row->inicio) ?> | Fecha de fin: <?php echo $row->final ?></p>
				</div>
			<?php endforeach;?>
		<?php endif;?>
	</div>
</section>