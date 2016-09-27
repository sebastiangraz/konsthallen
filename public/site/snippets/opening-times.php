
<?php $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'); ?>
<?php echo page('opening')->Extra()->kt() ?>
<dl>
<?php foreach($days as $day):  ?>
    <?php if(page('opening')->$day()->isNotEmpty()): ?>

          <dt>
            <?php echo $day ?>
          </dt>
          <dd>
            <?php echo $string = page('opening')->$day() ?>
          </dd>

    <?php endif ?>
<?php endforeach ?>
</dl>
