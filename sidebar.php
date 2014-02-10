<?php if(!defined('PLX_ROOT')) exit; ?>

	<aside role="complementary">
		<div class="boite-barre">
		<h3><?php $plxShow->lang('APROPOS'); ?></h3>
		<ul>
            		<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
		</ul>
		</div>
		<div class="boite-barre">
		<h3><?php $plxShow->lang('CATEGORIES'); ?></h3>
		<ul>
			<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
		</ul>
		</div>
		<div class="boite-barre">
		<h3>
			<?php $plxShow->lang('TAGS'); ?>
		</h3>

		<ul>
			<?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
		</ul>
		</div>

		<div class="boite-barre">
		<h3>
			<?php $plxShow->lang('LATEST_COMMENTS'); ?>
		</h3>

		<ul>
			<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
		</ul>
		</div>

		<div class="boite-barre">
		<h3>
			<?php $plxShow->lang('ARCHIVES'); ?>
		</h3>

		<ul>
			<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
		</ul>
		</div>

		<div class="boite-barre">
		<h3><?php $plxShow->lang('FLUXRSS'); ?></h3>
		<ul>
			<?php if ($plxShow->mode() == "tags"): ?><li><?php $plxShow->tagFeed() ?></li><?php endif; ?>
			<?php if ($plxShow->mode() == "categorie"): ?><li><?php $plxShow->artFeed('rss',$plxShow->catId()); ?></li><?php endif; ?>
			<?php if ($plxShow->mode() == "article"): ?><li><?php $plxShow->comFeed('rss',$plxShow->artId()); ?></li><?php endif; ?>
			<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>">
			<?php $plxShow->lang('ARTICLES'); ?></a></li>
			<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>">
			<?php $plxShow->lang('COMMENTS'); ?></a></li>
		</ul>
		</div>

	</aside>
