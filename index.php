<html>
  <?php get_template_part('head'); ?>
  <body>
    <div class="wrapper">
      <?php get_header(); ?>
      <main>
        <?php get_template_part('parts/hero'); ?>
        <?php get_template_part('parts/toefl_study'); ?>
        <?php get_template_part('parts/toefl_strong'); ?>
        <?php get_template_part('parts/rate_plan'); ?>
        <?php get_template_part('parts/toefl_success_stories'); ?>
        <?php get_template_part('parts/use_flow'); ?>
        <?php get_template_part('parts/qa'); ?>
        <?php get_template_part('parts/post'); ?>
        <?php get_template_part('parts/doc_req'); ?>
        <?php get_template_part('parts/contact_phone_number'); ?>
      </main>
      <?php get_template_part('script'); ?>
      <?php get_footer(); ?>
    </div>
  </body>
</html>