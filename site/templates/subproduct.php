<?php snippet('header') ?>
<?php snippet('menu') ?>
    <img src="<?php echo url('assets/img/small-logo-header.png') ?>" class="small-header-logo" alt="Windoor" />
    <h1 class="header-title-page"><?php echo html($page->parent()->parent()->title()) ?></h1>
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
                        <span class="nav2-description"><?php echo kirbytext($product->description()) ?></span>
                    </a>
                </li>
                <?php endforeach ?>
            </ul>
        </div><!-- .nav2-inner -->
    </div><!-- #nav2 -->
</div><!-- .l-constrained -->
<section id="tabs" class="l-constrained">
    <ul class="tabs-nav">
        <li tab="#tab-1" class="tabs-current">Présentation</li>
        <?php $subproducts = $page->parent()->children() ?>
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
            <header class="tabs-header">
                        <figure>
                            <img src="img/moniteur.png" alt="Moniteur" />
                            <figcaption>Moniteur N et B 5,5 pouces</figcaption>
                        </figure>
                        <figure>
                            <img src="img/cable.png" alt="Cable" />
                            <figcaption>Câble de 20m</figcaption>
                        </figure>
                        <figure>
                            <img src="img/camera.png" alt="Camera" />
                            <figcaption>Camera CVC-N5</figcaption>
                        </figure>
                    </header><!-- .tabs-header -->
            <div class="tabs-body">
            <ul>
                            <li>moniteur N et B 5,5 pouces</li>
                            <li>économique et compacte</li>
                            <li>leds infrarouges et son intégrés</li>
                        </ul>
                        <h2 class="tabs-title">Moniteur CVM-N5</h2>
                        <table class="tabs-table">
                            <tr>
                                <th>
                                    Écran
                                </th>
                                <td>
                                    cathodique 5,5 pouces (123mm de diagonale) avec haut-parleur intégré.
                                </td>
                            </tr>
                            <tr>
                                <th>Tension d'alimentation</th>
                                <td>DC 11 ~ 32 V.</td>
                            </tr>
                            <tr>
                                <th>Résistance aux vibrations mécaniques
                                </th>
                                <td>6.8G</td>
                            </tr>
                            <tr>
                                <th>Température de fonctionnement
                                </th>
                                <td>0°C à +60°C.</td>
                            </tr>
                        </table>

                        <h2 class="tabs-title">Accessoires fournis dans le Kit</h2>
                        <figure>
                            <img src="img/visDeSerrage.jpg" alt="" />
                            <figcaption>Vis de serrage du support en U</figcaption>
                        </figure>
                        <figure>
                            <img src="img/filmDeDirectionAcoller.jpg" alt="" />
                            <figcaption>Film de direction à coller</figcaption>
                        </figure>
                        <figure>
                            <img src="img/visDeSerrageAuTableau.jpg" alt="" />
                            <figcaption>Vis de serrage au tableau</figcaption>
                        </figure>
                        <figure>
                            <img src="img/cableAlimentation.jpg" alt="" />
                            <figcaption>Câble d'alimentation</figcaption>
                        </figure>
                        <figure>
                            <img src="img/tamponAntiVibration.jpg" alt="" />
                            <figcaption>Tampon anti-vibration</figcaption>
                        </figure>
                        <figure>
                            <img src="img/pareSoleil.jpg" alt="" />
                            <figcaption>Pare-soleil</figcaption>
                        </figure>
                        <figure>
                            <img src="img/supportEnU.jpg" alt="" />
                            <figcaption>Support en U</figcaption>
                        </figure>
                        <figure>
                            <img src="img/manuelUtilisation.jpg" alt="" />
                            <figcaption>Manuel d'utilisation</figcaption>
                        </figure>
                        <figure>
                            <img src="img/cableMoniteurCamera20m.jpg" alt="" />
                            <figcaption>Cable Moniteur-Camera de 20m</figcaption>
                        </figure>
            </div><!-- .tabs-body -->
        </article>

</section>

<?php snippet('footer') ?>