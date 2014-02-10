<?php include(dirname(__FILE__).'/header.php'); ?>


<?php if($plxShow->plxMotor->page == 1): ?>
<article id="article-home">
	<p class="details"><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> le <?php $plxShow->artDate() ?> - <?php $plxShow->artNbCom('#nb commentaire','#nb commentaire','#nb commentaires') ?></p>
	<h1><?php $plxShow->artTitle('link'); ?></h1>
	<div class="contenu-article" id="dernier-article"><?php $plxShow->artContent(true) ?></div>
</article>
<?php endif; ?>
<section>
	<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
		<h2><?php $plxShow->artTitle('link'); ?></h2>
		<p class="details"><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> - <?php $plxShow->artDate() ?> - <?php $plxShow->artNbCom('#nb commentaire','#nb commentaire','#nb commentaires') ?></p>
		<?php $plxShow->artChapo(); ?>
	<?php endwhile; ?>
<div id="pagination"><?php $plxShow->pagination(); ?></div>
</section>


<?php include(dirname(__FILE__).'/sidebar.php'); ?>
<?php include(dirname(__FILE__).'/footer.php'); ?>
