<?php
  $args = [
    "hero_fix_title" => "コース・料金",
    "hero_fix_bg_img" => get_template_directory_uri() . "/img/plan.jpeg"
  ];
?>
<html>
  <?php get_template_part('head'); ?>
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
    <?php get_template_part('script'); ?>
  </body>
</html>