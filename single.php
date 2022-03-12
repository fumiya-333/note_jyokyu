<?php
  $category = get_the_category();
  $args = [
    "category_name" => $category[0]->cat_name,
    "article_title" => get_the_title(),
    "article_date" => get_the_time(get_option('date_format'))
  ];
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name=”description“ content=“日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール“>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/single.css">
    <title><?php echo Constants::TITLE ?></title>
  </head>
  <body>
    <div class="wrapper">
      <?php get_header(); ?>
      <?php get_template_part('parts/breadcrumbs'); ?>
      <section class="single">
        <div class="single-contents">
          <div class="single-left">
            <?php get_template_part('parts/article', null, $args); ?>
            <?php get_template_part('parts/article_pickup'); ?>
          </div>
          <div class="single-right">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </section>
      <?php get_template_part('parts/doq_req'); ?>
      <?php get_template_part('parts/contact_phone_number'); ?>
      <?php get_footer(); ?>
    </div>
  </body>
  <script></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/jq/jquery.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/jq/single.js"></script>
</html>