<html>
  <?php get_template_part('head'); ?>
  <body>
    <div class="wrapper">
      <?php get_header(); ?>
      <main>
        <?php get_template_part('parts/breadcrumbs'); ?>
        <section class="single">
          <div class="single-inner">
            <div class="single-left">
              <?php get_template_part('parts/article'); ?>
              <?php get_template_part('parts/article_pickup'); ?>
            </div>
            <div class="single-right">
              <?php get_sidebar(); ?>
            </div>
          </div>
        </section>
        <?php get_template_part('parts/doc_req'); ?>
        <?php get_template_part('parts/contact_phone_number'); ?>
      </main>
      <?php get_footer(); ?>
    </div>
    <?php get_template_part('script'); ?>
  </body>
</html>