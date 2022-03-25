<?php
  $args = [
    "hero_fix_title" => "ブログ",
    "hero_fix_bg_img" => get_template_directory_uri() . "/img/blog.png",
  ];
?>
<html>
  <?php get_template_part('head'); ?>
  <body>
    <div class="wrapper">
      <?php get_header(); ?>
      <main>
        <?php get_template_part('parts/hero_fix', null, $args); ?>
        <?php get_template_part('parts/breadcrumbs'); ?>
        <?php get_template_part('parts/blog'); ?>
        <?php get_template_part('parts/doc_req'); ?>
        <?php get_template_part('parts/contact_phone_number'); ?>
      </main>
      <?php get_footer(); ?>
    </div>
    <?php get_template_part('script'); ?>
  </body>
</html>