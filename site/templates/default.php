<?php snippet('header') ?>
<?php snippet('menu') ?>
<a href="<?php echo url() ?>"><img src="<?php echo url('assets/img/logo-header.png') ?>" class="header-logo" alt="Windoor" /></a>

<h1><?php echo html($page->title()) ?></h1>
    <p class="header-description"><?php echo html($page->text()) ?>
        <a href="" class="header-link">> Lire la suite</a>
    </p>

    <div class="l-constrained clearfix">
        <?php $products = $pages->find('products')->children(); ?>
        <?php foreach($products as $product): ?>
        <div class="product">
            <h2 class="product-title"><?php echo $product->title(); ?></h2>
            <p class="product-description"><?php echo $product->description() ?></p>
            <a href="<?php echo $product->url() ?>" class="product-link"><span class="product-link-plus">+</span> En savoir plus</a>
        </div>
        <?php endforeach ?>
    </div><!-- .l-constrained-->
</header>
<section id="news">
    <h2 class="news-title">Actualités</h2>
    <span class="news-logo"></span>
    <div class="news-container">
        <a href="javascript:return false;" class="news-arrow-left"></a>
        <a href="javascript:return false;" class="news-arrow-right"></a>
        <div class="news-wrapper">
            <ul>
                <li>
                    <article class="post">
                        <div class="post-date">15 Mars 2013</div>
                        <h3 class="post-title"><a href="#">Clavier de sécurité sans-fil pour remorques et caisses mobiles</a></h3>
                        <p class="post-description">WINDOOR innove et même plus loin la sécurité de verrrouillage des remorques seules et/ou caisses mobiles</p>
                        <a href="" class="btn-blue">Découvrez comment</a>
                        <a href="" class="btn">Voir toutes les actualités</a>
                    </article>
                </li>

                <li>
                    <article class="post">
                        <div class="post-date">16 Mars 2013</div>
                        <h3 class="post-title"><a href="#">Clavier de sécurité sans-fil pour remorques et caisses mobiles</a></h3>
                        <p class="post-description">WINDOOR innove et même plus loin la sécurité de verrrouillage des remorques seules et/ou caisses mobiles</p>
                        <a href="" class="btn-blue">Decouvrez comment</a>
                        <a href="" class="btn">Voir toutes les actualités</a>
                    </article>
                </li>

                <li>
                    <article class="post">
                        <div class="post-date">17 Mars 2013</div>
                        <h3 class="post-title"><a href="#">Clavier de sécurité sans-fil pour remorques et caisses mobiles</a></h3>
                        <p class="post-description">WINDOOR innove et même plus loin la sécurité de verrrouillage des remorques seules et/ou caisses mobiles</p>
                        <a href="" class="btn-blue">Decouvrez comment</a>
                        <a href="" class="btn">Voir toutes les actualités</a>
                    </article>
                </li>

                <li>
                    <article class="post">
                        <div class="post-date">18 Mars 2013</div>
                        <h3 class="post-title"><a href="#">Clavier de sécurité sans-fil pour remorques et caisses mobiles</a></h3>
                        <p class="post-description">WINDOOR innove et même plus loin la sécurité de verrrouillage des remorques seules et/ou caisses mobiles</p>
                        <a href="" class="btn-blue">Decouvrez comment</a>
                        <a href="" class="btn">Voir toutes les actualités</a>
                    </article>
                </li>
            </ul>
        </div><!-- .news-wrapper -->
    </div><!-- .news-container -->
</section>

<?php snippet('footer') ?>