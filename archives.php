<?php include(dirname(__FILE__).'/header.php'); ?>

<section>
	<p class="details"><?php $plxShow->lang('ARCHIVES'); ?>
	<h1><?php echo plxDate::formatDate($plxShow->plxMotor->cible, '#month #num_year(4)') ?></h1>

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

					<h2><?php $plxShow->artTitle('link'); ?></h2>
					<p class="details">
						<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> -
						<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?> -
						<?php $plxShow->artNbCom(); ?>
					</p>

					<?php $plxShow->artChapo(); ?>


			<?php endwhile; ?>

			<div id="pagination">
				<?php $plxShow->pagination(); ?>
			</div>

</section>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>



<?php include(dirname(__FILE__).'/footer.php'); ?>
