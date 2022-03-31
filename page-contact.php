<?php
  add_filter("mwform_error_message_mw-wp-form-" . FORM_ID_CONTACT, "error_message", 10, 3);
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
      <main>
        <?php get_template_part('parts/hero_fix', null, $args); ?>
        <?php get_template_part('parts/breadcrumbs'); ?>
        <?php get_template_part('parts/contact'); ?>
      </main>
      <?php get_template_part('script'); ?>
      <?php get_footer(); ?>
    </div>
  </body>
</html>