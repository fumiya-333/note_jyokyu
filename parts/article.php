<article class="article">
  <div class="article-inner">
    <?php
      foreach(get_the_category() as $category){
        echo "<div class='category-name'>{$category->cat_name}</div>";
      }
    ?>
    <h1 class="article-title">
      <?= get_the_title() ?>
    </h1>
    <div class="article-box-1">
      <?php
        if(function_exists("wp_social_bookmarking_light_output_e")) {
          wp_social_bookmarking_light_output_e();
        }
      ?>
      <div class="article-date">
        <?= get_the_time(get_option('date_format')) ?>
      </div>
    </div>
    <div class="article-img-box">
      <img src="<?= get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/img/noimage.png" ?>" width="100%"/>
    </div>
    <div class="article-content">
      <?= get_the_content() ?>
    </div>
  </div>
</article>