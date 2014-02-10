<?php include(dirname(__FILE__).'/header.php'); ?>
<article id="article-seul">
	<p class="details"><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> le <?php $plxShow->artDate() ?> - <?php $plxShow->artNbCom('#nb commentaire','#nb commentaire','#nb commentaires') ?></p>
					<h1>
						<?php $plxShow->artTitle(''); ?>
					</h1>
				<?php $plxShow->artContent(); ?>
					<p>
						<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> -
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
					</p>
			<?php include(dirname(__FILE__).'/commentaires.php'); ?>
</article>
<?php include(dirname(__FILE__).'/sidebar.php'); ?>
<?php include(dirname(__FILE__).'/footer.php'); ?>
