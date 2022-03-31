<html>
  <?php get_template_part('head'); ?>
  <body>
    <div class="wrapper">
      <?php get_header(); ?>
      <main>
        <?php get_template_part('parts/breadcrumbs'); ?>
        <?php get_template_part('parts/article_correct'); ?>
        <?php get_template_part('parts/doc_req'); ?>
        <?php get_template_part('parts/contact_phone_number'); ?>
      </main>
      <?php get_template_part('script'); ?>
      <?php get_footer(); ?>
    </div>
  </body>
</html>