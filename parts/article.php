<article class="article">
  <div class="article-contents">
    <?php
      foreach($args["category_names"] as $category_name){
        echo "<div class='category-name'>{$category_name->cat_name}</div>";
      }
    ?>
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
    <div class="article-img-box" style="background-image: url(<?= $args['article_img'] ?>);">
      
    </div>
  </div>
</article>