<div class="post">
  <div class="post-contents">
    <div class="blog-contents">
      <div class="blog-title">ブログ</div>
      <div class="blog-list">
      <?php query_posts('posts_per_page=2'); ?> 
        <?php while (have_posts()) : the_post(); ?>
          <div class="blog-row">
            <div class="blog-img-box">
              <div class="blog-category">
                <?php
                  $category = get_the_category(); 
                  echo $category[0]->cat_name;
                ?>
              </div>
              <?php if ( has_post_thumbnail() ) { ?>
                <?php the_post_thumbnail(array(150, 110)); ?>
              <?php } ?>
            </div>
            <div class="blog-text-box">
              <div class="blog-row-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <div class="blog-date"><?php the_time(get_option('date_format')); ?></div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
    <div class="correct-contents">
      <div class="correct-title">お知らせ</div>
      <div class="correct-list">
        <?php
          $args = array(
            'post_type' => 'correct',
            'posts_per_page' => 3
          );
        
          $my_posts = get_posts($args);
        ?>
        <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
          <div class="correct-row">
            <div class="correct-date"><?php the_time(get_option('date_format')); ?></div>
            <div class="correct-row-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
          </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</div>