<article class="article">
  <div class="article-contents">
    <div class="category-name">
      <?= $args["category_name"] ?>
    </div>
    <h1 class="article-title">
      <?= $args["article_title"] ?>
    </h1>
    <div class="article-box-1">
      <?php
        if(function_exists("wp_social_bookmarking_light_output_e")) {
          wp_social_bookmarking_light_output_e();
        }
      ?>
      <div class="article-date">
        <?= $args["article_date"] ?>
      </div>
    </div>
  </div>
</article>