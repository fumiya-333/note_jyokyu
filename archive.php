<?php
  $args = [
    "hero_fix_title" => "ブログ",
    "hero_fix_bg_img" => get_template_directory_uri() . "/img/blog.png",
  ];

  if(is_category()){
    $cat = get_category(get_query_var("cat"));
    $args["blog_title"] = "{$cat->cat_name}一覧";
    $args["category_id"] = $cat->cat_ID;
  }else{
    $args["blog_title"] = "新着一覧";
    $args["category_id"] = "";
  }
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name=”description“ content=“日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール“>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blog.css">
    <title><?= Constants::TITLE ?></title>
  </head>
  <body>
    <div class="wrapper">
      <?php get_header(); ?>
      <?php get_template_part('parts/hero_fix', null, $args); ?>
      <?php get_template_part('parts/breadcrumbs'); ?>
      <?php get_template_part('parts/blog', null, $args); ?>
      <?php get_template_part('parts/doq_req'); ?>
      <?php get_template_part('parts/contact_phone_number'); ?>
      <?php get_footer(); ?>
  </div>
  </body>
  <script><?= CommonUtil::getAllConstants(); ?></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/jq/jquery.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/jq/blog.js"></script>
</html>