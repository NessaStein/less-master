		<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
 		<nav id="nav" class="sb" role="navigation" itemscope="" itemtype="">
			<ul id="site-menu" class="nav-menu">
				<li><a <?php if($this->is('index')): ?> <?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>

      <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
        <li><span<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></span></li>
        <?php endwhile; ?>
			</ul>
		 </nav>
