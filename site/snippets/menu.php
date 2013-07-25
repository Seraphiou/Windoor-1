<nav id="nav">
    <ul class="nav-lang">
      <?php foreach(c::get('lang.available') as $lang): ?>
      <li>
        <a<?php if($lang == c::get('lang.current')) echo ' class="nav-lang-active"' ?> href="<?php echo $page->url($lang) ?>"><?php echo $lang ?></a>
      </li>
      <?php endforeach ?>
    </ul>
    <ul class="nav-main">
        <?php $navCount = 1; ?>
        <?php foreach($pages->visible() AS $p): ?>
        <li class="nav-link<?php echo $navCount ?>"><a href="<?php echo $p->url() ?>" class="nav-link<?php echo ($p->isOpen()) ? ' nav-active' : '' ?>"><?php echo html($p->title()) ?></a></li>
        <?php $navCount++ ?>
        <?php endforeach ?>
    </ul>
</nav>