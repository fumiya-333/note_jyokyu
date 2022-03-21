<?php
  $args = [
    "hero_fix_title" => "お問い合わせ・資料請求",
    "hero_fix_bg_img" => get_template_directory_uri() . "/img/cta.jpeg"
  ];
?>
<html>
  <?php get_template_part('head'); ?>
  <body>
    <div class="wrapper">
      <?php get_header(); ?>
      <?php get_template_part('parts/hero_fix', null, $args); ?>
      <?php get_template_part('parts/breadcrumbs'); ?>
      <?php get_template_part('parts/contact'); ?>
      <?php get_footer(); ?>
    </div>
    <?php get_template_part('script'); ?>
  </body>
</html>