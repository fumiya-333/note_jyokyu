<html>
  <?php get_template_part(CommonUtil::joinDirPathLibs(Constants::FILE_PATH_HEAD)); ?>
  <body>
    <div class="wrapper">
      <?php get_header(); ?>
      <main>
        <?php
          get_template_part(CommonUtil::joinDirPathConponents(Constants::FILE_PATH_HERO), null, $args);
          foreach ($args["component_names"] as $file_name) {
              get_template_part($file_name, null, $args);
          }
          get_template_part(CommonUtil::joinDirPathConponents(Constants::FILE_PATH_DOC_REQ));
          get_template_part(CommonUtil::joinDirPathConponents(Constants::FILE_PATH_PHONE_NUMBER));
        ?>
      </main>
      <?php
        get_template_part(CommonUtil::joinDirPathLibs(Constants::FILE_PATH_SCRIPT));
        get_footer();
      ?>
    </div>
  </body>
</html>
