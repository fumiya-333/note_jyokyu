<?php
  $bl_helper = BlHelper::getInstance();
?>
<section class="article-correct">
  <div class="article-correct-inner">
    <div class="article-correct-title"><?= get_the_title() ?></div>
    <div class="article-correct-date"><?= get_the_time(get_option('date_format')) ?></div>
    <div class="article-correct-content"><?= get_the_content() ?></div>
  </div>
</section>