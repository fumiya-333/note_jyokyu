<article class="p-article">
  <div class="p-article__inner">
    <?php
      foreach (get_the_category() as $category) {
          echo "<div class='p-article__inner__category-name'>{$category->cat_name}</div>";
      }
    ?>
    <h1 class="p-article__inner__title">
      <?= get_the_title() ?>
    </h1>
    <div class="p-article__inner__flex">
      <?php
        if (function_exists("wp_social_bookmarking_light_output_e")) {
            wp_social_bookmarking_light_output_e();
        }
      ?>
      <div class="p-article__inner__flex__date">
        <?= get_the_time(get_option('date_format')) ?>
      </div>
    </div>
    <div class="p-article__inner__img">
      <img src="<?= CommonUtil::getPostThumbnailUrl() ?>" width="100%"/>
    </div>
    <div class="p-article__inner__content">
      <?= get_the_content() ?>
    </div>
  </div>
</article>
