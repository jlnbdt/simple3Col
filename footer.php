<?php if (!defined('PLX_ROOT')) exit; ?>

<footer role="contentinfo">

	<p>
		<?php $plxShow->mainTitle('link'); ?> © 2014 - <?php $plxShow->subTitle(); ?><br />
		<?php $plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
		<?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?>
		<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
		<a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a>
		<?php $plxShow->httpEncoding() ?>
	</p>
	<p>
		Thème <a href="https://github.com/JulienBiaudet/simple3Col" title="Simple3Col sur Github">Simple3Col</a> inspiré par <a href="http://greatgonzo.net/" title="Gonzo">Gonzo</a>
	</p>

</footer>

</body>

</html>
