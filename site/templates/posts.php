<?php snippet('header') ?>
<?php snippet('menu') ?>
    <img src="<?php echo url('assets/img/small-logo-header.png') ?>" class="small-header-logo" alt="Windoor" />
    <h1 class="header-title-page"><?php echo html($page->title()) ?></h1>
</header>
<section id="news-list">
    <?php foreach($page->children()->visible()->flip() as $article): ?>
    <div class="news-area">
        <div class='news-container'>
            <article class="post">
                <div class="post-date"><?php echo date('d F y', $article->date()) ?></div>
                <h3 class="post-title"><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h3>
                <p class="post-description"><?php echo excerpt($article->text(), 300) ?></p>
                <a href="<?php echo $article->url() ?>" class="btn-blue">Découvrez comment</a>
            </article>
        </div><!-- .news-container -->
    </div><!-- .news-area -->
    <?php endforeach ?>
</section>

<?php snippet('footer') ?>