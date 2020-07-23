<!-- Section -->
<section class="content">
        <?php foreach ($content as $page): ?>
                <article class="page">
                        <header>
                            <?php if ( $page->title() ): ?>
                            <h2>
                                <a href="<?php echo htmlentities($page->permalink(), ENT_QUOTES | ENT_HTML401)?>">
                                    <?php 
                                        echo htmlentities( $page->title() );
                                    ?>
                                </a>
                            </h2>
                            <?php endif; ?>
                        </header>
                        <?php if ($page->coverImage()): ?>
                        <img src="<?php echo $page->coverImage() ?>" alt="<?php echo $page->slug() ?>">
                        <?php endif ?>

                        <?php echo $page->content() ?>

                        <footer>
                                <a href="<?php echo htmlentities($page->permalink(), ENT_QUOTES | ENT_HTML401)?>">
                                    <?php echo htmlentities( $L->get('Read this article.') ); ?>
                                </a>
                                <br/>
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
