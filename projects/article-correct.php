<section class="c-block-center p-article-correct">
  <div class="p-article-correct__inner">
    <div class="p-article-correct__inner__title"><?= get_the_title() ?></div>
    <div class="p-article-correct__inner__date"><?= get_the_time(get_option('date_format')) ?></div>
    <div class="p-article-correct__inner__content"><?= get_the_content() ?></div>
  </div>
</section>
