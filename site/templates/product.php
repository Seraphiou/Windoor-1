<?php snippet('header') ?>
<?php snippet('menu') ?>
    <img src="<?php echo url('assets/img/small-logo-header.png') ?>" class="small-header-logo" alt="Windoor" />
    <h1 class="header-title-page"><?php echo html($page->parent()->title()) ?></h1>
</header>
<div class="l-constrained">
    <div id="nav2">
        <a href="javascript:return false;" class="nav2-left"></a>
        <a href="javascript:return false;" class="nav2-right"></a>
        <div class="nav2-inner clearfix">
            <ul>
                <?php $products = $pages->find('products')->children(); ?>
                <?php foreach($products as $product): ?>
                <li class="nav2">
                    <a class="nav2-link">
                        <span class="nav2-title"><?php echo $product->title(); ?></span>
                        <span class="nav2-description"><?php echo $product->description() ?></span>
                    </a>
                </li>
                <?php endforeach ?>
            </ul>
        </div><!-- .nav2-inner -->
    </div><!-- #nav2 -->
</div><!-- .l-constrained -->
<section id="tabs" class="l-constrained">
    <ul class="tabs-nav">
        <li tab="#tab-1" class="tabs-current"><a href="<?php $page->url() ?>">Présentation</a></li>
        <?php $subproducts = $page->children() ?>
        <?php $subproducts_count = 0; ?>
        <?php foreach($subproducts as $subproduct): $subproducts_count++ ?>
        <li tab="#tab-<?php echo $subproducts_count ?>"><a href="<?php echo $subproduct->url() ?>"><?php echo $subproduct->title() ?></a></li>
    <?php endforeach ?>
    </ul>
    <div class="tabs-buttons">
        <a href="javascript:window.print()" class="btn-gradient"><i class="icon-print"></i> Imprimer</a>
        <a href="#" class="btn-gradient"><i class="icon-pdf"></i> PDF</a>
    </div>
    <div class="tabs-main">
        <article id="tab-1" class="tabs-content-current tabs-content">
            <div class="tabs-header">
                <?php $image = $page->images()->find('01.png') ?>
                <img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" />
                <h2 class="tabs-header-title"><?php echo $page->title() ?></h2>
                <p class="presentation-description"><?php echo $page->description() ?></p>
            </div>
            <div class="tabs-body">
            <?php echo kirbytext($page->text()) ?>
            </div><!-- .tabs-body -->
        </article>

</section>

<?php snippet('footer') ?>