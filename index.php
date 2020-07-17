<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
<?php include(THEME_DIR_PHP.'head.php') ?>
</head>
<body>

	<div id="fh5co-main">
	<div id="fh5co-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-3">
					<div class="row">
						<div class="col-lg-2">
						<?php include(THEME_DIR_PHP.'sidebar.php') ?>
						</div>

						<div class="col-lg-6">
						<?php include(THEME_DIR_PHP.'home.php') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<footer id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<p>
						<?php echo $site->footer() ?>
						<br>
						Powered by <a href="https://www.bludit.com" target="_blank">BLUDIT</a>
						<?php
							if (pluginActivated('pluginRSS')) {
								echo ' - <a href="'.Theme::rssUrl().'" target="_blank">RSS</a>';
							}
							if (pluginActivated('pluginSitemap')) {
								echo ' - <a href="'.Theme::sitemapUrl().'" target="_blank">Sitemap</a>';
							}
						?>
					</p>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>
