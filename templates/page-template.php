<html>
  <?= get_template_part(CommonUtil::joinDirPathLibs(Constants::FILE_PATH_HEAD)); ?>
  <body>
    <div class="l-wrapper">
      <?= get_header(); ?>
      <main class="l-main">
        <?php
          if (!is_singular(mb_substr(Constants::FILE_PATH_CORRECT, 1)) && !is_page(mb_substr(Constants::FILE_PATH_THANKS, 1))) {
              get_template_part(CommonUtil::joinDirPathProjects(Constants::FILE_PATH_HERO), null, $args);
          }
          get_template_part(CommonUtil::joinDirPathProjects(Constants::FILE_PATH_BREADCRUMBS), null, $args);
          foreach ($args["component_names"] as $file_name) {
              get_template_part($file_name, null, $args);
          }
          if (!is_page(mb_substr(Constants::FILE_PATH_CONTACT, 1)) && !is_page(mb_substr(Constants::FILE_PATH_THANKS, 1))) {
              get_template_part(CommonUtil::joinDirPathProjects(Constants::FILE_PATH_DOC_REQ));
              get_template_part(CommonUtil::joinDirPathProjects(Constants::FILE_PATH_PHONE_LINK));
          }
        ?>
      </main>
      <?php
        get_template_part(CommonUtil::joinDirPathLibs(Constants::FILE_PATH_SCRIPT));
        get_footer();
      ?>
    </div>
  </body>
</html>
