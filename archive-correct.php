<?php
  $args = [
    "hero_fix_title" => "お知らせ",
    "hero_fix_bg_img" => get_template_directory_uri() . "/img/correct.jpg",
    "blog_title" => "お知らせ一覧",
  ];
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