<?php snippet('header') ?>
<?php snippet('menu') ?>
    <img src="<?php echo url('assets/img/small-logo-header.png') ?>" class="small-header-logo" alt="Windoor" />
    <h1 class="header-title-page"><?php echo html($page->parent()->title()) ?></h1>
</header>
<section id="news-list">
    <div class="news-area">
        <div class='news-container'>
            <article class="post">
                <div class="post-date"><?php echo date('d F y', $page->date()) ?></div>
                <h3 class="post-title"><?php echo html($page->title()) ?></h3>
                <p class="post-description"><?php echo kirbytext($page->text()) ?></p>
            </article>
        </div><!-- .news-container -->
    </div><!-- .news-area -->
</section>

<?php snippet('footer') ?>