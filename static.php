<?php include(dirname(__FILE__).'/header.php'); ?>
<article id="article-seul">
	<p class="details"><?php $plxShow->lang('DERNIERE_MODIF'); ?> : <?php $plxShow->staticDate() ?></p>
					<h1>
						<?php $plxShow->staticTitle(''); ?>
					</h1>
				<?php $plxShow->staticContent(); ?>
</article>
<?php include(dirname(__FILE__).'/sidebar.php'); ?>
<?php include(dirname(__FILE__).'/footer.php'); ?>
