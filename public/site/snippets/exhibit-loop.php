<ul class="exhibitions">
  <?php foreach(page('exhibitions')->children()->visible()->limit(3) as $exhibit): ?>
  <li>
    <h3><a href="<?php echo $exhibit->url() ?>"><?php echo $exhibit->title()->html() ?></a></h3>
    <p><?php echo $exhibit->text()->excerpt(80) ?> <a href="<?php echo $exhibit->url() ?>">read&nbsp;more&nbsp;→</a></p>
    <?php if($image = $exhibit->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $exhibit->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $exhibit->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
