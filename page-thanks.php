<html>
  <?php get_template_part('head'); ?>
  <body>
    <div class="wrapper">
      <?php get_header(); ?>
      <main>
        <?php get_template_part('parts/breadcrumbs'); ?>
        <?php get_template_part('parts/thanks'); ?>
      </main>
      <?php get_footer(); ?>
    </div>
    <?php get_template_part('script'); ?>
  </body>
</html>