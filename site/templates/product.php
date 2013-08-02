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
                <li class="nav2-active">
                    <a class="nav2-link">
                        <span class="nav2-title"><?php echo $product->title(); ?></span>
                        <span class="nav2-description"><?php echo $product->text() ?></span>
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
        <li tab="#tab-2">Kit N et B 5 pouces CV-N5</li>
        <li tab="#tab-3">Kit couleur 5 pouces CV-C51</li>
        <li tab="#tab-4">Kit 5 pouces couleur SANS-FIL CV-Ca51-WS</li>
    </ul>
    <div class="tabs-buttons">
        <a href="javascript:window.print()" class="btn-gradient"><i class="icon-print"></i> Imprimer</a>
        <a href="#" class="btn-gradient"><i class="icon-pdf"></i> PDF</a>
    </div>
    <div class="tabs-main">
        <article id="tab-1" class="tabs-content-current tabs-content">
            <div class="tabs-header">
                <img class="presentation-image" src="img/careview.png" alt="Careview" />
                <h2 class="tabs-header-title"><b>Care</b> view</h2>
                <p class="presentation-description">Systèmes de rétrovision et enregistreur vidéo embarqué pour camions, poids-lourds et véhicules industriels</p>
            </div>
            <div class="tabs-body">
            <p>CARE VIEW se décline en plusieurs versions sous forme de kit se composant d'une (ou plusieurs) caméra(s) placée(s) à l'arrière du véhicule et d'un moniteur installé dans l'habitacle. CARE VIEW est destiné à tout type de poids lourd, bus utilitaire et autres porteurs.</p>

            <p>Il permet au conducteur d'opérer aisément en marche arrière dans des espaces exigus et d'éviter tout risque d'accrochage ou de collision avec des obstacles auparavant invisibles. Il rend ainsi la conduite plus sûre.</p>

            <p>Outre le confort de conduite et la prévention d'accidents, le système contribue à la sécurité des personnes et des biens.</p>
            </div><!-- .tabs-body -->
        </article>

        <article id="tab-2" class="tabs-content">
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
        </article><!-- .tab-content -->

        <article id="tab-3" class="tab-content">
            <h4>Price</h4>
        </article>

        <article id="tab-4" class="tab-content">
            <h4>Release Date</h4>
        </article>
</section>

<?php snippet('footer') ?>