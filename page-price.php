<?php
  $args = [
    "hero_fix_title" => "コース・料金",
    "hero_fix_bg_img" => get_template_directory_uri() . "/img/plan.jpeg"
  ];
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name=”description“ content=“日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール“>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/price.css">
    <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
    <title><?= Constants::TITLE ?></title>
  </head>
  <body>
    <div class="wrapper">
      <?php get_header(); ?>
      <?php get_template_part('parts/hero_fix', null, $args); ?>
      <?php get_template_part('parts/breadcrumbs'); ?>
      <?php get_template_part('parts/price'); ?>
      <?php get_template_part('parts/doc_req'); ?>
      <?php get_template_part('parts/contact_phone_number'); ?>
      <?php get_footer(); ?>
  </div>
  </body>
  <script><?= CommonUtil::getAllConstants(); ?></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/jq/jquery.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/jq/price.js"></script>
</html>