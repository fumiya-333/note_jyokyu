<html>
  <?= get_template_part(CommonUtil::joinDirPathLibViews(Constants::FILE_PATH_HEAD)); ?>
  <body>
    <div class="l-wrapper">
      <?= get_header(); ?>
      <main class="l-main">
        <?= get_template_part(CommonUtil::joinDirPathProjects(Constants::FILE_PATH_BREADCRUMBS), null, $args); ?>
        <section class="c-block-center l-contents">
          <div class="l-contents__inner">
            <article class="p-article-wrapper">
              <?php
                foreach ($args["component_names"] as $file_name) {
                    get_template_part($file_name, null, $args);
                }
              ?>
            </article>
            <?= get_sidebar(); ?>
          </div>
        </section>
        <?php
          get_template_part(CommonUtil::joinDirPathProjects(Constants::FILE_PATH_DOC_REQ));
          get_template_part(CommonUtil::joinDirPathProjects(Constants::FILE_PATH_PHONE_LINK));
        ?>
      </main>
      <?php
        get_template_part(CommonUtil::joinDirPathLibViews(Constants::FILE_PATH_SCRIPT));
        get_footer();
      ?>
    </div>
  </body>
</html>
