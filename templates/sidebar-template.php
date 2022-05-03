<html>
  <?php get_template_part(CommonUtil::joinDirPathLibs(Constants::FILE_PATH_HEAD)); ?>
  <body>
    <div class="wrapper">
      <?php get_header(); ?>
      <main class="l-main">
        <?php get_template_part(CommonUtil::joinDirPathConponents(Constants::FILE_PATH_BREADCRUMBS), null, $args); ?>
        <section class="single">
          <div class="single-inner">
            <div class="single-left">
              <?php
                foreach ($args["component_names"] as $file_name) {
                    get_template_part($file_name, null, $args);
                }
              ?>
            </div>
            <div class="single-right">
              <?php get_sidebar(); ?>
            </div>
          </div>
        </section>
        <?php
          get_template_part(CommonUtil::joinDirPathConponents(Constants::FILE_PATH_DOC_REQ));
          get_template_part(CommonUtil::joinDirPathConponents(Constants::FILE_PATH_PHONE_LINK));
        ?>
      </main>
      <?php
        get_template_part(CommonUtil::joinDirPathLibs(Constants::FILE_PATH_SCRIPT));
        get_footer();
      ?>
    </div>
  </body>
</html>
