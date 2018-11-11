<!-- Section -->
<section class="content">
        <?php foreach ($content as $page): ?>
                <article class="page">
                        <?php if($page->title()): ?>
                        <header>
                                <h2><?php echo $page->title() ?></h2>
                        </header>
                        <?php endif ?>

                        <?php if ($page->coverImage()): ?>
                        <img src="<?php echo $page->coverImage() ?>" alt="<?php echo $page->slug() ?>">
                        <?php endif ?>

                        <?php echo $page->content() ?>

                        <footer>
                                <?php echo $page->date() ?>
                        </footer>
                </article>
        <?php endforeach ?>
</section>

<!-- Pagination -->
<ul class="pagination">
<?php
	if (Paginator::showPrev()) {
		echo '<li class="float-left"><a href="'.Paginator::previousPageUrl().'">'.$L->get('Previous page').'</a></li>';
	}

	if (Paginator::showNext()) {
		echo '<li class="float-right"><a href="'.Paginator::nextPageUrl().'">'.$L->get('Next page').'</a></li>';
	}
?>
</ul>
