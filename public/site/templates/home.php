<?php snippet('header') ?>

<main class="main row" role="main">

  <div class="text">

    <h1><?php echo $page->title()->html() ?></h1>


    <?php snippet('opening-times') ?>


    <h2>Senaste utstallningen</h2>
    <?php foreach(page('exhibitions')->children()->visible()->limit(1) as $exhibit): ?>
      <article>
        <h3><a href="<?php echo $exhibit->url() ?>"><?php echo $exhibit->title()->html() ?></a></h3>
        <p><?php echo $exhibit->text()->excerpt(80) ?> <a href="<?php echo $exhibit->url() ?>">read&nbsp;more&nbsp;→</a></p>
        <?php if($image = $exhibit->images()->sortBy('sort', 'asc')->first()): ?>
          <a href="<?php echo $exhibit->url() ?>">
            <img src="<?php echo $image->url() ?>" alt="<?php echo $exhibit->title()->html() ?>" >
          </a>
        <?php endif ?>
      </article>
    <?php endforeach ?>
  </div>

</main>

<?php snippet('footer') ?>
