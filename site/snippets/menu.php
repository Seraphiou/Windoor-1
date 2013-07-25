<nav id="nav">
    <ul class="nav-lang">
        <li><a class="nav-lang-active" href="#">fr</a></li>
        <li><a href="#">en</a></li>
        <li><a href="#">de</a></li>
    </ul>
    <ul class="nav-main">
        <?php foreach($pages->visible() AS $p): ?>
        <li<?php echo ($p->isOpen()) ? ' class="nav-active"' : '' ?>><a href="<?php echo $p->url() ?>" class="nav-link"><?php echo html($p->title()) ?></a></li>
        <?php endforeach ?>
    </ul>
</nav>