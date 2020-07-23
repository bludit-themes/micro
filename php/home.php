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

    $isPage = $WHERE_AM_I === 'page';
    $isHome = $WHERE_AM_I === 'home';
    $pageHandler = new Pages();
    $previousLink = null;
    $nextLink = null;
    $areTherePages = !!count($content);
    if ( $isPage && $areTherePages ) {
        $currentPage = $content[0]; 
        if( isset($currentPage) ) {
            if ( $currentPage->previousKey() ) {
                $previousLink = buildPage($currentPage->previousKey())->permalink();
            }
            if ( $currentPage->nextKey() ) {
                $nextLink = buildPage($currentPage->nextKey())->permalink();
            }
        }
    }
    if ( $isHome ) {
        if ( Paginator::showPrev() ) {
            $previousLink = Paginator::previousPageUrl();
        }
        if ( Paginator::showNext() ) {
            $nextLink = Paginator::nextPageUrl();
        }
    }
    ?>
    <?php if ( isset($previousLink) ): ?>
        <li class="float-left">
            <a href="<?php echo htmlentities( $previousLink, ENT_QUOTES | ENT_HTML401 ); ?>">
                <?php echo $L->get('Previous page') ?>
            </a>
        </li>
    <?php endif; ?>
    <?php if ( isset($nextLink) ): ?>
        <li class="float-right">
            <a href="<?php echo htmlentities( $nextLink, ENT_QUOTES | ENT_HTML401 ); ?>">
                <?php echo $L->get('Next page') ?>
            </a>
        </li>
    <?php endif; ?>
</ul>
