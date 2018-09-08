<h1 class="site-title">
        <a href="<?php echo $site->url() ?>">
        <?php echo $site->title() ?>
        </a>
</h1>

<ul class="static-pages">
	<?php
		foreach ($staticContent as $staticPage) {
			echo '<li>';
			echo '<a href="'.$staticPage->permalink().'">';
			echo $staticPage->title();
			echo '</a>';
			echo '</li>';
		}
	?>
</ul>